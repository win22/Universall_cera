<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use App\Models\Produit;
use Illuminate\Http\Request;
use App\Rules\Captcha;
use Session;
use Mail;

class CommandeController extends Controller
{
    public function commandeV()
    {
        request()->validate([
            'name' => ['required', 'max:191'],
            'email' => ['required', 'max:191'],
            'adresse' => ['required', 'max:191'],
            'phone' => ['required', 'max:191'],
            'quantite' => ['required', 'max:191'],
            'g-recaptcha-response' => new Captcha(),
        ]);
        $qty = request('prix_product') * request('quantite');
        $commande = Commande::create([
            'name' => request('name'),
            'email' => request('email'),
            'adresse' => request('adresse'),
            'phone' => request('phone'),
            'quantite' => request('quantite'),
            'product_id' => request('product_id'),
            'prix' => $qty,
            'token' => str_random(30),
            'num_commande' => (str_random(5) . '-2020'),
            'option' => 0,
            'status' => 0,
        ]);
        $data = array();
        $data['email'] = request('email');
        $data['name'] = $commande['name'];
        $data['name_produit'] = request('product_name');
        $data['token'] = $commande['token'];
        $data['num_commande'] = $commande['num_commande'];
        $data['prix'] = $commande['prix'];
        $data['quantite'] = request('quantite');
        $data['adresse'] = $commande['adresse'];
        $data['phone'] = $commande['phone'];
        $data['image'] = request('product_image');
        $data['date'] = $commande['created_at'];


        Mail::send('Site.mail.mail_commande', $data, function ($message) use ($data) {
            $message->to($data['email']);
            $message->from('mailtrapmail@gmail.com');
            $message->subject('Confirmation de votre commande ');
        });

        return back()->with(
            Session::put('message', 'Merci pour votre commande, Verifier vos mails, afin de confirmer votre commande ')
        );
    }

    public function validate_commande($token)
    {
        $commande = Commande::where('token', $token)
            ->first();
        if($commande)
        {
            if($commande->option == 0 && $commande->status == 0)
            {
                $commande->option = 1;
                $commande->save();
                return view('Site.commande.succes_validate');
            }elseif($commande->option == 1 && $commande->status == 0)
            {
                return view('Site.commande.wait_commande');
            }else
            {
                return view('Site.commande.error_validate');
            }
        }else
        {
            return view('Site.commande.error_validate');
        }


    }
}

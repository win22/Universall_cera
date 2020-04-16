<?php

namespace App\Http\Controllers;

use App\Models\Commande;
use Illuminate\Http\Request;
use App\Rules\Captcha;
use Session;
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

        Commande::create([
            'name' => request('name'),
            'email' => request('email'),
            'adresse' => request('adresse'),
            'phone' => request('phone'),
            'quantite' => request('quantite'),
            'product_id' => request('product_id'),
            'option' => 0,
            'status' => 0,
        ]);
        return back()->with(
            Session::put('message' ,'Merci pour votre commande, Verifier vos mails, afin de confirmer votre commande ')
        );
    }
}

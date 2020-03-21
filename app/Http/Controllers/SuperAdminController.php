<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class SuperAdminController extends Controller
{
    public function index()
    {
        return view('backend.connexion.login');
    }

    public function connexion()
    {
      request()->validate([
            'email' => ['required', 'email'],
            'password' => ['required',]
      ]);

      $result = Auth()->attempt([
            'email' => request('email'),
            'password' => request('password'),
      ]);
      $redirect = '/ceramique_universall_admin';
      $errors = Session::put('message', 'Vos identifiants sont incorrects');

      if($result)
      {
          if(Auth::user()->status == 0)
          {
              $errors = Session::put('message', "Désolé, ce compte n'est pas activé");
          }else
          {
              $errors = Session::put('message', "Bienvenue ".Auth::user()->name);
              $redirect = '/dashboard';
          }
      }
      return redirect($redirect)->with($errors);
    }
}

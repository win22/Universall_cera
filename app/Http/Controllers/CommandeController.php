<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class CommandeController extends Controller
{
    public function commandeV()
    {
        request()->validate([
           'name' => ['required' ,'max:191'],
           'email' => ['required' ,'max:191'],
           'adresse' => ['required' ,'max:191'],
           'phone' => ['required' ,'max:191'],
           'quantite' => ['required' ,'max:191'],
        ]);

        return back();
    }
}

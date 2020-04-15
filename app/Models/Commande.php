<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
    public function command_v()
    {
        request()->validate([
           'name' ,['required', 'max: 191'],
           'email' ,['required', 'max: 191'],
           'phone' ,['required', 'max: 191'],
           'adresse' ,['required', 'max: 191'],
           'quantite' ,['required', 'max: 191'],

        ]);
    }
}

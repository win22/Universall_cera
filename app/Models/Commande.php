<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
   protected $fillable = ['name', 'email', 'phone',
       'adresse', 'quantite', 'option', 'num_commande' , 'prix', 'token',
       'status', 'product_id'];
}

<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Commande extends Model
{
   protected $fillable = ['name', 'email', 'phone', 'adresse', 'quantite', 'option', 'status', 'product_id'];
}

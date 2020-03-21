<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Produit extends Model
{
    protected $fillable = [
        'name', 'model', 'taille', 'prix', 'description',
        'categorie_id', 'parent_id', 'status', 'user_id', 'image' ];
}

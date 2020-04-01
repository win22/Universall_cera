<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $sol_catalogue = Produit::where('categorie_id', 3)
            ->where('status', 1)
            ->take(8)
            ->get();
        $fa_catalogue = Produit::where('categorie_id', 7)
            ->where('status', 1)
            ->take(8)
            ->get();
        $sanitaire_catalogue = Produit::where('categorie_id', 12)
            ->where('status', 1)
            ->take(8)
            ->get();

        $produit_catalogue_1 = Produit::where('categorie_id', 12)
            ->where('parent_id', 14)
            ->where('status', 1)
            ->take(3)
            ->get();

        $produit_catalogue_2 = Produit::where('categorie_id', 12)
            ->where('parent_id', 13)
            ->where('status', 1)
            ->take(3)
            ->get();

        return view('welcome',['sol_catalogue' => $sol_catalogue])
            ->with(['fa_catalogue' => $fa_catalogue])
            ->with(['sanitaire_catalogue' => $sanitaire_catalogue])
            ->with(['produit_catalogue_1' => $produit_catalogue_1])
            ->with(['produit_catalogue_2' => $produit_catalogue_2]);
    }
}

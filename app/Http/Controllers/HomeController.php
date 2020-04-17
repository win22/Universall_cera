<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {

        $sol_catalogue_tendance = Produit::where('categorie_id', 3)
            ->where('status', 1)
            ->inRandomOrder()
            ->take(8)
            ->get();

        $lavabo_tendance = Produit::where('parent_id', 14)
            ->where('status', 1)
            ->inRandomOrder()
            ->take(8)
            ->get();
        $lavabo_tendance_header = Produit::where('parent_id', 14)
            ->where('status', 1)
            ->inRandomOrder()
            ->take(2)
            ->get();

        $sol_footer = Produit::where('categorie_id', 3)
            ->where('status', 1)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $lavabo_footer = Produit::where('parent_id', 14)
            ->where('status', 1)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $faiences_footer = Produit::where('categorie_id', 7)
            ->where('status', 1)
            ->inRandomOrder()
            ->take(3)
            ->get();

        $all_product = Produit::where('status', 1)
            ->take(12)
            ->inRandomOrder()
            ->latest()
            ->get();

        $sanitaire_catalogue_footer = Produit::where('categorie_id', 12)
            ->where('status', 1)
            ->inRandomOrder()
            ->take(3)
            ->get();




        return view('welcome', ['sol_catalogue' => $sol_catalogue_tendance])
            ->with(['lavabo_tendance' => $lavabo_tendance])
            ->with(['all_product' => $all_product])
            ->with(['faiences_footer' => $faiences_footer])
            ->with(['sol_footer' => $sol_footer])
            ->with(['lavabo_tendance_header' => $lavabo_tendance_header])
            ->with(['lavabo_footer' => $lavabo_footer])
            ->with(['sanitaire_catalogue' => $sanitaire_catalogue_footer]);
    }



    public function contacts()
    {
        return view('Site.pages.contact');
    }

    public function abouts()
    {
        return view('Site.pages.about');
    }
}

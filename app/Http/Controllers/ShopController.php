<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ShopController extends Controller
{
    public function shop()
   {
        $produit_all = Produit::where('status', 1)
            ->latest()
            ->paginate(12);
        $count = $produit_all->count();

       $sol_footer = Produit::where('categorie_id', 3)
           ->where('status', 1)
           ->take(4)
           ->get();

        return view('Site.pages.shop',['produit_all' => $produit_all])
            ->with(['count' => $count])
            ->with(['sol_footer' => $sol_footer]);

    }
}

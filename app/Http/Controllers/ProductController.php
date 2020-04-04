<?php

namespace App\Http\Controllers;

use App\Models\Produit;
use Illuminate\Http\Request;

class ProductController extends Controller
{
    public function search()
    {
        request()->validate([
            'search' => ['required', 'max:50'],
            'search_category' => ['required', 'max:1'],
        ]);
        $search = request()->search;
        $cat =  request()->search_category;
        $result =  Produit::where('status', 1)
                ->where('model', 'like', '%' .$search. '%')
                ->where('categorie_id', $cat)
                ->orWhere('parent_id', $cat)
                ->latest()
                ->paginate(8);

        $nb_count = $result->count();
        $sol_footer = Produit::where('categorie_id', 3)
            ->where('status', 1)
            ->take(4)
            ->get();

        return view('Site.pages.search', ['result' => $result])
            ->with(['nb_count' => $nb_count])
            ->with(['sol_footer' => $sol_footer]);
    }

    public function details($id)
    {
        $produit = Produit::where('id', $id)
            ->where('status', 1)
            ->first();
        return view('Site.pages.details', ['produit' => $produit]);
    }
}

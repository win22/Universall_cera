<?php

namespace App\Http\Controllers;

use App\Models\Categorie;
use App\Models\Message;
use App\Models\Produit;
use Illuminate\Http\Request;
use Session;

class ProductController extends Controller
{
    public function search()
    {
        request()->validate([
            'search' => ['required', 'max:50'],
            'search_category' => ['required', 'max:3'],
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
        $all_product = Produit::take(8)
            ->get();
        $sol_footer = Produit::where('categorie_id', 3)
            ->where('status', 1)
            ->take(4)
            ->get();
        return view('Site.pages.details',
            [
                'produit' => $produit,
                'sol_footer' => $sol_footer,
                'all_product' => $all_product
            ]);
    }


    public function all_detail()
    {


    }

    public function product_category($id)
    {
        $product_category = Produit::where('status', 1)
            ->where('categorie_id', $id)
            ->orWhere('parent_id', $id)
            ->inRandomOrder()
            ->paginate(8);

        $category =  Categorie::where('id' , $id)
            ->orWhere('parent_id', $id)
            ->first();
        $nb_count = $product_category->count();
        $sol_footer = Produit::where('categorie_id', 3)
            ->where('status', 1)
            ->take(4)
            ->get();
        return view('Site.pages.category_product',
            [
                'product_category' => $product_category,
                'nb_count' => $nb_count,
                'sol_footer' => $sol_footer,
                'category' => $category,

            ]
        );
    }


    public function news()
    {
        request()->validate([
            'email' => ['required' , 'max:191', 'unique:messages']
        ]);

        Message::create([
            'email' => request('email'),
            'status' => 0,
            'option' => 1
        ]);

        return back()
            ->with(
                Session::put('message', 'Mercie pour votre abonnement !')
            );
    }

}

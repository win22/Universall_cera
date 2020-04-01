<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Input;
use Session;
use File;

class SolController extends Controller
{
    public function index()
    {
        $all_sol = Produit::where('categorie_id', 3)
            ->latest()
            ->paginate(5);
        $nb_count = $all_sol->count();

        $categorie_id = Categorie::where('name', 'sol')
            ->first();
        $parent_id = Categorie::where('parent_id', 3)
            ->latest()
            ->get();

        return view('backend.sol.all', ['all_sol' => $all_sol])
            ->with(['nb_count' => $nb_count])
            ->with(['categorie_id' => $categorie_id])
            ->with(['parent_id' => $parent_id]);
    }

    public function search()
    {
        request()->validate([
           'search' => ['required', 'max:60']
        ]);
        $search = request('search');
        $all_sol = Produit::where('model', 'like', '%' .$search. '%')
            ->where('parent_id', 3)
            ->latest()
            ->paginate(5);
        $nb_count = $all_sol->count();

        $categorie_id = Categorie::where('name', 'sol')
            ->first();
        $parent_id = Categorie::where('parent_id', 3)
            ->latest()
            ->get();

        return view('backend.sol.all', ['all_sol' => $all_sol])
            ->with(['nb_count' => $nb_count])
            ->with(['categorie_id' => $categorie_id])
            ->with(['parent_id' => $parent_id]);
    }

    public function actives($id)
    {
       $produit = Produit::findOrFail($id);
       $produit->status = 1;
       $produit->user_id = Auth::id();
       $produit->save();
       return back()->with(
         Session::put('message',"Vous avez activé le produit " .$produit->model)
       );

    }

    public function desactives($id)
    {
        $produit = Produit::findOrFail($id);
        $produit->status = 0;
        $produit->user_id = Auth::id();
        $produit->save();
        return back()->with(
            Session::put('message',"Vous avez désactivé le produit " .$produit->model)
        );

    }

    public function save(Request $request)
    {
        request()->validate([
            'model' => ['required', 'max:60'],
            'taille' => ['required', 'max:60'],
            'prix' => ['required', 'max:30'],
            'description' => ['required'],
            'categorie_id' => ['required'],
            'parent_id' => ['required'],
            'image' => ['required', 'image']
        ]);

        $image = $request->file('image');
        if ($image) {
            $image_name = str_random(6);
            $text = strtolower($image->getClientOriginalExtension());
            $image_full_name = $image_name . '.' . $text;
            $upload_path = 'images/';
            $image_url = $upload_path . $image_full_name;
            $success = $image->move($upload_path, $image_full_name);
            if ($success) {
                $image_sol = $image_url;
            }
        }
        Produit::create([
            'model' => request('model'),
            'taille' => request('taille'),
            'prix' => request('prix'),
            'description' => request('description'),
            'categorie_id' => request('categorie_id'),
            'parent_id' => request('parent_id'),
            'status' => 0,
            'user_id' => Auth::user()->id,
            'image' => $image_sol
        ]);
        return back()->with(Session::put('message', 'Un produit de catégorie sol a été ajouté avec succès !'));
    }

    public function details($id)
    {
        $detail_sol = Produit::findOrFail($id);
        $admin_name = Admin::find($detail_sol->user_id);
        $name_cat = Categorie::where('id', $detail_sol->parent_id)->first();
        $categorie_id = Categorie::where('name', 'sol')
            ->first();
        $parent_id = Categorie::where('parent_id', 3)
            ->latest()
            ->get();
        return view('backend.sol.details', ['detail_sol' => $detail_sol])
                    ->with(['admin_name' => $admin_name])
                    ->with(['name_cat' => $name_cat])
                    ->with(['categorie_id' => $categorie_id])
                    ->with(['parent_id' => $parent_id]);
    }

    public function updates(Request $request)
    {
        request()->validate([
            'model' => ['required', 'max:60'],
            'taille' => ['required', 'max:60'],
            'prix' => ['required', 'max:30'],
            'description' => ['required'],
            'categorie_id' => ['required'],
            'parent_id' => ['required'],
        ]);
        $id = $request->id;
        $sol = Produit::findOrFail($id);
        $sol->model = $request->model;
        $sol->taille = $request->taille;
        $sol->prix = $request->prix;
        $sol->description = $request->description;
        $sol->categorie_id = $request->categorie_id;
        $sol->parent_id = $request->parent_id;
        $image = $request->file('image');
        if($image)
        {
            $image_name = str_random(10);
            $text = strtolower($image->getClientOriginalExtension());
            $image_full_name =$image_name.'.'.$text;
            $upload_path = 'images/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if($success){
                File::delete($sol->image);
                $sol->image = $image_url;
            }
        }
        $sol->save();
        return back()->with(Session::put('message', 'Ce produit a été modifié avec succès !'));
    }

    public function deletes($id)
    {
        $sol = Produit::findOrFail($id);
        File::delete($sol->image);
        $sol->delete();
        Session::put('message', 'Un sol a été supprimé. ');
        return back();

    }
}

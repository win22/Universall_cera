<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use File;

class SanitaireController extends Controller
{
    public function index()
    {
        $all_sanitaire = Produit::where('categorie_id', 12)
            ->latest()
            ->paginate(5);
        $nb_count = $all_sanitaire->count();

        $categorie_id = Categorie::where('name', 'sanitaire')
            ->first();
        $parent_id = Categorie::where('parent_id', 12)
            ->latest()
            ->get();

        return view('backend.sanitaire.all', ['all_sanitaire' => $all_sanitaire])
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
        $all_sanitaire = Produit::where('model', 'like', '%' .$search. '%')
            ->where('parent_id', 12)
            ->latest()
            ->paginate(5);
        $nb_count = $all_sanitaire->count();

        $categorie_id = Categorie::where('name', 'sanitaire')
            ->first();
        $parent_id = Categorie::where('parent_id', 12)
            ->latest()
            ->get();

        return view('backend.sanitaire.all', ['all_sanitaire' => $all_sanitaire])
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
                $image_sanitaire = $image_url;
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
            'image' => $image_sanitaire
        ]);
        return back()->with(Session::put('message', 'Un produit de catégorie sanitaire a été ajouté avec succès !'));
    }

    public function details($id)
    {
        $detail_sanitaire = Produit::findOrFail($id);
        $admin_name = Admin::find($detail_sanitaire->user_id);
        $name_cat = Categorie::where('id', $detail_sanitaire->parent_id)->first();
        $categorie_id = Categorie::where('name', 'sanitaire')
            ->first();
        $parent_id = Categorie::where('parent_id', 3)
            ->latest()
            ->get();
        return view('backend.sanitaire.details', ['detail_sanitaire' => $detail_sanitaire])
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
        $sanitaire = Produit::findOrFail($id);
        $sanitaire->model = $request->model;
        $sanitaire->taille = $request->taille;
        $sanitaire->prix = $request->prix;
        $sanitaire->description = $request->description;
        $sanitaire->categorie_id = $request->categorie_id;
        $sanitaire->parent_id = $request->parent_id;
        $image = $request->file('image');
        if($image)
        {
            $image_name = str_random(10);
            $text = strtolower($image->getClientOriginalExtension());
            $image_full_name =$image_name.'.'.$text;
            $upload_path = 'image/';
            $image_url = $upload_path.$image_full_name;
            $success = $image->move($upload_path,$image_full_name);
            if($success){
                File::delete($sanitaire->image);
                $sanitaire->image = $image_url;
            }
        }
        $sanitaire->save();
        return back()->with(Session::put('message', 'Ce produit a été modifié avec succès !'));
    }

    public function deletes($id)
    {
        $sanitaire = Produit::findOrFail($id);
        File::delete($sanitaire->image);
        $sanitaire->delete();
        Session::put('message', 'Un sanitaire a été supprimé. ');
        return back();

    }
}

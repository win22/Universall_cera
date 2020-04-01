<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use App\Models\Categorie;
use App\Models\Produit;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
use File;
class FaienceController extends Controller
{
    public function index()
    {
        $all_faience = Produit::where('categorie_id', 7)
            ->latest()
            ->paginate(5);
        $nb_count = $all_faience->count();

        $categorie_id = Categorie::where('name', 'Faience')
            ->first();
        $parent_id = Categorie::where('parent_id', 7)
            ->latest()
            ->get();

        return view('backend.faience.all', ['all_faience' => $all_faience])
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
        $all_faience = Produit::where('model', 'like', '%' .$search. '%')
            ->where('parent_id', 7)
            ->latest()
            ->paginate(5);
        $nb_count = $all_faience->count();

        $categorie_id = Categorie::where('name', 'Faience')
            ->first();
        $parent_id = Categorie::where('parent_id', 7)
            ->latest()
            ->get();

        return view('backend.faience.all', ['all_faience' => $all_faience])
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
                $image_faience = $image_url;
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
            'image' => $image_faience
        ]);
        return back()->with(Session::put('message', 'Un produit de catégorie faience a été ajouté avec succès !'));
    }

    public function details($id)
    {
        $detail_faience = Produit::findOrFail($id);
        $admin_name = Admin::find($detail_faience->user_id);
        $name_cat = Categorie::where('id', $detail_faience->parent_id)->first();
        $categorie_id = Categorie::where('name', 'faience')
            ->first();
        $parent_id = Categorie::where('parent_id', 3)
            ->latest()
            ->get();
        return view('backend.faience.details', ['detail_faience' => $detail_faience])
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
        $faience = Produit::findOrFail($id);
        $faience->model = $request->model;
        $faience->taille = $request->taille;
        $faience->prix = $request->prix;
        $faience->description = $request->description;
        $faience->categorie_id = $request->categorie_id;
        $faience->parent_id = $request->parent_id;
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
                File::delete($faience->image);
                $faience->image = $image_url;
            }
        }
        $faience->save();
        return back()->with(Session::put('message', 'Ce produit a été modifié avec succès !'));
    }

    public function deletes($id)
    {
        $faience = Produit::findOrFail($id);
        File::delete($faience->image);
        $faience->delete();
        Session::put('message', 'Un faience a été supprimé. ');
        return back();

    }
}

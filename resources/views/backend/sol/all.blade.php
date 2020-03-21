@extends('backend.admin_layout')
@section('contenu')

<div class="col-lg-12 reveal">
    <p hidden>   {{ \Carbon\Carbon::setLocale('fr') }}</p>

        <div style="background-color: white" class="card-header">
            <div class="float-left">
                <h6 class="m-0">Type : <span style="color: limegreen;font-family: 'Manjari Bold'">Céramique</span></h6>
                <p>Catégorie: Sol</p>
            </div>
            <div style="padding-top: 20px" class="float-right">
                <form class="form-inline ml-3" action="/" method="post">
                    @csrf
                    <div class="input-group input-group-sm">
                        <input style="border-color: tomato" required class="form-control form-control-navbar" type="search" name="search" placeholder="Rechercher" aria-label="Search">
                        <div class="input-group-append">
                            <button style="background-color: tomato; color: white" class="btn btn-navbar" type="submit">
                                <i class="fas fa-search"></i>
                            </button>
                        </div>
                    </div>
                </form>
            </div>

        </div>
        <div class="card-body">
        <p>Vous etes dans la catégorie sol dans l'option céramique </p>
            <div  class="shadow table-responsive  card-success1 card-outline1">
                <table class="table table-hover">
                    <thead class="text-white" style="background-color: #0c3540; border-radius: 30px !important;">
                    <tr>
                        <th style="width: 10px">image</th>
                        <th>Modele</th>
                        <th>Taille</th>
                        <th>Prix</th>
                        <th>Date de création</th>
                        <th>Status</th>
                        <th class="text-center">Action</th>
                    </tr>
                    </thead>
                    <tbody>
                    @foreach($all_sol as $v_info)
                    <tr>
                        <td><img src="{{ URL::to($v_info['image']) }}"
                                 style=" height: 40px; width: 40px; border-radius: 15px;">
                        </td>
                        <td>{{ $v_info['model'] }}</td>
                        <td>{{ $v_info['taille'] }}</td>
                        <td>
                            {{ $v_info['prix'] }} FCFA
                        </td>
                        <td>
                            {{ \Carbon\Carbon::parse($v_info['updated_at'])->diffForHumans() }}
                        </td>
                        <td>
                            @if($v_info->status == 1)
                            <span class="text-success">Activé</span>
                            @else
                            <span style="font-family: 'Manjari Bold'; color: tomato">Désactivé</span>
                            @endif
                        </td>


                        <td class="td-actions text-center">
                            @if(Auth::check() AND Auth::user()->role == 1)
                            @if($v_info->status == 1)
                            <a href="/desactive_admin/{{$v_info['id']}}" class="btn btn-dark btn-link btn-sm">
                                <i style="color: white !important;" class="fas fa-thumbs-down"></i>
                            </a>
                            @else
                            <a href="/active_admin/{{$v_info['id']}}" class="btn btn-info btn-link btn-sm">
                                <i style="color: white !important;" class="fas fa-thumbs-up"></i>
                            </a>
                            @endif
                            <a data-toggle="modal"
                               data-id="{{ $v_info['id'] }}"
                               data-name="{{ $v_info['name'] }}"
                               data-email="{{ $v_info['email'] }}"
                               data-password="{{ bcrypt($v_info['password']) }}"
                               data-role="{{ $v_info['role'] }}"
                               data-target="#updateModal"
                               class="btn btn-warning btn-link btn-sm" style="margin-left: 2px">
                                <i style="color: white !important;" class="fas fa-edit"></i>
                            </a>
                            <a id="delete" href="/delete_admin/{{ $v_info['id'] }}"
                               class="btn btn-danger btn-link btn-sm" style="margin-left: 2px">
                                <i style="color: white !important;" class="fas fa-times "></i>
                            </a>
                            @endif
                        </td>
                    </tr>
                    @endforeach
                    </tbody>
                </table>
                <p class="card-text">
                <p style="background-color:tomato; padding-left: 40%; color:white" class="card-text md-2">
                    @if($nb_count<=0)
                    <span class="">Aucune information trouvé</span>
                    @endif
                </p>
                </p>
            </div>
            <div style="padding-top: 30px" class="card-tools">
                <a href="#" class="btn btn-info  btn-sm" data-toggle="modal" data-target="#exampleModal">
                    <i style="color: #ffffff !important;" class="fas fa-plus"></i> &nbsp; Ajouter un sol</a>
                <ul class="pagination pagination-sm float-right">
                    {{ $all_sol->links() }}
                </ul>
            </div>
        </div>
    </div>

<div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg " role="document">
        <div class="modal-content card-orange card-outline">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Ajouter un produit de type Sol</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <form enctype="multipart/form-data" action="{{ route('sol_save') }}" method="post">
                    @csrf
                    <div class="row">
                        <div class="form-group col-md-12">
                            <h6 class="">Modèle <span class="text-orange">*</span></h6>
                            <input required type="text" name="model" class="form-control" placeholder="Saisir ici...">

                            @if($errors->has('model'))
                            <small id="emailHelp" class="form-text text-danger">{{$errors->first('model')}}</small>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <h6 class="">Taille <span class="text-orange">*</span></h6>
                            <input required type="text" name="taille" class="form-control" placeholder="Saisir ici...">

                            @if($errors->has('taille'))
                            <small id="emailHelp" class="form-text text-danger">{{$errors->first('taille')}}</small>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <h6 class="">Prix<span class="text-orange">*</span></h6>
                            <input required type="text" name="prix" class="form-control" placeholder="Saisir ici...">

                            @if($errors->has('prix'))
                            <small id="emailHelp" class="form-text text-danger">{{$errors->first('prix')}}</small>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-6">
                            <h6 class="">Catégorie<span class="text-orange">*</span></h6>
                            <select  required class="form-control" name="categorie_id">
                                @if($categorie_id == null)
                                <option  class="text-orange" value="">Aucune information n'a été trouvée</option>
                                @else
                                <option  class="text-orange" value="{{ $categorie_id->id }}">{{ $categorie_id->name }}</option>
                                @endif
                            </select>
                            @if($errors->has('categorie_id'))
                            <small id="emailHelp" class="form-text text-danger">{{$errors->first('categorie_id')}}</small>
                            @endif
                        </div>
                        <div class="form-group col-md-6">
                            <h6 class="">Sous catégorie<span class="text-orange">*</span></h6>
                            <select required class="form-control" name="parent_id">
                                @if($parent_id == null)
                                <option  class="text-orange" value="">Aucune information n'a été trouvée</option>
                                @else
                                @foreach($parent_id as $parent)
                                <option class="text-orange" value="{{ $parent->id }}">{{ $parent->name }}</option>
                                @endforeach
                                @endif
                            </select>
                            @if($errors->has('parent_id'))
                            <small id="emailHelp" class="form-text text-danger">{{$errors->first('parent_id')}}</small>
                            @endif
                        </div>
                    </div>
                    <div class="row">
                        <div class="form-group col-md-12">
                            <h6 class="">Déscription<span class="text-orange">*</span></h6>
                            <textarea name="description" class="form-control"></textarea>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-4">
                            <div class="form-group">
                                <h6 class="">Image du produit</h6>
                                <input required accept="image/*" type="file" name="image">
                            </div>
                        </div>
                    </div>

                    <div class="modal-footer">
                        <button type="submit" class="btn btn-outline-orange btn-sm">Ajouter</button>
                        <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Annuler</button>
                    </div>
                </form>


            </div>

        </div>
    </div>
</div>
@endsection

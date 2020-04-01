@extends('backend.admin_layout')
@section('contenu')
<p hidden>   {{ \Carbon\Carbon::setLocale('fr') }}</p>
<div class="card card-secondary card-success1 fade show card-outline1">
    <div class="card-body fade show">
        <div class="row reveal container">
            <div class="col-md-12 col-sm-12">
                <h6>Detail d'un produit</h6>
                <h6><span>Modele</span> :{{$detail_sanitaire->model }}</h6>
                <div class="row">
                    <div class="col-md-4">
                        <img src="{{ URL::to($detail_sanitaire['image'] )}}" style="height: 300px; width: 350px">
                    </div>
                    <div class="col-md-8">
                        <div class="row">
                            <div class="col-md-3">
                                <h6>Marque : <span style="color: #06aacc;">
                                        Céramique
                                    </span></h6>
                            </div>
                            <div class="col-md-3">
                                <h6>Catégorie : <span style="color: #06aacc">sanitaire</span></h6>
                            </div>
                            <div class="col-md-6">
                                <h6>Sous catégorie : <span style="color: #06aacc">
                                        {{ $name_cat->name }}
                                    </span></h6>
                            </div>
                        </div>
                        <h6><span style="color: tomato; padding-bottom: 20px">Description :</span> <br/>
                            {{ $detail_sanitaire->description }}
                        </h6>
                        <div class="bg-gray py-2 px-3 btn-rounded">
                            Prix {{ $detail_sanitaire->prix }} FCFA
                        </div>
                        <h6 style="padding-top: 15px;color: tomato;">Autre caractéristiques</h6>
                        <div  class="row">

                            <div class="col-md-3">
                                <h6>Taille : {{ $detail_sanitaire->taille }} </h6>
                            </div>
                            <div class="col-md-3">
                                <h6> Status :
                                    @if($detail_sanitaire->status == 1)
                                    <span style="color: limegreen">Activé</span>
                                    @else
                                    <span style="color: tomato">Désactiver</span>
                                    @endif
                                </h6>
                            </div>
                            <div class="col-md-6">
                                <h6> Date de creation: {{ $detail_sanitaire->created_at }} </h6>
                            </div>
                        </div>
                        <h6 style=" padding-top: 20px; color: rgba(255,66,0,0.99)"><span style="color: #323232 ! important;">Message:</span><br/>
                            <i class="fas fa-exclamation-circle"></i> Ce produit ne dispose que d'une seul image  </h6>
                    </div>
                </div>
                <div class="float-left">
            <span class="small">Modifié {{  \Carbon\Carbon::parse($detail_sanitaire['updated_at'])->diffForHumans() }}
             par
                @if($admin_name['name'] == null)
                un utilisateur qui n'existe plus dans la base de donnée
                @else
                {{ $admin_name['name']}}
                @endif
            </span>
                </div>
                <div class="mt-3 float-right">
                    <a  data-toggle="modal"
                        data-id="{{ $detail_sanitaire['id'] }}"
                        data-model="{{ $detail_sanitaire['model'] }}"
                        data-taille="{{ $detail_sanitaire['taille'] }}"
                        data-prix="{{ $detail_sanitaire['prix'] }}"
                        data-categorie_id="{{ $detail_sanitaire['categorie_id'] }}"
                        data-parent_id="{{ $detail_sanitaire['parent_id'] }}"
                        data-description="{{ $detail_sanitaire['description'] }}"
                        data-target="#updateModal3"

                        style="color: white"
                        class="btn btn-primary  btn-sm">
                        <i class="fas fa-edit fa-lg mr-2"></i>
                        Modifier
                    </a>
                    <a href="{{ route('sanitaire')}}" class="btn btn-danger btn-sm">
                        <i class="fas fa-backspace fa-lg mr-2"></i>
                        Retour
                    </a>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="modal fade" id="updateModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel"
     aria-hidden="true">
    <div class="modal-dialog modal-lg" role="document">
        <div class="modal-content card-orange card-outline">
            <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">Modifier un utilisateur</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form enctype="multipart/form-data" action="/update_sanitaire/test" method="post">
                @csrf
                <div class="modal-body">
                    <input hidden name="id" id="id" value="">
                    @include('backend.sanitaire.edit')
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-outline-orange btn-sm">Modifier</button>
                    <button type="button" class="btn btn-danger btn-sm" data-dismiss="modal">Annuler</button>
                </div>
            </form>

        </div>
    </div>
</div>
@endsection

@if(Auth::user()->id == 1)

    <div class="row">
        <div class="form-group col-md-12">
            <h6 class="">Modèle <span class="text-orange">*</span></h6>
            <input required type="text" id="model" name="model" class="form-control" placeholder="Saisir ici...">
            @if($errors->has('model'))
            <small id="emailHelp" class="form-text text-danger">{{$errors->first('model')}}</small>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <h6 class="">Taille <span class="text-orange">*</span></h6>
            <input id="taille" required type="text" name="taille" class="form-control" placeholder="Saisir ici...">

            @if($errors->has('taille'))
            <small id="emailHelp" class="form-text text-danger">{{$errors->first('taille')}}</small>
            @endif
        </div>
        <div class="form-group col-md-6">
            <h6 class="">Prix<span class="text-orange">*</span></h6>
            <input id="prix" required type="text" name="prix" class="form-control" placeholder="Saisir ici...">

            @if($errors->has('prix'))
            <small id="emailHelp" class="form-text text-danger">{{$errors->first('prix')}}</small>
            @endif
        </div>
    </div>
    <div class="row">
        <div class="form-group col-md-6">
            <h6 class="">Catégorie<span class="text-orange">*</span></h6>
            <select id="categorie_id" required class="form-control" name="categorie_id">
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
            <select id="parent_id" required class="form-control" name="parent_id">
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
            <textarea id="description" name="description" class="form-control"></textarea>
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
@endif

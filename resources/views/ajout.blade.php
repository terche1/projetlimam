@extends('layouts.app')
@section('titre')
Ajouter des Actes de Vente
@endsection
@section('contenue')
<div>
    <ul>
    @foreach($errors->all() as $error)
        <li class="alert alert-danger">
        {{ $error }}
        </li>
    @endforeach
    </ul>
</div>
<form action="{{route('insertion')}}" method="get">
<div class="mb-3">
<label class="form-label">Nom Vendeur</label>
<input type="texte" class="form-control" name="NomVendeur" id="NomVendeur" required>
</div>
<div class="mb-3">
<label class="form-label">NNI Vendeur</label>
<input type="Number" class="form-control" name="NNIVendeur" id="NNIVendeur" required>
</div>
<div class="mb-3">
<label class="form-label">Date Naiss Vendeur</label>
<input type="Date" class="form-control" name="DateNaissanceVendeur" id="DeateNaissanceVendeur" required>
</div>
<div class="mb-3">
<label class="form-label">Nom Acheteur</label>
<input type="texte" class="form-control" name="NomAcheteur" id="NomAcheteur" required>
</div>
<div class="mb-3">
<label class="form-label">NNI Acheteur</label>
<input type="Number" class="form-control" name="NNIAcheteur" id="NNIAcheteur" required>
</div>
<div class="mb-3">
<label class="form-label">Date Naiss Acheteur</label>
<input type="Date" class="form-control" name="DateNaissanceAcheteur" id="DateNaissanceAcheteur" required>
</div>
<div class="mb-3">
<label class="form-label">Chose Vendu</label>
<input type="texte" class="form-control" name="ChoseVendu" id="ChoseVendu" required>
</div>
<div class="mb-3">
<label class="form-label">Prix</label>
<input type="Number" class="form-control" name="Prix" id="Prix" required>
</div>
<div class="mb-3">
<label class="form-label">Temoin 1</label>
<input type="texte" class="form-control" name="Temoin1" id="Temoin1" required>
</div>
<div class="mb-3">
<label class="form-label">NNI Temoin 1</label>
<input type="Number" class="form-control" name="NNITemoin1" id="NNITemoin1" required>
</div>
<div class="mb-3">
<label class="form-label">Temoin 2</label>
<input type="texte" class="form-control" name="Temoin2" id="Temoin2" required>
</div>
<div class="mb-3">
<label class="form-label">NNI Temoin 2</label>
<input type="Number" class="form-control" name="NNITemoin2" id="NNITemoin2" required>
</div>
 </form>
 <Button>Enregistrer</Button>
 @endsection
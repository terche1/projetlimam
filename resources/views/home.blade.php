@extends('layouts.app')

@section('content')
@if(session('msg'))
   <div class="alert alert-success">{{session('msg')}}</div>
   @endif
   
<div class="container">
    <div class="card-body">
         <a href="{{ route('insertion') }}" class="btn btn-primary mr-2">Ajouter</a>
   
    </div>
    <br>
    <br>
    <br>
    <table class="table table-primary" id="Table">
        <thead class="table table-primary">
            <tr>
                <th>Nom Vendeur</th>
                <th>NNI Vendeur</th>
                <th>Date Naissance Vendeur</th>
                <th>Nom Acheteur</th>
                <th>NNI Acheteur</th>
                <th>Date Naiss Acheteur</th>
                <th>Chose Vendu</th>
                <th>Prix</th>
                <th>Temoin 1</th>
                <th>NNI Temoin 1</th>
                <th>Temoin 2</th>
                <th>NNI Temoin 2</th>
                <th>Actions</th>
            </tr>
        </thead>
        <tbody>
            @foreach($acte_vente as $element)
            <tr class="table table-info">
                <td>{{$element->NomVendeur}}</td>
                <td>{{$element->NNIVendeur}}</td>
                <td>{{$element->DateNaissanceVendeur}}</td>
                <td>{{$element->NomAcheteur}}</td>
                <td>{{$element->NNIAcheteur}}</td>
                <td>{{$element->DateNaissanceAcheteur}}</td>
                <td>{{$element->ChoseVendu}}</td>
                <td>{{$element->Prix}}</td>
                <td>{{$element->Temoin1}}</td>
                <td>{{$element->NNITemoin1}}</td>
                <td>{{$element->Temoin2}}</td>
                <td>{{$element->NNITemoin2}}</td>
                <td><a class="btn btn-warning" href="{{route('save',['id'=>$element->id])}}">Imprimer</a></td>
            </tr>
            @endforeach
        </tbody>
    </table>
</div>
@endsection

<script>
    $(document).ready(function(){
        $('#Table').DataTable();
    });
</script>
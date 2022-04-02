@extends('Layouts.app')
@section('content')
<div class="card">
    <div class="card-header"><h3>LISTES DES VENTES</h3></div>
    <a class="btn btn-sm btn-info" href="/ventes/creer">Ajouter</a>
</div>
<div class="card-body">
    <table class="table table-bordered table-striped table-sm table-hover">
        <thead>
            <tr>
                <th>DATE</th>
                <th>NUMERO</th>
                <th>VENDEUR</th>
                <th>TOTAL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ventes as $vente)
                <tr>
                    <td>{{ date_format($vente->created_at, 'd/m/Y H:i')}}</td>
                    <td><a href="/ventes/{{ $vente->id }}"> {{$vente->name}} </a></td>
                    <td>{{$vente->employe->nom . "  ".$vente->employe->prenom}}</td>
                    <td>{{$vente->total}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
</div>
@endsection

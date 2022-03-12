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

                <th>NOM</th>
                <th>PRIX</th>
                <th>NOMBRE</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($ventes as $art)
                <tr>

                    <td>{{$art->nom}}</td>
                    <td>{{$art->prixvente}}</td>
                    <td>{{$art->nombrevente}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
</div>
@endsection

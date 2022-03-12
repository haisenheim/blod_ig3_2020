@extends('Layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>LISTES DES FOURNISSEURS</h3>
        <a class="btn btn-sm btn-info" href="/fournisseurs/creer">Ajouter</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-sm table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOM</th>
                    <th>TEL</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($fournisseurs as $art)
                    <tr>
                        <td>{{$art->id}}</td>
                        <td>{{$art->nom}}</td>
                        <td>{{$art->telephone}}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection

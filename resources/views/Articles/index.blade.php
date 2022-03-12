@extends('Layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>LISTES DES ARTICLES</h3>
        <a class="btn btn-sm btn-info" href="/articles/creer">Ajouter</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-sm table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>DESIGNATION</th>
                    <th>PU</th>
                    <th>Categorie</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $art)
                    <tr>
                        <td>{{$art->id}}</td>
                        <td>{{$art->designation}}</td>
                        <td>{{$art->prix}}</td>
                        <td>{{$art->categorie?$art->categorie->name:'Aucune catégorie'}}</td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection

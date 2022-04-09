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
                    <th>STOCK</th>
                    <th>PU</th>
                    <th>Categorie</th>
                    <th></th>
                </tr>
            </thead>
            <tbody>
                @foreach ($articles as $art)
                    <tr style="background-color: {{ $art->quantite>$art->seuil?'':'#dd7075' }}">
                        <td>
                            @if ($art->active)
                                <span class="badge badge-success"><i class="fa fa-angle-right"></i></span>
                            @else
                            <span class="badge badge-danger"><i class="fa fa-angle-left"></i></span>
                            @endif
                        </td>
                        <td>{{$art->designation}}</td>
                        <td>{{ number_format($art->quantite,0,',','.') }}</td>
                        <td>{{$art->prix}}</td>
                        <td>{{$art->categorie?$art->categorie->name:'Aucune catégorie'}}</td>
                        <th>
                            @if($art->active)
                                <a title="Desactiver" class="btn btn-xs btn-warning" href="/article/disable/{{$art->id}}"><i class="fa fa-lock"></i></a>
                            @else
                            <a class="btn btn-xs btn-info" title="Activer" href="/article/enable/{{$art->id}}"><i class="fa fa-unlock"></i></a>
                            @endif
                        </th>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection

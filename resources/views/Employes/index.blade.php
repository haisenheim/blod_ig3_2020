@extends('Layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>LISTES DES EMPLOYES</h3>
        <a class="btn btn-sm btn-info" href="/employes/creer">Ajouter</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered table-striped table-sm table-hover">
            <thead>
                <tr>
                    <th>ID</th>
                    <th>NOM</th>
                    <th>PRENOM</th>
                    <th>TEL</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($employes as $emp)
                    <tr>
                        <td>{{$emp->id}}</td>
                        <td>{{$emp->nom}}</td>
                        <td>{{$emp->prenom}}</td>
                        <td>{{$emp->telephone}}</td>

                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>

</div>
@endsection


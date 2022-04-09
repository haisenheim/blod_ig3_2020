@extends('Layouts.app')
@section('content')
<div class="card">
    <div class="card-header">
        <h3>JOURNAL DES VENTES</h3>
        <ul style="" class="float-right list-inline">
            <li class="list-inline-item">
                <a class="btn btn-sm btn-success" href="/ventes/creer"><i class="fa fa-plus"></i></a>
            </li>
        </ul>
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
                    <td>{{number_format($vente->total,0,',','.')}}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>
</div>
</div>
</div>
@endsection

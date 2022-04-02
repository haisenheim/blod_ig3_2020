@extends('Layouts.app')
@section('content')
<div class="card">
    <div class="card-header"><h3>VENTE &numero; : {{ $vente->name}}</h3></div>

</div>
<div class="card-body">
    <h4>TOTAL : {{ number_format($vente->total,0,',','.') }}</h4>
    <table class="table table-sm table-bordered table-striped">
        <thead>
            <tr>
                <th>DESIGNATION</th>
                <th>PU</th>
                <th>QUANTITE</th>
                <th>TOTAL</th>
            </tr>
        </thead>
        <tbody>
            @foreach ($vente->lignes as $ligne)
                <tr>
                    <td>{{ $ligne->article->designation}}</td>
                    <td>{{ number_format($ligne->article->prix,0,',','.') }}</td>
                    <td>{{ $ligne->quantity}}</td>
                    <td>{{ $ligne->article->prix * $ligne->quantity }}</td>
                </tr>
            @endforeach
        </tbody>
    </table>
</div>

</div>
</div>
@endsection

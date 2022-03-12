@extends('Layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>NOUVELLE VENTE</h3>
    </div>
    <div class="card-body">
        <form action="/ventes/enregistrer" method="post">
            @csrf
            <div class="row">
                <div class="col-5">
                    <div class="form-group">
                        <label for="">NOM</label>
                        <input class="form-control" name="nom" type="text">
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="">PRIX</label>
                        <input class="form-control" name="prixvente" type="number">
                    </div>
                </div>

                <div class="col-4">
                    <div class="form-group">
                        <label for="">NOMBRE</label>
                        <input class="form-control" name="nombrevente" type="number">
                    </div>
                </div>


                <div class="col-2">
                    <button class="btn btn-sm btn-success mt-4" type="submit"> ENREGISTRER <i class="fa fa-save"></i></button>
                </div>
            </div>

        </form>
    </div>

</div>
@endsection

@extends('Layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>NOUVEAU FORNISSEUR</h3>
    </div>
    <div class="card-body">
        <form action="/fournisseurs/enregistrer" method="post">
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
                        <label for="">TEL</label>
                        <input class="form-control" name="telephone" type="phone">
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

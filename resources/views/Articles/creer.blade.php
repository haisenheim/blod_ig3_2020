@extends('Layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>NOUVEL ARTICLE</h3>
    </div>
    <div class="card-body">
        <form action="/articles/enregistrer" method="post">
            @csrf
            <div class="row">
                <div class="col-3">
                    <div class="form-group">
                        <label for="">DESIGNATION</label>
                        <input class="form-control" name="designation" type="text">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label for="">QUANTITE</label>
                        <input class="form-control" name="quantite" type="number">
                    </div>
                </div>
                <div class="col-2">
                    <div class="form-group">
                        <label for="">PRIX</label>
                        <input class="form-control" name="prix" type="number">
                    </div>
                </div>
                <div class="col-3">
                    <div class="form-group">
                        <label for="">CATEGORIE</label>
                        <select class="form-control" name="categorie_id" id="">
                            <option value="">CHOISIR</option>
                            @foreach ($cats as $cat)
                                <option value="{{ $cat->id}}">{{$cat->name }}</option>
                            @endforeach
                        </select>
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

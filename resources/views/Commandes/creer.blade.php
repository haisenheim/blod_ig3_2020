@extends('Layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>NOUVELLE COMMANDE</h3>
    </div>
    <div class="card-body">
            @csrf
            <div class="row">
                <div class="col-5">
                    <div class="form-group">
                        <label for="">ARTICLE</label>
                        <select name="" id="article_id" class="form-control">
                            <option value="">Choisir...</option>
                            @foreach ($articles as $article)
                            <option value="{{$article->id}}">{{$article->designation}}</option>
                            @endforeach
                        </select>
                    </div>
                </div>
                <div class="col-4">
                    <div class="form-group">
                        <label for="">QUANTITE</label>
                        <input class="form-control" name="quantity" type="number">
                    </div>
                </div>
                <div class="col-2">
                    <button class="btn btn-sm btn-success mt-4" type="submit">AJOUTER <i class="fa fa-save"></i></button>
                </div>
            </div>
    </div>

    <div class="card">
        <div class="card-header">CONTENU</div>
        <div class="card-body">
            <table class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>ARTICLE</th>
                        <th>QUANTITE</th>
                        <th></th>
                    </tr>
                </thead>
            </table>
        </div>
        <div class="card-footer">
            <button class="btn btn-info btn-sm">ENREGISTRER</button>
        </div>
    </div>

</div>
@endsection

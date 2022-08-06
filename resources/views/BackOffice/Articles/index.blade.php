@extends('Layouts.back')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>GESTION DES ARTICLES</h3>
        <a href="#" data-toggle="modal" data-target="#add" class="btn btn-sm btn-danger">Ajouter</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>DATE</th>
                        <th>TITRE</th>
                        <th>CATEGORIE</th>
                        <td>AUTEUR</td>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($articles as $slide)
                        <tr>
                            <td>{{ date_format($slide->created_at,'d/m/Y') }}</td>
                            <td>{{ $slide->name }}</td>
                            <td>{{ $slide->categorie?$slide->categorie->name:'-' }}</td>
                            <td>{{ $slide->auteur?$slide->auteur->name:'-' }}</td>
                            <td>
                                @if($slide->active)
                                    <a href="/admin/articles/disable/{{ $slide->id }}" class="btn btn-sm btn-danger">Desactiver</a>
                                @else
                                <a href="/admin/articles/enable/{{ $slide->id }}" class="btn btn-sm btn-success">Activer</a>
                                @endif
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</div>
<div class="modal fade" id="add">
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <h4 class="modal-title">NOUVEL ARTICLE</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" enctype="multipart/form-data" action="/admin/articles">
        <div class="modal-body">
            @csrf
          <fieldset>
              <legend>Infos</legend>
              <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <input type="text" name="name" required placeholder="Titre" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <textarea name="body" required placeholder="Saisir le corps de l'article" id="" cols="30" class="form-control" rows="3"></textarea>
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <input type="file" name="photo" required class="form-control">
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <select name="categorie_id" required id="" class="form-control">
                            <option value="">Selectionner une categorie</option>
                            @foreach ($categories as $cat)
                                <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                            @endforeach
                        </select>
                    </div>
                </div>

                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <input type="text" name="youtube_url" placeholder="Lien de la video sur Youtube" class="form-control">
                    </div>
                </div>

              </div>
          </fieldset>
        </div>
        <div class="modal-footer justify-content-between">
          <button type="submit" class="btn btn-danger">Enregistrer</button>
        </div>
        </form>
      </div>
      <!-- /.modal-content -->
    </div>
    <!-- /.modal-dialog -->
  </div>
@endsection

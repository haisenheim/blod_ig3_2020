@extends('Layouts.back')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>GESTION DES SLIDES</h3>
        <a href="#" data-toggle="modal" data-target="#add" class="btn btn-sm btn-danger">Ajouter</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>DATE</th>
                        <th>TITRE</th>
                        <th>SOUS TITRE</th>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($slides as $slide)
                        <tr>
                            <td>{{ date_format($slide->created_at,'d/m/Y') }}</td>
                            <td>{{ $slide->titre }}</td>
                            <td>{{ $slide->soustitre }}</td>
                            <td>
                                @if($slide->active)
                                    <a href="/admin/slides/disable/{{ $slide->id }}" class="btn btn-sm btn-danger">Desactiver</a>
                                @else
                                <a href="/admin/slides/enable/{{ $slide->id }}" class="btn btn-sm btn-success">Activer</a>
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
          <h4 class="modal-title">NOUVELLE SLIDE</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST" enctype="multipart/form-data" action="/admin/slides">
        <div class="modal-body">
            @csrf
          <fieldset>
              <legend>Infos</legend>
              <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <input type="text" name="titre" placeholder="Titre" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <input type="text" name="soustitre" placeholder="Sous titre" class="form-control">
                    </div>
                </div>
                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <input type="file" name="photo" class="form-control">
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

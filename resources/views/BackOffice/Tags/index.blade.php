@extends('Layouts.back')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>GESTION DES MOTS CLEFS</h3>
        <a href="#" data-toggle="modal" data-target="#add" class="btn btn-sm btn-danger">Ajouter</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>NOM</th>
                        <td>Actions</td>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($tags as $slide)
                        <tr>

                            <td>{{ $slide->name }}</td>

                            <td>
                                @if($slide->active)
                                    <a href="/admin/tags/disable/{{ $slide->id }}" class="btn btn-sm btn-danger">Desactiver</a>
                                @else
                                    <a href="/admin/tags/enable/{{ $slide->id }}" class="btn btn-sm btn-success">Activer</a>
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
          <h4 class="modal-title">NOUVEAU MOT CLEF</h4>
          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
            <span aria-hidden="true">&times;</span>
          </button>
        </div>
        <form method="POST"  action="/admin/tags">
        <div class="modal-body">
            @csrf
              <div class="row">

                <div class="col-md-12 col-sm-12">
                    <div class="form-group">
                        <input type="text" name="name" placeholder="Categorie" class="form-control">
                    </div>
                </div>

              </div>
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

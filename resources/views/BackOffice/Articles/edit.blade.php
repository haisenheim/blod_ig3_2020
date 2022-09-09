@extends('Layouts.back')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>{{ $article->name }}</h3>
        <?php $colors=['success','danger','warning','info'] ?>
        <a href="#" data-toggle="modal" data-target="#addTag" class="btn btn-sm btn-success">Ajouter un mot clef</a>
        <div style="max-width: 600px; float:right; border:1px solid #aaa; padding:20px; border-radius:10px;" class="pull-right">
            <ul class="list-inline">
                <?php $i=0; ?>
                @foreach ($article->tags as $tag)
                    <li class="list-inline-item">
                        <div>
                            <span class="badge badge-{{ $colors[$i%4] }}">{{ $tag->name }} <span><a href="/admin/tag/delete/{{ $article->id }}/{{ $tag->id }}">x</a></span></span>
                        </div>
                    </li>
                    <?php $i++; ?>
                @endforeach
            </ul>
        </div>
    </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="/admin/articles/save">
            <div class="modal-body">
                @csrf
              <fieldset>
                  <legend>Infos</legend>
                  <div class="row">
                    <input type="hidden" name="id" value={{ $article->id }}>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <input type="text" name="name" value="{{ $article->name }}" required placeholder="Titre" class="form-control">
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <textarea name="body"  placeholder="Saisir le corps de l'article" id="" cols="30" class="form-control" rows="3">{{ $article->body }}</textarea>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <input type="file" name="photo" class="form-control">
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <select name="category_id"  id="" class="form-control">
                                <option value="">Selectionner une categorie</option>
                                @foreach ($categories as $cat)
                                    <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                    <div class="col-md-12 col-sm-12">
                        <div class="form-group">
                            <input type="text" name="youtube_url" value="{{ $article->youtube_url }}" placeholder="Lien de la video sur Youtube" class="form-control">
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
</div>

<div class="modal fade" id="addTag">
    <div class="modal-dialog">
      <div class="modal-content">

        <form method="POST" enctype="multipart/form-data" action="/admin/article/tag">
        <div class="modal-body">
            @csrf
            <input type="hidden" name="article_id" value={{ $article->id }}>
            <div class="col-md-12 col-sm-12">
                <div class="form-group">
                    <select name="tag_id" required id="" class="form-control">
                        <option value="">Selectionner un mot clef</option>
                        @foreach ($tags as $cat)
                            <option value="{{ $cat->id }}">{{ $cat->name }}</option>
                        @endforeach
                    </select>
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

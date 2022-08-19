@extends('Layouts.back')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>INFOS DU SITE</h3>

    </div>
    <div class="card-body">
        <form method="POST" enctype="multipart/form-data" action="/admin/infos">
            <div class="">
                        @csrf
                        <div class="row">
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="">EMAIL</label>
                                    <input type="text" name="email" required value="{{ $param->email }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="">TELEPHONE</label>
                                    <input type="text" name="phone" required value="{{ $param->phone }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="">LIEN FACEBOOK</label>
                                    <input type="text" name="facebook" value="{{ $param->facebook }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="">LIEN TWITTER</label>
                                    <input type="text" name="twitter" value="{{ $param->twitter }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="">LIEN INSTAGRAM</label>
                                    <input type="text" name="instagram" value="{{ $param->instagram }}" class="form-control">
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="">TEXTE DE LA CONTACT</label>
                                    <textarea name="contact_text"  placeholder="" id="" cols="30" class="form-control" rows="3">{{ $param->contact_text }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="">TEXTE A PROPOS</label>
                                    <textarea name="welcome"  placeholder="" id="" cols="30" class="form-control" rows="3">{{ $param->welcome }}</textarea>
                                </div>
                            </div>
                            <div class="col-md-12 col-sm-12">
                                <div class="form-group">
                                    <label for="">LOGO</label>
                                    <input type="file" name="logo" class="form-control">
                                </div>
                            </div>


                        </div>
                    </div>
                    <div class="modal-footer justify-content-between">
                    <button type="submit" class="btn btn-danger">Enregistrer</button>
                    </div>
            </form>
    </div>

</div>
@endsection



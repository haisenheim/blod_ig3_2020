@extends('Layouts.app')

@section('content')
<div class="card">
    <div class="card-header">
        <h3>NOUVELLE VENTE</h3>
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
                        <input id='qte' class="form-control" name="prixvente" type="number">
                    </div>
                </div>
                <div class="col-2">
                    <button id="btn-add" class="btn btn-sm btn-success mt-4" type="submit">AJOUTER <i class="fa fa-save"></i></button>
                </div>
            </div>
    </div>

    <div class="card">
        <div class="card-header">CONTENU</div>
        <div class="card-body">
            <table id="tab-vente" class="table table-bordered table-sm">
                <thead>
                    <tr>
                        <th>ARTICLE</th>
                        <th>QUANTITE</th>
                        <th></th>
                    </tr>
                </thead>
                <tbody>
                </tbody>
            </table>
        </div>
        <div class="card-footer">
            <button id="btn-save" class="btn btn-info btn-sm">ENREGISTRER</button>
        </div>
    </div>

</div>
<script src="{{ asset('sbtheme/vendor/jquery/jquery.js')}}"></script>
<script>
    //console.log('Bonjour, ici une nouvelle vente');
   // console.log({})
   $('#btn-add').click(function(){
       //console.log($('#qte').val());
       //console.log($( "#article_id option:selected" ).text());
       var qte = $('#qte').val();
       var designation = $( "#article_id option:selected" ).text();
       var article_id = $('#article_id').val();
       $('#tab-vente').find('tbody').append('<tr data-quantity='+ qte +' data-id='+ article_id +'><td>'+designation+'</td><td>'+qte+'</td><td></td></tr>');
   });

   $('#btn-save').click(function(){
        //console.log("Je veux enregistrer");
        var data = [];
        $('#tab-vente').find('tbody tr').each(function(){
            var elt = {};
            var tr = $(this);
            elt.id = tr.data('id');
            elt.qty = tr.data('quantity');
            //console.log(elt);
            data.push(elt);
        });
        console.log(data);
        $.ajax({
            url:'/ventes/enregistrer',
            type:'post',
            dataType:'json',
            data:{_token:$('input[name ="_token"]').val(), panier:data},
            success:function(donnees){
                console.log(donnees);
            },
            error:function(){
                alert("Something went wrong !!!");
            }
        });
       //$('#tab-vente').find('tbody').append('<tr><td>'+designation+'</td><td>'+qte+'</td><td></td></tr>');
   });

</script>

@endsection

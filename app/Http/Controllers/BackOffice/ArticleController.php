<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\Categorie;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class ArticleController extends Controller
{
    //
    public function index(){
        $articles = Article::all();
        $categories = Categorie::all();
        return view('BackOffice/Articles/index')->with(compact('articles','categories'));
    }

    public function store(Request $request){
        //dd($request);
        $data['name'] = $request->name;
        $data['body'] = $request->body;
        $data['youtube_url'] = $request->youtube_url;
        $data['category_id'] = $request->categorie_id;
        $data['user_id'] = Auth::user()->id;
        $image = $request->file('photo');
        if($image){

            $ext = $image->getClientOriginalExtension();
            $arr_ext = array('jpg','png','jpeg','gif');
            if(in_array($ext,$arr_ext)) {
                if (!file_exists(public_path('img/articles'))) {
                    mkdir(public_path('img/articles'));
                }
                $token = sha1(date('ydmhis'));
                if (file_exists(public_path('img/articles') . $token . '.' . $ext)) {
                    unlink(public_path('img/articles') . $token . '.' . $ext);
                }
                $name = $token . '.' . $ext;
                $image->move(public_path('img/articles'), $name);
                $data['photo'] = $name;
            }

        }
       // dd($data);
        Article::create($data);
        return redirect()->back();
    }
}

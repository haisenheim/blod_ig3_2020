<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use App\Models\Article;
use App\Models\ArticleTag;
use App\Models\Categorie;
use App\Models\Tag;
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

    public function addTag(Request $request){
        ArticleTag::create($request->all());

        return back();
    }

    public function deleteTag($article_id,$tag_id){
       $ats = ArticleTag::where('article_id',$article_id)->where('tag_id',$tag_id)->delete();
       return back();
    }

    public function edit($id){
        $article = Article::find($id);
        $categories = Categorie::all();
        $tags = Tag::all();
        return view('BackOffice/Articles/edit')->with(compact('article','categories','tags'));
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

    public function save(Request $request){
        //dd($request);
        $data['id'] = $request->id;

        $data['name'] = $request->name;
        $data['body'] = $request->body;
        $data['youtube_url'] = $request->youtube_url;
        if($request->category_id){
            $data['category_id'] = $request->category_id;
        }
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
        Article::updateOrCreate(['id'=>$data['id']],$data);
        return redirect('/admin/articles');
    }

    public function disable($id){
        $slide = Article::where('id',$id)->first();
        $slide->active = 0;
        $slide->save();
        return back();

    }

    public function enable($id){
        $slide = Article::where('id',$id)->first();
        $slide->active = 1;
        $slide->save();
        return back();

    }
}

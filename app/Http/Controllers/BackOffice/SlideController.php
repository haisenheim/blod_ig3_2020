<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use App\Models\Slide;
use Illuminate\Http\Request;

class SlideController extends Controller
{
    //
    public function index(){

        $slides = Slide::all();

        return view('BackOffice/Slides/index')->with(compact('slides'));
    }

    public function store(Request $request){
        //dd($request);
        $data['titre'] = $request->titre;
        $data['soustitre'] = $request->soustitre;

        $image = $request->file('photo');
        if($image){

            $ext = $image->getClientOriginalExtension();
            $arr_ext = array('jpg','png','jpeg','gif');
            if(in_array($ext,$arr_ext)) {
                if (!file_exists(public_path('img/slides'))) {
                    mkdir(public_path('img/slides'));
                }
                $token = sha1(date('ydmhis'));
                if (file_exists(public_path('img/slides') . $token . '.' . $ext)) {
                    unlink(public_path('img/slides') . $token . '.' . $ext);
                }
                $name = $token . '.' . $ext;
                $image->move(public_path('img/slides'), $name);
                $data['image_uri'] = $name;
            }

        }
       // dd($data);
        Slide::create($data);
        return redirect()->back();
    }

    public function disable($id){
        $slide = Slide::where('id',$id)->first();
        $slide->active = 0;
        $slide->save();
        return back();

    }

    public function enable($id){
        $slide = Slide::where('id',$id)->first();
        $slide->active = 1;
        $slide->save();
        return back();

    }


}

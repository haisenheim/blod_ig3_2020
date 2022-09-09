<?php

namespace App\Http\Controllers\BackOffice;

use App\Http\Controllers\Controller;
use App\Models\Param;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
    //
    public function index(){

        return view('BackOffice/dashboard');
    }

    public function getForm(){
        $param = Param::find(1);
        return view('BackOffice/form')->with(compact('param'));
    }

    public function saveForm(Request $request){
       // dd($request->all());
        $param = Param::find(1);
        $param->email = $request->email;
        $param->phone = $request->phone;
        $param->titre = $request->title;
        $param->contact_text = $request->contact_text;
        $param->apropos_text = $request->apropos_text;
        $param->facebook = $request->facebook;
        $param->twitter = $request->twitter;
        $param->instagram = $request->instagram;
        $image = $request->file('logo');
        if($image){
            $ext = $image->getClientOriginalExtension();
            $arr_ext = array('jpg','png','jpeg','gif');
            if(in_array($ext,$arr_ext)) {

                $token = sha1(date('ydmhis'));
                if (file_exists(public_path('img/logo.') . $ext)) {
                    unlink(public_path('img/logo.') . $ext);
                }
                $name =  'logo.' . $ext;
                $image->move(public_path('img'), $name);
                $param->logo_uri = $name;
            }

        }

        $image = $request->file('apropos_uri');
        if($image){

            $ext = $image->getClientOriginalExtension();
            $arr_ext = array('jpg','png','jpeg','gif');
            if(in_array($ext,$arr_ext)) {

                if (file_exists(public_path('img/apropos.') . $ext)) {
                    unlink(public_path('img/apropos.') . $ext);
                }
                $name =  'apropos.' . $ext;
                $image->move(public_path('img'), $name);
                $param->apropos_uri = $name;
            }

        }

        $image = $request->file('contact_uri');
        if($image){

            $ext = $image->getClientOriginalExtension();
            $arr_ext = array('jpg','png','jpeg','gif');
            if(in_array($ext,$arr_ext)) {

                if (file_exists(public_path('img/contact.') . $ext)) {
                    unlink(public_path('img/contact.') . $ext);
                }
                $name =  'contact.' . $ext;
                $image->move(public_path('img'), $name);
                $param->contact_uri = $name;
            }

        }

        $param->save();
        return back();
    }
}


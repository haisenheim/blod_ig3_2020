<?php

namespace App\Http\Controllers\FrontOffice;

use App\Http\Controllers\Controller;
use App\Models\Param;
use Illuminate\Http\Request;


class PageController extends Controller
{
    //
    public function contact(){
        $param = Param::find(1);
        return view('FrontOffice/Pages/contact')->with(compact('param'));
    }


}

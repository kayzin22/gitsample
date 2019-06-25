<?php

namespace App\Http\Controllers;

use App\About;
use Illuminate\Http\Request;

class aboutController extends Controller
{
    public function about(){
        return view('about');
    }
    public function aboutPostForm(Request $request){
        $about=new About();
        $about->name=$request['name'];
        $about->email=$request['name'];
        $about->company=$request['company'];
        $about->save();
        return redirect()->back();
    }
}

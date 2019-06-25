<?php

namespace App\Http\Controllers;

use App\Training;
use Illuminate\Http\Request;

class TrainingController extends Controller
{
    public function training(){
        return view('training');
    }
    public function trainingPostForm(Request $request){
        $training=new Training();
    	$training->title=$request['title'];
    	$training->desc=$request['desc'];
    	$training->image=$request['image'];
    	$training->save();
    	return redirect()->back();
    }
}

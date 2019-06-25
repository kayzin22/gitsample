<?php

namespace App\Http\Controllers;
use App\Data;
use Illuminate\Http\Request;

class blahController extends Controller
{
    public function blahfunction(){
		$data=Data::all();
    	return view('blah')->with(['data'=>$data]);
    }
    public function postForm(Request $request){
    	$data=new Data();
    	$data->firstname=$request['firstname'];
    	$data->lastname=$request['lastname'];
    	$data->email=$request['email'];
    	$data->city=$request['city'];
    	$data->save();
    	return redirect()->back();
	}
	public function getDelete(Request $request){
		$id=$request['id'];
		$data=Data::whereId($id)->first();
		$data->delete();
		return redirect()->back();
	}
	public function getUpdate(Request $request){
		$id=$request['id'];
		$data=Data::whereId($id)->first();
    	$data->firstname=$request['firstname'];
    	$data->lastname=$request['lastname'];
    	$data->email=$request['email'];
    	$data->city=$request['city'];
    	$data->update();
    	return redirect()->back();
	}
}
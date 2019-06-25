<?php

namespace App\Http\Controllers;

use App\Hill;
use Illuminate\Http\Request;

class dataController extends Controller
{
    public function test(){
    	return view('testview');
    }
public function postUser(Request $request){
   $user= new Hill();
   $user->name=$request['name'];
   $user->password=$request['password'];
   $user->save();
   return redirect()->back();
}
}

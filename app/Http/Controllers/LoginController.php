<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class LoginController extends Controller
{
    public function index(){
    	return view('login.index');
    }

    public function login(Request $req){
    	if(count(DB::table('students')->where('name',$req->studentname)->where('password',$req->password)->first())>0){
    		return redirect()->route('home.index');
    	}
    	else{
    		$req->session()->flash('msg', 'Invalid Name or Password!');
    		return redirect()->route('login.index');
    	}
    }
}

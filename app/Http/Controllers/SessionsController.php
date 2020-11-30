<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;


use App\User;
use App\Restaurant;
class SessionsController extends Controller
{
	  

    function create(Request $req){

    	$user = new User;

    	$user->username = $req->input('username');
    	$user->email = $req->input('email');
    	$user->password = Hash::make($req->input('password'));

    	$user->save();
    	$req->session()->flash('status','Registration Successfull');

    	return redirect('/login');


    }
        function store(Request $req){
    	$credentials = $req->only('email','password');

    	if (Auth::attempt($credentials)) {

    		$user = Auth::user();
    		$name = $user->username;

    		$req->session()->put('name',$name);
    		
    		return redirect('index');
    	}else{

    		return back();
    	}


	}

	function destroy(){

		auth()->logout();

		return redirect('/login');
	}

	function login(){

		return view('login');
	}

	function index(Request $req){

		$resto = Restaurant::all();

		return view('index',compact('resto'));
	}
}
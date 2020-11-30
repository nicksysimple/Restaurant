<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Restaurant;

class RestaurantController extends Controller
{
    

       function add(Request $req){

       	

       	$validate = $req->validate([

       		'name' =>'required',
       		'email' =>'required|email',
       		'address' => 'required'
       	]);

       	$resto = new Restaurant;

       	$resto->name = $req->input('name');
       	$resto->email = $req->input('email');
       	$resto->address = $req->input('address');

       	$imageName=  $req->input('name').'.'.$req->image->extension();

       	$resto->image = $imageName;
       	 $req->image->move(public_path('images'), $imageName);

       	$resto->save();
       	$req->session()->flash('status','Restaurant Inserted Successfully');
       	return redirect('/list');

    	
    }

    function show(){

    	$data = Restaurant::all();

    	return view('list',compact('data'));
    }
    function hotel_delete(Request $request){
    	
    	$id = ($request->hotel_id);

    	$query = Restaurant::where(['id'=>$id])->delete();

    	if ($query) {
    		
    		$request->session()->flash('status','Hotel Deleted Successfully');
    		return redirect('/list');
    	}

    	else{

    		$request->session()->flash('status', 'Deletion Failed');
    		return redirect('/list');
    	}


    }

}

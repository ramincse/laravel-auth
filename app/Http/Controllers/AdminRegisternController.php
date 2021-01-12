<?php

namespace App\Http\Controllers;

use App\Models\Admin;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;

class AdminRegisternController extends Controller
{
    public function showRegForm()
    {
    	return view('backend.admin.register');
    }

    public function adminRegister(Request $request)
    {
    	$this -> validate($request, [
    		'name' 		=> 'required',
    		'username' 	=> 'required',
    		'email' 	=> 'required',
    		'password' 	=> 'required',
    	]);
    	Admin::create([
    		'name' 		=> $request -> name,
    		'username' 	=> $request -> username,
    		'email' 	=> $request -> email,
    		'password' 	=> Hash::make($request -> password),
    	]);
    	return back();
    }
}

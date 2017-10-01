<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Http\Requests;
use App\Http\Requests\LoginRequest;
use Auth;
use App\Models\User;

class LoginController extends Controller
{
    public function getLogin(){
    	if (!Auth::check()) {
    		return view('admin.module.login.login');
    	}else{
    		return redirect('admin');
    	}
    }

    public function postLogin(LoginRequest $request){
        if (Auth::attempt(['username' => $request->txtUser, 'password' => $request->txtPass, 'level' => 1])) {
            // Authentication passed...
            return redirect('admin');
        }else{
        	return redirect()->back();
        }

    	return view('admin.module.login.login');
    }

    public function getLogout(){
    	Auth::logout();
    	return redirect()->route('getLogin');
    }
}

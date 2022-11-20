<?php

namespace App\Http\Controllers;

use Illuminate\Auth\Events\Validated;
use Illuminate\Contracts\Session\Session as SessionSession;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Session;
class AuthController extends Controller
{
    public function login(){
        if(Auth::check()){
            return redirect('/product');
        }else{
        return view('admin.auth.index');
        }
    }
    public function actionlogin(Request $request){
        $data=$request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
       
        if(Auth::attempt($data)){
            return redirect('/product')->with('success','Your Loged In');
        }else{
            
            return redirect('/login')->with('danger','Email or Password Incorrect');
        }
    }
    public function logout(){
    Session::flush();
    Auth::logout();
    return redirect('login')->with('danger','Your Loged Out');
}
}

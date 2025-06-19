<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
use App\Models\User;
use Illuminate\support\Facades\Hash;

class AuthController extends Controller
{
    public function login(){
        return view('Auth.login');
    }
    public function authenticate(Request $request){
        $request->validate([
            'email'=>'required|email',
            'password'=>'required'
        ]);
        if(Auth::attempt(array('email'=>$request->get('email'),'password'=>$request->get('password')))){
            if(Auth::user()->user_type == 1){
                return redirect()->route('dashboard.admin');
            }else if(Auth::user()->user_type == 2){
                return redirect()->route('dashboard.user');
            }else{
                return redirect()->route('login')->with('error');
            }
        }
    }
    public function signup(){
        return view('Auth.register');
    }
    public function createUser(Request $request){

        $request->validate([
            'name'=>'required|string',
            'email'=>'required|email|unique:users',
            'phone_no'=>'required',
            'password'=>'required',
            // 'confirmpassword'=>'required'
        ]);
        $user = new User([
            'name' => $request->get('name'),
            'email' => $request->get('email'),
            'phone_no' => $request->get('phone_no'),
            'password' =>Hash::make($request->get('password')),
            'user_type'=> 2
        ]);
        $user->save();
        return redirect()->route('login');
    }
    public function logout(){
        Auth::logout();
        return redirect()->route('login');

    }
}

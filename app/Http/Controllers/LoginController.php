<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\User;

class LoginController extends Controller
{
    public function login(){
        return view ('login');
    }

    public function register(){
        return view ('register');
    }

    public function logout(){        
        Auth::logout();
        return view ('/login');
    }

    public function process(Request $request){
        $crudentials = $request->only('email', 'password');

        if (Auth::attempt($crudentials)){
            return redirect()->intended('dashboard');
        }else{
            return redirect('/login')->withErrors(['error', 'email atau password salah']);
        }
    }

    public function registerprocess(Request $request){
        if($request->isMethod('post')){
           $validateData = $request->validate([
               'name' => 'required',
               'email' => 'required',
               'password' => 'required',
               'gender' => 'required',
               'date' => 'required',
               'phone' => 'required',
               'address' => 'required',
           ]);

           $user = new user;

           $user->name = $request->name;
           $user->email = $request->email;
           $user->password = bcrypt($request->password);
           $user->gender = $request->gender;
           $user->birthdate = $request->date;
           $user->phone = $request->phone;
           $user->address = $request->address;

           $user->save();

           return redirect('/login')->with('success', 'Register Success');
       }else{
           return redirect('/register');
       }
    }

}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\moderator;
use Illuminate\Support\Facades\Hash;
class userController extends Controller
{
    //
    
    public function register(){

       $result = moderator::create([
            'name'=> 'c',
            'username'=> 'c',
            'email'=> 'c@gmail.com',
            'password'=> Hash::make("c"),
            'role'=> 3,
            
            'profile_pic'=> 'c',
            'about'=> 'c'
        ]);
        return $result;

    }
    public function index_login(){
        return view('login');
    }
    public function login(Request $request){
        $ab = Auth::guard('moderator')->attempt($request->only('email','password'));
        if( $ab){
           return redirect()->route('submitted');
           // dd(Auth::guard('moderator')->user()->name);
        }
        
        
    }

    public function logout(){
        Auth::guard('moderator')->logout(); 
        return redirect('/login');
        
    }

    
}
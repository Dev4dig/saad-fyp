<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\moderator;
use App\Models\User;
use Illuminate\Support\Facades\Hash;
class userController extends Controller
{
    //
    
    public function register(){

       $result = moderator::create([
            'name'=> 'b',
            'username'=> 'b',
            'email'=> 'b@gmail.com',
            'password'=> Hash::make("b"),
            'role'=> 2,
            
            'profile_pic'=> 'b',
            'about'=> 'b'
        ]);
        return $result;

    }

    public function api_auth(Request $request){
        
            
    }
    public function register_user(){

        try {
            $result = moderator::create([
                'name'=> 'super',
                
                'email'=> 'super@gmail.com',
                'password'=> Hash::make("super"),
               
                
                'profile_pic'=> 'super',
                
                'role' => 1
   
   
               
            ]);
        } catch (\Throwable $th) {
          if($th->errorInfo[1] == 1062){
              return "Sorry email already register";
          }
        }
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


    public function delete_user($id){
        $result = User::find($id)->delete();
        
        return redirect('/manage-admin');
    }

    public function approve_user($id){
        $result = User::find($id)->update(['is_approved' => 1], ['touch' => false]);
        return redirect('/manage-admin');
    }

    

    
}
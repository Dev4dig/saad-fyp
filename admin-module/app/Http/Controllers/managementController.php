<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Hash;
use App\Models\moderator;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Storage;

class managementController extends Controller
{
    public function index(){
        $requests = User::where('is_approved', 0)->get();
        $users = User::where('is_approved', 1 )->get();
        $editors = moderator::where('role', 3)->get();
        $admins = moderator::where('role', 2)->get();
        //dd(Storage::url(Storage::files('khan/')[0]));
        //dd(Storage::get());
        return view('user.manage-admin', ["users"=>$users, "requests"=>$requests, "editors"=>$editors, "admins"=> $admins, 'images'=>Storage::files('khan/')]);
    }




    public function delete_moderator($id){
        $result = moderator::find($id)->delete();
        
        return redirect('/manage-admin');
    }

    public function add_moderator(Request $request){
        $u = moderator::where('email', $request->email)->exists();
       
        if($u){
          return back()->with('error', 'invalid');
        }else{
            $result = moderator::create([
                'username' => 'admi',
                'email'=> $request->email,
                'password'=>  Hash::make($request->password),
                'name' => $request->name,
                'profile_pic'=> '',
                'role'=> 2,
                'about'=> $request->about
            ]);
            return redirect('/manage-admin');      
        }
        

        return redirect('/manage-admin');      
    }
}

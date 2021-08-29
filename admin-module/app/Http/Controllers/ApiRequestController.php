<?php
//return this->hasOne(student::class);
namespace App\Http\Controllers;

use App\Models\article;
use App\Models\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use App\Models\student;

class ApiRequestController extends Controller
{
    public function login(Request $request){
        $user= User::where('email', $request->email)->first();
        
        // print_r($data);
        
            if (!$user || !Hash::check($request->password, $user->password)) {
                return response([
                    'message' => ['These credentials do not match our records.']
                ], 404);
                
            }
            
            $student = student::where("user_id", $user->id)->get();
            
            // dd($student);
            //return $student;

            $token = $user->createToken('my-app-token')->plainTextToken;
            
            if($student != []){
                $response = [
                    'user' => $user,
                    'token' => $token,
                    'student' =>$student
                ];
                return response($response, 201);
            }
            if ($student == []){
                
                    $responsee = [
                        'user' => $user,
                        'token' => $token,
                        
                    ];
                    return response($responsee, 202);
            }
        
            return response($response, 201);
        //return $request->email;
    }

    public function get_comments($post_id){
        return asset('template-resources/plugins/images/admin-text.png');
    }

    public function register(Request $request){
        if(User::where('email', $request->email)->exists()){
            return "email_error";
        }elseif(student::where('roll_no', $request->roll_no)->exists()){
           
            return "rollno_error";
           
        }else{
            $result =  User::create([
                'name'=> $request->name,
                'department' => $request->department,    
                'email'=> $request->email,
                'password'=> Hash::make($request->password),
               
                
                'profile_pic'=> ' ',
                
                'is_approved' => False
   
            
               
            ]);

            
           
            if($request->user == 1){
                student::create([
                    'user_id'=> $result->id,
                    'roll_no'=> $request->roll_no,
                    'semester' => $request->semester
                ]);
            }
            return "done";
        }
        
       
    }

    public function post_article(Request $request){
        $result = article::create([
            'user_id' => $request->user_id,
            'title' => $request->title,
            'content' => $request->content,
            'status' => 0
        ]);
        return $result;
    }

    public function post_comment(Request $request){
        return "ok g";
    }
}

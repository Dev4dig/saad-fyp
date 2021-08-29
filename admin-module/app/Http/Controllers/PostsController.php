<?php

namespace App\Http\Controllers;

use App\Models\article;
use App\Models\student;
use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;
use App\Models\User;
use Illuminate\Support\Facades\Storage;

class PostsController extends Controller
{

    
    public function approved(){
        // $disk = Storage::build([
        //     'driver' => 'local',
        //     'root' => '/app/khan/',
        // ]);
        // return $disk::get('SQvrN2QKwrQY3pbvL5LsENpLEvzVeaJv3nbEl3Ae.jpg');
        // //return asset('storage/khan/SQvrN2QKwrQY3pbvL5LsENpLEvzVeaJv3nbEl3Ae.jpg');
        // //return view('posts.approved');

        $articles = article::where('status', 2)->get();
        // dd(Storage::files('khan/'));
        return view('posts.approved',["articles"=>$articles]);
    }

    public function finalized(){
        return view('posts.finalized');
    }

    public function rejected(){
        $articles = article::where('status', 3)->get();
        // dd(Storage::files('khan/'));
        return view('posts.rejected',["articles"=>$articles]);
        
    }

    public function submitted(){
        $articles = article::where('status', 1)->get();
        // dd(Storage::files('khan/'));
        return view('posts.submitted',["articles"=>$articles]);
    }

    public function edited(){

        $articles = article::where('status', 5)->get();
        // dd(Storage::files('khan/'));
        return view('posts.edited',["articles"=>$articles]);
        
    }

    public function pending_edit(){
        $articles = article::where('status', 4)->get();
        // dd(Storage::files('khan/'));
        return view('posts.pending_edit',["articles"=>$articles]);
       
    }

    public function full_post($id){
        $article = article::find($id);
        $article_user = User::find($article->user_id);
        $student_details = student::where('user_id', $article_user->id)->first();
        return view('posts.full_post',['article' => $article, 'article_user'=> $article_user, 'student'=>$student_details] );
    }

    public function edit_post(){
        return view('posts.edit_post');
    }




    //operations
    public function reject_post($id){
        $result = article::find($id)->update(['status' => 3], ['touch' => false]);
        return redirect('/rejected');
    }

    public function approve_post($id){
        //dd($id);
        $result = article::find($id)->update(['status' => 2], ['touch' => false]);
        return redirect('/approved');
    }

    public function to_edit_post($id){
        dd($id);
    }
}

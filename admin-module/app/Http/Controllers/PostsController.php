<?php

namespace App\Http\Controllers;

use Illuminate\Support\Facades\Auth;
use Illuminate\Http\Request;

class PostsController extends Controller
{
    public function approved(){
        return view('posts.approved');
    }

    public function finalized(){
        return view('posts.finalized');
    }

    public function rejected(){
        return view('posts.rejected');
    }

    public function submitted(){
        
        return view('posts.submitted');
    }

    public function edited(){
        return view('posts.edited');
    }

    public function pending_edit(){
        return view('posts.pending_edit');
    }

    public function full_post(){
        return view('posts.full_post');
    }

    public function edit_post(){
        return view('posts.edit_post');
    }
}

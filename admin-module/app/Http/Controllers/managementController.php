<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class managementController extends Controller
{
    public function index(){
        return view('user.manage-admin');
    }
}

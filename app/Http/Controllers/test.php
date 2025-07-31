<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class test extends Controller
{
    public function test(){
        $user='i am guset test';
        return view('welcome',compact('user'));
    }
}
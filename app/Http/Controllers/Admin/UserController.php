<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class UserController extends Controller
{
    public function index(){
        return "User List Page";
    }

    public function create(){
        return "User Stored";
    }

    public function store(Request $request){
        return "User Stored";
    }
}

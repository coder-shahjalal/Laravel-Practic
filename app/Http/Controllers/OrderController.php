<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class OrderController extends Controller
{
    public function show(){
        return view('order');
    }


    public function submit(Request $request){
        //validation here
        $request->validate([
            'name'=>'required|string|min:3|max:50',
            'number'=>'required|digits_between:8,15',
            'address'=>'required|string|min:5|max:255',
        ]);

        //optional
        $data=$request->only('name','number','address');

        return view('success',compact('data'));
    }
}
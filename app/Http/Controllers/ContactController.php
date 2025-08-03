<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Rules\Nonumber;
use App\Rules\ValidUsername;

class ContactController extends Controller
{
    public function show(){

        $countries=['Bangladesh','Pakistan','Afganistan','siria'];
        return view('contact',compact('countries'));
        // redirect


    }

    public function submit(Request $request){

        // Validation Rules
    $validated = $request->validate([
        'name'     => ['required', new ValidUsername],
        'email'    => 'required|email',
        'gender'   => 'required|in:male,female',
        'language' => 'required|array|min:1',
        'country'  => 'required|string',
        'message'  => 'required|string|min:5|max:500',
    ]);

        return back()->with('success','From sumitted successfully');
    }

}
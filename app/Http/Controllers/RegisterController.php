<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class RegisterController extends Controller
{
    public function form(){
        return view('registration');
    }

    public function getData(Request $request){
        $data = $request->all();
        return view('result', compact('data'));

    }
}

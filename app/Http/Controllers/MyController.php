<?php

namespace App\Http\Controllers;

use App\Models\Teamwork;
use Illuminate\Http\Request;

class MyController extends Controller
{ 
      
    public function home(){
        return view('Sign in');
    }
     
    public function pro(){
        return view('profile2');
    }

    public function prof(){
        return view('profile', [
            'user' => Teamwork::find(1)
        ]);
    }
    
   

}

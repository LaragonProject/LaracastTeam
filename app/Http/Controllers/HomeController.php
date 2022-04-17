<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Models\User;


class HomeController extends Controller
{
    
   public function redirect(){

    if(Auth::id()){

        if(Auth::user()->user_type == 'Admin' || Auth::user()->user_type == 'Faculty'){
            return view('admin.adminmain');
        }else{

            return view('user.usermain');
        }

    }else{
        return redirect()->back();
    }


   }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LogOutController extends Controller
{
    public function logOut(){
        auth()->logout();
        return redirect()->route('home');
    }
}

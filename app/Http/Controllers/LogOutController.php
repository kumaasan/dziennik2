<?php

namespace App\Http\Controllers;


class LogOutController extends Controller
{
    public function logOut(){
        auth()->logout();
        return redirect()->route('home');
    }
}

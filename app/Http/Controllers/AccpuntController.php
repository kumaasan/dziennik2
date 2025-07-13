<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class AccpuntController extends Controller
{
    public function deleteAccount(){
        auth()->user()->delete();
        return redirect()->route('home');
    }

}

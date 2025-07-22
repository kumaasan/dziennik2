<?php

namespace App\Http\Controllers;

class LogOutController extends Controller {

    public function logOut(){
        $user = auth()->user();

        if($user){
            $user->setRememberToken(null);
            $user->save();
        }

        auth()->logout();

        return redirect()->route('home');
    }
}

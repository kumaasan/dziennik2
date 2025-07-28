<?php

namespace App\Services;

use App\Models\Subject;
use App\Models\User;

class SubjectService {

    public function __construct(){
        //
    }

    public function getSubjects($userId){
        return Subject::where('user_id', $userId)->get();
    }

    public function getUserSubjects($userId){
        return User::with('subjects')->findOrFail($userId);
    }
}

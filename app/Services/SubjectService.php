<?php

namespace App\Services;

use App\Models\Subject;
use App\Models\User;

class SubjectService {

    public function __construct(){
        //
    }

    public function getUserWithSubjectsAndGrades($userId){
        return User::with('subjects.grade')->findOrFail($userId);
    }

    public function getFavouriteSubjects($userId){
        return Subject::where('user_id', $userId)->where('favorite', true)->get();
    }
}

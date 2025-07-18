<?php

namespace App\Services;

use App\Models\User;

class SubjectService {

    public function __construct(){
        //
    }

    public function getUserWithSubjectsAndGrades($userId){
        return User::with('subjects.grade')->findOrFail($userId);
    }
}

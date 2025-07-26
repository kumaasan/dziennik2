<?php

namespace App\Services;

use App\Models\Grade;

class GradeService {

    public function __construct(){}

    public function getGradesForSubject($subjectId){
        return Grade::where('subject_id', $subjectId)->get();
    }

    public function getUserGrades($userId){
        return Grade::whereHas('subject', fn($q) => $q->where('user_id', $userId))->get();
    }

}

<?php

namespace App\Services;

use App\Models\Grade;
use App\Models\Subject;

class HomePageService {

    public function __construct(){}

    public function getHomePageInfo($user_id){
        $studentAverage = $this->calculateStudentAverage($user_id);

        // Pobierz ulubione przedmioty z ilością ocen
        $favoriteSubjects = Subject::where('user_id', $user_id)
          ->where('favorite', true)
          ->withCount('grade')
          ->get();

        return [
          'grades' => Grade::where('user_id', $user_id)->get(),
          'gradesCount' => Grade::where('user_id', $user_id)->count(),
          'studentAverage' => round($studentAverage, 2),
          'finalGrade' => $this->convertAverageToGrade($studentAverage),
          'subjectsCount' => Subject::where('user_id', $user_id)->count(),
          'favoriteSubjects' => $favoriteSubjects,
        ];
    }

    public function calculateStudentAverage($user_id){
        $subjects = Subject::where('user_id', $user_id)
          ->where('average', '>', 0)
          ->get();

        if ($subjects->isEmpty()) {
            return 0;
        }

        $finalGrades = $subjects->map(function($subject) {
            return $this->convertAverageToGrade($subject->average);
        });

        return $finalGrades->avg();
    }

    private function convertAverageToGrade($average){
        if ($average >= 5.20) return 6;
        if ($average >= 4.60) return 5;
        if ($average >= 3.60) return 4;
        if ($average >= 2.75) return 3;
        if ($average >= 1.76) return 2;
        return 1;
    }
}

<?php

namespace App\Http\Controllers;

use App\Services\GradeService;
use App\Services\SubjectService;

class SubjectController extends Controller {

    public function __construct(SubjectService $subjectService, GradeService $gradeService){
        $this->subjectService = $subjectService;
        $this->gradeService = $gradeService;
    }

    public function index(){
        $user = $this->subjectService->getUserSubjects(auth()->id());

        // ->groupBy('subject_id') daje ci $grades[$subjectId] = [Grade, Grade...]
        $grades = $this->gradeService->getUserGrades($user->id)->groupBy('subject_id');

        return view('subjects.subject', compact('user', 'grades'));
    }

}

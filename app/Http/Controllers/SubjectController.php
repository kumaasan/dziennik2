<?php

namespace App\Http\Controllers;

use App\Services\SubjectService;

class SubjectController extends Controller {

    public function __construct(SubjectService $subjectService){
        $this->subjectService = $subjectService;
    }

    public function index(){
        $user = $this->subjectService->getUserWithSubjectsAndGrades(auth()->user()->id);

        return view('subjects.subject', compact('user'));
    }
}

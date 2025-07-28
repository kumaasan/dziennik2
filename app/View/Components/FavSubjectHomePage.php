<?php

namespace App\View\Components;

use App\Services\SubjectService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class FavSubjectHomePage extends Component {

    public $favoriteSubjects;

    //    public function __construct(SubjectService $subjectService){
    //        $user = auth()->user();
    //
    //        $this->favoriteSubjects = $user ? $subjectService->getFavouriteSubjects($user->id) : collect();
    //    }

    /**
     * Get the view / contents that represent the component.
     */
    public function render(): View|Closure|string{
        return view('components.fav-subject-home-page');
    }
}

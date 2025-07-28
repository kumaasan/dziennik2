<?php

namespace App\View\Components;

use App\Services\SubjectService;
use Closure;
use Illuminate\Contracts\View\View;
use Illuminate\View\Component;

class OffCanvasSidebar extends Component {

    public function render(): View|Closure|string{
        return view('components.off-canvas-sidebar');
    }
}

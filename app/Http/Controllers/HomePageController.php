<?php

namespace App\Http\Controllers;

use App\Models\Task;
use App\Services\HomePageService;


class HomePageController extends Controller
{
    protected $homePageService;

    public function __construct(HomePageService $homePageService){
        $this->homePageService = $homePageService;
    }
    public function index(){
        $user_id = auth()->user()?->id;
        $data = $this->homePageService->getHomePageInfo($user_id);
        $tasks = Task::where('user_id', auth()->id())
          ->where('is_done', false)
          ->orderBy('created_at', 'desc')
          ->get();
        return view('home', compact('data', 'tasks'));
    }
}

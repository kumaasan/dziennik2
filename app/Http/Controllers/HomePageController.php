<?php

namespace App\Http\Controllers;

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

        return view('home', compact('data'));
    }
}

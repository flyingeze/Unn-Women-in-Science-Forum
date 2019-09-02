<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Topic;
use App\User;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function profile()
    {
        return view('member.profile');
    }

    
    public function new_topics()
    {
        return view('member.new-topic');
    }

    public function new_cat()
    {
        return view('admin.new-cat');
    }
    
    public function replies()
    {
        return view('member.forum-replies');
    }
    
    public function favorites()
    {
        return view('member.favorites');
    }
    
    public function settings()
    {
        return view('member.settings');
    }
}

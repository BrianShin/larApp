<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PagesController extends Controller
{
    public function index(){
        $title = 'Welcome to this Blog!';
        return view('pages.index')
            ->with('title', $title);
    }

    public function about(){
        $title = 'The About Page!';
        return view('pages.about')
            ->with('title', $title);
    }

    public function services(){
        $data = array(
            'title' => 'Services',
            'services' => ['Web Design', 'Programming', 'SQL']
        );
        return view('pages.services')
            ->with($data);
    }

    public function posts(){
        $title = 'Posts made!';
        return view('posts.index')
            ->with('title', $title);
    }
}

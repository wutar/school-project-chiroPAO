<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class IndexController extends Controller
{
    function show() {
        $groups =  \App\Group::All();
        $events =\App\Event::orderBy('date', 'ASC')->get();
        $news = \App\Article::All();
        return view('index',
        [
            'groups' => $groups,
            'news' => $news,
            'events' => $events
        ]);
    }
}

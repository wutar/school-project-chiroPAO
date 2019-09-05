<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class LeaderController extends Controller
{
    public function index()
    {
        return view('leader.index',['groups'=> \App\Group::All()]);
    }

    public function profile($id)
    {
        return view('leader.profile',
        [
            'leader'=> \App\Leader::findOrFail($id),
        ]);
    }


}

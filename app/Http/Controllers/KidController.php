<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class KidController extends Controller
{
    public function list()
    {
        if(!empty(auth()->user()->leader))
        {
            $groups = \App\Group::All();
            return view('kid.list', [
                'groups' => $groups,
                ]);
        }
        else return redirect('/');
    }
}

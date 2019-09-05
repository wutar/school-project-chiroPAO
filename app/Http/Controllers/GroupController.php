<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Carbon\Carbon;


class GroupController extends Controller
{
    public function index()
        {
        return view('group.index', ['groups' => \App\Group::All()]);
    }

    public function profile($id)
    {
        return view('group.profile',
        [
            'group'=> \App\Group::findOrFail($id),
        ]);
    }

    public function edit($id)
    {
        $request->validate([
            'description' => 'required|min:50',
        ]);
        if(auth()->user()->leader())
        {
            return view('group.edit', [
                'user' => auth()->user(),
                'group' => \App\Group::findOrFail($id)
                ]);
        }
        else
        {
            return redirect('/');
        }
    }

    public function update(Request $request, $groupId)
    {
        $request->validate([
            'description' => 'required|min:50',
         ]);
        $group = \App\Group::find($groupId);
        $group->fill($request->except('_token'));
        $group->save();
        return redirect('/groups/'.$groupId);
    }
}

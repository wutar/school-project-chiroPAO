<?php

namespace App\Http\Controllers;
use Illuminate\Support\Facades\Storage;

use Illuminate\Http\Request;

class ActivityController extends Controller
{
    public function detail($groupId, $activityId)
    {
        $group = \App\Group::findOrFail($groupId);
        $groupmember = false;
        if(auth()->user()->leader) $groupmember=true;
        else
        {
            foreach(auth()->user()->kids as $kid)
            {
                if($kid->group == $group) $groupmember=true;
            }
        }
        if($groupmember)return view('activity.detail',['activity'=>\App\Activity::findOrFail($activityId)]);
        else return redirect('/');
    }

    public function index($groupId)
    {
        $group = \App\Group::findOrFail($groupId);
        $groupmember = false;
        if(auth()->user()->leader) $groupmember=true;
        else
        {
            foreach(auth()->user()->kids as $kid)
            {
                if($kid->group == $group) $groupmember=true;
            }
        }
        if($groupmember)return view('activity.index',['group'=> $group]);
        else return redirect('/');
    }

    public function edit($id)
    {
        $activity = \App\Activity::findOrFail($id);
        if(empty(auth()->user()->leader)) return redirect('/');
        if(auth()->user()->leader->group == $activity->group)
        {
            return view('activity.edit', [
                'user' => auth()->user(),
                'activity' => $activity
                ]);
        }
        else
        {
            return redirect('/');
        }
    }

    public function update(Request $request, $activityId)
    {
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required'
        ]);
        $activity = \App\Activity::find($activityId);
        $group = $activity->group;
        if(empty(auth()->user()->leader)) return redirect('/');
        if(auth()->user()->leader->group == $group)
        {
            $activity->fill($request->except('_token'));
            $activity->save();
            return redirect('/groups/'.$activity->group->id.'/activities/'.$activity->id.'/detail');
        }
        else
        {
            return redirect('/');
        }
    }

    public function add(Request $request, $groupId)
    {
        $request->validate([
            'title' => 'required|max:100',
            'description' => 'required'
        ]);

        if(empty(auth()->user()->leader)) return redirect('/');
        if(auth()->user()->leader->group->id == $groupId)
        {
            $activity = \App\Activity::create($request->except('_token'));
            $group = \App\Group::find($groupId);
            $group->activities()->save($activity);
            $activity->group()->associate($group);
            $activity->save();
            return redirect('/groups/'.$activity->group->id.'/activities/'.$activity->id.'/detail');
        }
        else
        {
            return redirect('/');
        }
    }

    public function new($groupId)
    {
        if(empty(auth()->user()->leader)) return redirect('/');
        if(auth()->user()->leader->group->id == $groupId)
        {
            $group = \App\Group::find($groupId);
            return view('activity.new', [
                'user' => auth()->user(),
                'group' => $group
                ]);
        }
        else
        {
            return redirect('/');
        }
    }

    public function deletePhoto(Request $request, $groupId, $activityId)
    {
        if(empty(auth()->user()->leader)) return redirect('/');
        if(auth()->user()->leader->group->id == $groupId)
        {
            $activity = \App\Activity::find($activityId);
            foreach($request->except('_token') as $photoId => $value)
            {
                $photo = \App\Photo::find($photoId);
                Storage::delete('/img/'.$photo->id.'.'.$photo->extension);
                $photo->delete();
            }
            return redirect('/groups/'.$activity->group->id.'/activities/'.$activity->id.'/edit');
        }
        else
        {
            return redirect('/');
        }
    }

    public function addPhoto(Request $request, $groupId, $activityId)
    {
        if(empty(auth()->user()->leader)) return redirect('/');
        if(auth()->user()->leader->group->id == $groupId)
        {
            $request->validate([
                'image' => 'image',
            ]);
            $activity = \App\Activity::find($activityId);
            $original = $request->file('image');
            $photo = \App\Photo::create(["extension"=>$original->extension()]);
            $photo->save();
            $activity->photos()->save($photo);
            $request->file('image')->storeAs('/public/img' ,$photo->id.'.'.$photo->extension);
            return redirect('/groups/'.$activity->group->id.'/activities/'.$activity->id.'/edit');
        }
        else
        {
            return redirect('/');
        }
    }
}

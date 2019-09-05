<?php

namespace App\Http\Controllers;
use Carbon\Carbon;

use Illuminate\Http\Request;
use Auth;

class SubscriptionController extends Controller
{
    public function year()
    {
        return view('subscription.year', [
            'user' => auth()->user(),
            'newKid' => new \App\Kid
            ]);
    }

    public function newKid(Request $request)
    {
        $now=  Carbon::now()->year;
        $sixYearsAgo = $now-6;
        $sixYearsAgoFirstDay = Carbon::createMidnightDate($sixYearsAgo, 12, 12);
        $seventeenYearsAgo = $now-17;
        $seventeenYearsAgoFirstDay = Carbon::createMidnightDate($seventeenYearsAgo, 12, 12);
        $request->validate([
           'name' => 'required|max:50',
           'familyname' => 'required|max:50',
           'birthday' => 'required|date|before_or_equal:'.$sixYearsAgoFirstDay.'|after_or_equal:'.$seventeenYearsAgo
        ]);
        $kid=\App\Kid::create($request->except('_token'));
        Auth::user()->kids()->attach($kid->id);
        return redirect('/subscribe/');
    }

    public function subscribe(Request $request)
    {
        $kidsIds=$request->except('_token');
        foreach($kidsIds as $kidsId=>$value)
        {
            $kid=\App\Kid::find($kidsId);
            $kid->subscribed = True;
            $kid->save();
        }
        if(!empty($kidsIds)){
            return redirect('/subscribe/success');
        }
        return redirect('/subscribe');
    }

    public function event(Request $request, $eventId)
    {
        $kidsIds=$request->except('_token');
        $event=\App\Event::find($eventId);
        foreach($kidsIds as $kidsId=>$value)
        {
            if($value ==="on")
            {
                $event->kids()->attach($kidsId);
                $event->save();
            }
        }
        return redirect('/subscribe/success');
    }

    public function success()
    {
        return view('subscription.success');
    }
}


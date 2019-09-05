<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EventController extends Controller
{
    public function detail($id)
    {
        return view('event.detail',['event'=> \App\Event::findOrFail($id)]);
    }

    public function edit($id)
    {
        $event = \App\Event::findOrFail($id);
        if(empty(auth()->user()->leader))return redirect('/');
        if(auth()->user()->leader->event == $event)
        {
            return view('event.edit', [
                'user' => auth()->user(),
                'event' => $event
                ]);
        }
        else return redirect('/');
    }

    public function index()
    {
        $events =\App\Event::orderBy('date', 'ASC')->get();
        return view('event.index',['events' => $events ]);
    }

    public function update(Request $request, $eventId)
    {
        $event = \App\Event::find($eventId);
        if(empty(auth()->user()->leader))return redirect('/');
        if(auth()->user()->leader->event == $event)
        {
            $request->validate([
                'title' => 'required|max:50',
                'price' => 'required',
                'description' => 'required|min:50',
                'date' => 'required|date'
            ]);
            $event->fill($request->except('_token'));
            $event->save();
            return redirect('/events/'.$eventId .'/detail');
        }
        else return redirect('/');
    }

    public function subscriptions($eventId)
    {
        $event =\App\Event::findOrFail($eventId);
        if(empty(auth()->user()->leader))return redirect('/');
        if(auth()->user()->leader->event == $event)
        {
            return view('event.subscriptions',['event' => $event ]);
        }
        else return redirect('/');
    }


}

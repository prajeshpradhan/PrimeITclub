<?php

namespace App\Http\Controllers\Front;

use App\Event;
use App\Http\Controllers\Controller;
use Carbon\Carbon;
use Illuminate\Http\Request;

class PageController extends Controller
{
    public function index()
    {
        $events = Event::whereDate('date', '>=', Carbon::today()->toDateString())->limit(3)->orderby('date')->get();
        foreach ($events as $event) {
            $event->date = Carbon::parse($event->date)->toFormattedDateString();
        }
        return view('front.index')->with('events', $events);
    }
}

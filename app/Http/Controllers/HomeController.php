<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Expert;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::where('is_active', true)->latest()->get();
        $experts = Expert::where('is_active', true)->get();

        return view('pages.index', compact('events', 'experts'));
    }
}

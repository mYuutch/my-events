<?php

namespace App\Http\Controllers;

use App\Models\Event;
use Illuminate\Http\Request;
use Inertia\Inertia;

class ShowEventsController extends Controller
{
    public function __invoke(Request $request)
    {
        $events = Event::paginate(16);
        return Inertia::render('Events/index', ['events' => $events]);
    }
}

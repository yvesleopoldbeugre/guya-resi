<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\TrackingEvent;

class TrackingController extends Controller
{
    public function store(Request $request)
    {
        $request->validate([
            'category' => 'required|string',
            'name' => 'required|string',
        ]);

        TrackingEvent::create([
            'event_category' => $request->category,
            'event_name' => $request->name,
            'ip_address' => $request->ip(),
        ]);

        return response()->json(['success' => true]);
    }
}

<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Visit;
use App\Models\TrackingEvent;
use Carbon\Carbon;

class StatsController extends Controller
{
    public function index()
    {
        $totalViews = Visit::sum('views');
        $totalUniqueVisitors = Visit::count();
        
        $todayViews = Visit::whereDate('visited_date', Carbon::today())->sum('views');
        $todayUnique = Visit::whereDate('visited_date', Carbon::today())->count();
        
        // Data for chart (last 7 days)
        $last7Days = collect();
        for ($i = 6; $i >= 0; $i--) {
            $date = Carbon::today()->subDays($i);
            $visits = Visit::whereDate('visited_date', $date)->sum('views');
            $unique = Visit::whereDate('visited_date', $date)->count();
            
            $last7Days->push([
                'date' => $date->format('d/m'),
                'visits' => (int) $visits,
                'unique' => $unique
            ]);
        }

        // Section Views Stats
        $sectionViews = TrackingEvent::where('event_category', 'section_view')
            ->selectRaw('event_name, count(*) as total')
            ->groupBy('event_name')
            ->pluck('total', 'event_name')
            ->toArray();

        // Button Clicks Stats
        $buttonClicks = TrackingEvent::where('event_category', 'button_click')
            ->selectRaw('event_name, count(*) as total')
            ->groupBy('event_name')
            ->pluck('total', 'event_name')
            ->toArray();

        return view('stats', compact(
            'totalViews', 'totalUniqueVisitors', 'todayViews', 'todayUnique', 'last7Days',
            'sectionViews', 'buttonClicks'
        ));
    }
}

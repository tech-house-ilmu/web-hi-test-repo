<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Expert;
use App\Models\HITCCProgramme;
use App\Models\HomeHero;
use App\Models\HomeImpact;
use App\Models\Testimoni;
use Illuminate\Support\Facades\Cache;
use Illuminate\View\View;

class HomeController extends Controller
{
    public function index(): View
    {
        $homeHero = rescue(function () {
            return Cache::remember('home_hero', 300, function () {
                return HomeHero::where('is_active', true)->first();
            });
        }, null, false);

        $events = rescue(function () {
            return Cache::remember('home_events', 300, function () {
                return Event::where('is_active', true)
                    ->where('show_on_home', true)
                    ->orderBy('sort_order', 'asc')
                    ->latest()
                    ->get();
            });
        }, function () {
            return rescue(fn () => Event::where('is_active', true)->latest()->get(), collect(), false);
        }, false);

        $experts = rescue(function () {
            return Cache::remember('home_experts', 300, function () {
                return Expert::where('is_active', true)->get();
            });
        }, collect(), false);

        $programmes = rescue(function () {
            return Cache::remember('home_programmes', 300, function () {
                return HITCCProgramme::with([
                    'internship',
                    'volunteer',
                    'scholarship',
                    'exchange',
                    'competition',
                    'category',
                ])
                    ->orderBy('sort_order')
                    ->take(7)
                    ->get();
            });
        }, collect(), false);

        $testimonis = rescue(function () {
            return Cache::remember('home_testimonis', 300, function () {
                return Testimoni::latest()->get();
            });
        }, collect(), false);

        $impacts = rescue(function () {
            return Cache::remember('home_impacts', 300, function () {
                $dbImpacts = HomeImpact::where('is_active', true)->orderBy('sort_order')->get();
                return $dbImpacts->isNotEmpty() ? $dbImpacts->toArray() : config('homepage.impacts', []);
            });
        }, config('homepage.impacts', []), false);

        $onlinePrograms = config('homepage.online_programs', []);
        $offlinePrograms = config('homepage.offline_programs', []);
        $partners = config('homepage.partners', []);
        $faqs = config('homepage.faqs', []);
        $upcomingEvents = config('homepage.upcoming_events', []);
        $programs = config('homepage.programs', []);
        $testimonials = config('homepage.testimonials', []);

        return view('pages.index', compact(
            'homeHero',
            'events',
            'experts',
            'programmes',
            'testimonis',
            'impacts',
            'onlinePrograms',
            'offlinePrograms',
            'partners',
            'faqs',
            'upcomingEvents',
            'programs',
            'testimonials',
        ));
    }
}

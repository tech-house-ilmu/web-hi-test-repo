<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\HITCCProgramme;  // model utama
use App\Models\HITCCCategory;        // model kategori

class HITCCProgrammeController extends Controller
{
    public function index(Request $request)
    {
        // ambil filter category (optional)
        $category = $request->get('category');

        $query = HITCCProgramme::with('category');

        if ($category && $category !== 'all') {
            $query->whereHas('category', function($q) use ($category) {
                $q->where('slug', $category);
            });
        }

        // pagination biar ga overload
        $opportunities = $query->orderBy('sort_order')->paginate(20);

        // ambil kategori buat card filter
        $categories = HITCCCategory::all();

        if ($request->ajax()) {
            return view('partials.hitcc-cards', compact('opportunities'))->render();
        }  

        return view('pages.programme.HI-opportunities.index', compact('opportunities', 'categories'));
    }

    public function show($category, $slug)
    {
        $programme = HITCCProgramme::whereHas('category', function ($q) use ($category) {
            $q->where('slug', $category);
        })
        ->with(['category', 'internship', 'volunteer', 'scholarship', 'exchange', 'competition'])
        ->where('slug', $slug)
        ->firstOrFail();

        return view('pages.programme.HI-opportunities.detail-opportunities', compact('programme'));
    }
}

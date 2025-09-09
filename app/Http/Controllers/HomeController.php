<?php

namespace App\Http\Controllers;

use App\Models\Event;
use App\Models\Expert;
use App\Models\HITCCProgramme;
use App\Models\Testimoni;

class HomeController extends Controller
{
    public function index()
    {
        $events = Event::where('is_active', true)->latest()->get();
        $experts = Expert::where('is_active', true)->get();

        // Tambahkan 'category' agar partial hitcc-cards bisa akses category
        $programmes = HITCCProgramme::with([
            'internship', 
            'volunteer', 
            'scholarship', 
            'exchange', 
            'competition',
            'category'
        ])
        ->orderBy('sort_order')
        ->take(7)
        ->get();


        $testimonis = Testimoni::latest()->get(); // Atau sesuaikan dengan kondisi yang Anda inginkan
        // Contoh dengan kondisi: Testimoni::where('is_active', true)->latest()->get();

  
        return view('pages.index', compact('events', 'experts', 'programmes', 'testimonis'));

         

    }
}

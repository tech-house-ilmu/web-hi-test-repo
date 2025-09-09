<?php

namespace App\Http\Controllers;

use App\Models\VpDetailsAbout;
use Illuminate\Http\Request;

class VpDetailsController extends Controller
{
    public function VpDetails()
    {
        $VpDetailsAbout = VpDetailsAbout::latest()->get();
        return view('pages.about-us.about', compact('VpDetailsAbout'));

        $vp = VpDetailsAbout::latest()->get();
    return view('pages.about-us.about', compact('vp'));
    }
}

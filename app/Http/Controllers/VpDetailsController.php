<?php

namespace App\Http\Controllers;

use App\Models\VpDetailsAbout;
use Illuminate\Http\Request;

class VpDetailsController extends Controller
{
    public function VpDetails()
    {
        $VpDetailsAbout = VpDetailsAbout::latest()->get();
        return view('VpDetails', compact('VpDetailsAbout'));
    }
}

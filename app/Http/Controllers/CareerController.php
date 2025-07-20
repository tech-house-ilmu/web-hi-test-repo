<?php

namespace App\Http\Controllers;

use App\Models\Division;
use App\Models\Position;

class CareerController extends Controller
{
    public function index()
    {
        // Menampilkan halaman career utama (pilihan kotak divisi)
        $divisions = Division::all();
        return view('pages.career.career', compact('divisions'));
    }

    public function listByDivision($division)
    {
        // Ambil divisi berdasarkan slug
        $divisionModel = Division::where('slug', $division)->firstOrFail();

        // Ambil posisi yang is_visible = true di divisi tersebut
        $positions = $divisionModel->positions()->where('is_visible', true)->get();

        // Tampilkan ke blade universal positions
        return view('pages.career.positions', [
            'division' => $divisionModel,
            'positions' => $positions,
        ]);
    }

    public function show($division, $slug)
    {
        // Temukan division by slug
        $divisionModel = Division::where('slug', $division)->firstOrFail();

        // Cari posisi by slug dan divisi_id
        $position = Position::where('division_id', $divisionModel->id)
                            ->where('slug', $slug)
                            ->where('is_visible', true)
                            ->firstOrFail();

        // Tampilkan ke blade universal position-details
        return view('pages.career.position-details', [
            'position' => $position,
            'division' => $divisionModel,
        ]);
    }
}

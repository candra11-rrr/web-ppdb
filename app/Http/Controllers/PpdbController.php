<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\PpdbRegistration;
use Illuminate\Support\Str;

class PpdbController extends Controller
{
    public function index()
    {
        return view('welcome');
    }

    public function store(Request $request)
    {
        $validated = $request->validate([
            'full_name' => 'required|string|max:255',
            'nisn' => 'nullable|string|max:30',
            'school_origin' => 'nullable|string|max:255',
            'pathway_type' => 'nullable|string|max:100',
            'major' => 'nullable|string|max:100',
            'rapor_score' => 'nullable|numeric|between:0,100',
            'parent_name' => 'nullable|string|max:255',
            'phone' => 'nullable|string|max:50',
            'address' => 'nullable|string|max:500',
        ]);

        $randomNum = rand(1000, 9999);
        $regNumber = 'CIOMAS-2026-' . $randomNum;

        // Ensure unique
        while (PpdbRegistration::where('registration_number', $regNumber)->exists()) {
            $regNumber = 'CIOMAS-2026-' . rand(1000, 9999);
        }

        $reg = PpdbRegistration::create([
            'registration_number' => $regNumber,
            'full_name' => $validated['full_name'],
            'nisn' => $validated['nisn'] ?? null,
            'school_origin' => $validated['school_origin'] ?? 'SMP Asal',
            'pathway_type' => $validated['pathway_type'] ?? 'Jalur Prestasi Rapor Unggulan',
            'major' => $validated['major'] ?? 'Animasi 3D & 2D',
            'rapor_score' => $validated['rapor_score'] ?? 85.00,
            'parent_name' => $validated['parent_name'] ?? null,
            'phone' => $validated['phone'] ?? null,
            'address' => $validated['address'] ?? null,
            'status' => 'pending',
            'admin_notes' => 'Pendaftaran online mandiri via website',
        ]);

        return response()->json([
            'success' => true,
            'message' => 'Pendaftaran PPDB SMKNK 1 CIOMAS berhasil disimpan ke sistem!',
            'data' => $reg,
        ]);
    }
}

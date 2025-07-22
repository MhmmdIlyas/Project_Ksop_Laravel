<?php

namespace App\Http\Controllers;

use App\Models\Layanan;
use Illuminate\Http\Request;

class LayananController extends Controller
{
    // Untuk halaman pengunjung (app.blade.php)
    public function publik()
    {
        $layanans = Layanan::all();
        return view('app', compact('layanans'));
    }

    // Untuk halaman admin (dashboard.blade.php)
    public function index()
    {
        $layanans = Layanan::all();
        return view('admin.dashboard', compact('layanans'));
    }

    // Update konten layanan dari admin
    public function update(Request $request, $id)
    {
        $layanan = Layanan::findOrFail($id);
        $layanan->update($request->only('konten'));
        return redirect()->back()->with('success', 'Konten layanan berhasil diperbarui.');
    }
}


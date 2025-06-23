<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\RumahSakit;

class RumahSakitController extends Controller
{
    public function index()
    {
        return response()->json(RumahSakit::all());
    }

    public function show($id)
    {
        return response()->json(RumahSakit::findOrFail($id));
    }

    public function store(Request $request)
    {
        // Ambil hanya field yang dibutuhkan dari form input
        $data = $request->only([
            'nama', 'alamat', 'telepon', 'tipe', 'latitude', 'longitude'
        ]);

        $rs = RumahSakit::create($data);

        return response()->json($rs, 201);
    }

    public function update(Request $request, $id)
    {
        $rs = RumahSakit::findOrFail($id);

        $data = $request->only([
            'nama', 'alamat', 'telepon', 'tipe', 'latitude', 'longitude'
        ]);

        $rs->update($data);

        return response()->json($rs);
    }

    public function destroy($id)
    {
        RumahSakit::destroy($id);

        return response()->json(['message' => 'Data berhasil dihapus']);
    }
}

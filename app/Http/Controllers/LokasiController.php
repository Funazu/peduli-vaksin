<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master_Location_Vaccination;

class LokasiController extends Controller
{
    public function index() {
        return view('dashboard.lokasi.index', [
            'title' => 'Lokasi Create',
            'lokasi' => Master_Location_Vaccination::all()
        ])->with('i');
    }

    public function create() {
        return view('dashboard.lokasi.create', [
            'title' => 'Lokasi Create'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'nama_lokasi' => 'required',
            'alamat_lokasi' => 'required'
        ]);

        Master_Location_Vaccination::create($validatedData);
        return redirect('/dashboard/lokasi');
    }

    public function edit($id) {
        return view('dashboard.lokasi.edit', [
            'title' => 'Lokasi Edit',
            'lokasi' => Master_Location_Vaccination::find($id)
        ]);
    }

    public function put(Request $request, Master_Location_Vaccination $master_location_vaccination) {
        $validatedData = $request->validate([
            'nama_lokasi' => 'required',
            'alamat_lokasi' => 'required'
        ]);

        $master_location_vaccination->update($validatedData);
        return redirect('/dashboard/lokasi');
    }

    public function destroy(Master_Location_Vaccination $master_location_vaccination)
    {
        $master_location_vaccination->delete();
        return redirect('/dashboard/lokasi');
    }
}

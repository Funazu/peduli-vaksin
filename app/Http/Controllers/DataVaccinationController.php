<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga_Masyarakat;
use App\Models\Master_Vaccination;
use App\Models\Master_Location_Vaccination;
use App\Models\Data_Vaccination;

class DataVaccinationController extends Controller
{
    public function index() {
        return view('dashboard.datavac.index', [
            'title' => 'Data Vaksin',
            'data' => Data_Vaccination::all(),
            'id_penduduk' => Warga_Masyarakat::all(),
            'id_master_vaksinasi' => Master_Vaccination::all(),
            'id_lokasi' => Master_Location_Vaccination::all(),
        ])->with('i');
    }

    public function create() {
        return view('dashboard.datavac.create', [
            'title' => 'Create Data Vaccine',
            'penduduk' => Warga_Masyarakat::all(),
            'jenisvaksin' => Master_Vaccination::all(),
            'lokasi' => Master_Location_Vaccination::all()
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'id_penduduk' => 'required',
            'id_master_vaksinasi' => 'required',
            'id_lokasi' => 'required',
            'tgl_vaksinasi' => 'required',
            'vaksin_ke' => 'required',
        ]);

        Data_Vaccination::create($validatedData);
        return redirect('/dashboard/datavaccination');
    }

    public function edit($id) {
        return view('dashboard.datavac.edit', [
            'title' => 'Data Vaccination Edit',
            'penduduk' => Data_Vaccination::find($id),
            'jenisvaksin' => Master_Vaccination::all(),
            'lokasi' => Master_Location_Vaccination::all()
        ]);
    }
    
}

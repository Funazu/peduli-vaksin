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
            'warga_masyarakat_id' => 'required',
            'master_vaccination_id' => 'required',
            'master_location_vaccination_id' => 'required',
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

    public function put(Request $request, Data_Vaccination $data_vaccination) {
        $validatedData = $request->validate([
            'warga_masyarakat_id' => 'required',
            'master_vaccination_id' => 'required',
            'master_location_vaccination_id' => 'required',
            'tgl_vaksinasi' => 'required',
            'vaksin_ke' => 'required',
        ]);

        $data_vaccination->update($validatedData);
        return redirect('/dashboard/datavaccination');
    }

    public function destroy(Data_Vaccination $data_vaccination)
    {
        $data_vaccination->delete();
        return redirect('/dashboard/datavaccination');
    }
    
}

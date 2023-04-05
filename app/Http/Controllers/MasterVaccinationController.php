<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Master_Vaccination;

class MasterVaccinationController extends Controller
{
    public function index() {
        return view('dashboard.mastervac.index', [
            'title' => 'Master Vaccination',
            'mastervac' => Master_Vaccination::all()
        ])->with('i');
    }

    public function create() {
        return view('dashboard.mastervac.create', [
            'title' => 'Create Master Vaccination'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'nama_master' => 'required',
            'keterangan' => 'required',
        ]);

        Master_Vaccination::create($validatedData);
        return redirect('/dashboard/mastervaccination');
    }
    
    public function edit($id) {
        return view('dashboard.mastervac.edit', [
            'title' => 'Master Vaccination Edit',
            'mastervac' => Master_Vaccination::find($id)
        ]);
    }

    public function put(Request $request, Master_Vaccination $master_vaccination) {
        $validatedData = $request->validate([
            'nama_master' => 'required',
            'keterangan' => 'required',
        ]);

        $master_vaccination->update($validatedData);
        return redirect('/dashboard/mastervaccination');
    }

    public function destroy(Master_Vaccination $master_vaccination)
    {
        $master_vaccination->delete();
        return redirect('/dashboard/mastervaccination');
    }

}

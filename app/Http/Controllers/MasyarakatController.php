<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Warga_Masyarakat;

class MasyarakatController extends Controller
{
    public function index() {
        return view('dashboard.masyarakat.index', [
            'title' => 'Masyarakat',
            'masyarakat' => Warga_Masyarakat::all()
        ])->with('i');
    }

    public function create() {
        return view('dashboard.masyarakat.create', [
            'title' => 'Masyarakat Create'
        ]);
    }

    public function store(Request $request) {
        $validatedData = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'no_telp' => 'required',
        ]);

        Warga_Masyarakat::create($validatedData);
        return redirect('/dashboard/masyarakat');
    }

    // public function delete(Request $request, $id, Warga_Masyarakat $warga_masyarakat) {
    //     $warga_masyarakat->delete($id);
    //     return redirect('/dashboard/masyarakat');
    // }

    public function edit($id) {
        return view('dashboard.masyarakat.edit', [
            'title' => 'Masyarakat Edit',
            'masyarakat' => Warga_Masyarakat::find($id)
        ]);
    }

    public function put(Request $request, Warga_Masyarakat $warga_masyarakat) {
        $validatedData = $request->validate([
            'nik' => 'required',
            'nama' => 'required',
            'gender' => 'required',
            'alamat' => 'required',
            'pekerjaan' => 'required',
            'no_telp' => 'required',
        ]);

        $warga_masyarakat->update($validatedData);
        return redirect('/dashboard/masyarakat');
    }

    public function destroy(Warga_Masyarakat $warga_masyarakat)
    {
        $warga_masyarakat->delete();
        return redirect('/dashboard/masyarakat');
    }
}

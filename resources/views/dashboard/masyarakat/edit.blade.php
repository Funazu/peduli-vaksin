@extends('templates.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-5">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="text-center">Form Edit</h4>
                    <hr>
                    <form action="/dashboard/masyarakat/edit/{{ $masyarakat->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-2">
                            <strong>NIK</strong>    
                            <input type="number" name="nik" value="{{ $masyarakat->nik }}" placeholder="XXXXXXXX" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <strong>Nama</strong>
                            <input type="text" name="nama" placeholder="Masukan Nama" value="{{ $masyarakat->nama }}" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <strong>Gender</strong>
                            <label><input type="checkbox" name="gender" value="Laki-Laki">Laki Laki</label>
                            <label><input type="checkbox" name="gender" value="Perempuan">perempuan</label>
                        </div>
                        <div class="form-group mb-2">
                            <strong>Alamat</strong>
                            <textarea name="alamat" placeholder="Masukan Alamat" class="form-control">{{ $masyarakat->alamat }}</textarea>
                        </div>
                        <div class="form-group mb-2">
                            <strong>Pekerjaan</strong>
                            <input type="text" name="pekerjaan" placeholder="Masukan Pekerjaan" value="{{ $masyarakat->pekerjaan }}" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <strong>No Telp</strong>
                            <input type="number" name="no_telp" placeholder="XXXXXXX" value="{{ $masyarakat->no_telp }}" class="form-control">
                        </div>
                        <hr>
                        <div class="form-group mb-2">
                            <button class="btn btn-primary">Kirim</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
@endsection()
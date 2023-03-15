@extends('templates.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-5">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="text-center">Form Create</h4>
                    <hr>
                    <form action="/dashboard/lokasi/create" method="POST">
                        @csrf
                        <div class="form-group mb-2">
                            <strong>Nama Lokasi</strong>    
                            <input type="text" name="nama_lokasi" placeholder="Nama Lokasi" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <strong>Alamat Lokasi</strong>
                            <input type="text" name="alamat_lokasi" placeholder="Alamat Lokasi" class="form-control">
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
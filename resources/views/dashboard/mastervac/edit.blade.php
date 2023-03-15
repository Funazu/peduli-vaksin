@extends('templates.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-5">
            <div class="card shadow">
                <div class="card-body">
                    <h4 class="text-center">Form Edit</h4>
                    <hr>
                    <form action="/dashboard/mastervaccination/edit/{{ $mastervac->id }}" method="POST">
                        @method('PUT')
                        @csrf
                        <div class="form-group mb-2">
                            <strong>Nama Master</strong>    
                            <input type="text" name="nama_master" value="{{ $mastervac->nama_master }}" placeholder="Nama Master" class="form-control">
                        </div>
                        <div class="form-group mb-2">
                            <strong>Keterangan</strong>
                            <input type="text" name="keterangan" placeholder="Keterangan" value="{{ $mastervac->keterangan }}" class="form-control">
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
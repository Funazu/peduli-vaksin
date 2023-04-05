@extends('templates.main')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-5">
        @if($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops</strong>Input Gagal. <br> <br>
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        @endif
        <div class="card shadow">
            <div class="card-body">
                <h4 class="text-center">Form Create</h4>
                <hr>
                <form action="/dashboard/datavaccination/create" method="POST">
                    @csrf
                    <div class="form-group mb-2">
                        <strong>Nama Penduduk</strong>
                        <select name="warga_masyarakat_id" class="form-control">
                            @foreach($penduduk as $p)
                            <option value="{{ $p->id }}">{{ $p->nama }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <strong>Jenis Vaksin</strong>
                        <select name="master_vaccination_id" class="form-control">
                            @foreach($jenisvaksin as $js)
                            <option value="{{ $js->id }}">{{ $js->nama_master }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <strong>Lokasi Vaksin</strong>
                        <select name="master_location_vaccination_id" class="form-control">
                            @foreach($lokasi as $l)
                            <option value="{{ $l->id }}">{{ $l->nama_lokasi }}</option>
                            @endforeach
                        </select>
                    </div>
                    <div class="form-group mb-2">
                        <strong>Tanggal Vaksin</strong>
                        <input type="date" name="tgl_vaksinasi" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <strong>Vaksin Ke</strong>
                        <input type="number" name="vaksin_ke" placeholder="Vaksin ke" class="form-control">
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
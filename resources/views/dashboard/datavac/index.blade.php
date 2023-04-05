@extends('templates.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-10">
            <div class="card shadow">
                <div class="card-body">
                    <a href="/dashboard/datavaccination/create" class="btn btn-primary">Create</a>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Penduduk</th>
                                <th>Jenis Vaksin</th>
                                <th>Lokasi</th>
                                <th>Tanggal Vaksin</th>
                                <th>Vaksin ke</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($data as $d) 
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $d->warga_masyarakat->nama }}</td>
                                <td>{{ $d->master_vaccination->keterangan }}</td>
                                <td>{{ $d->master_location_vaccination->nama_lokasi }}</td>
                                <td>{{ $d->tgl_vaksinasi }}</td>
                                <td>{{ $d->vaksin_ke }}</td>
                                <td>
                                    <form action="/dashboard/datavaccination/delete/{{ $d->id }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                        <a href="/dashboard/datavaccination/edit/{{ $d->id }}" class="btn btn-secondary">Edit</a>
                                    </form>
                                </td>
                            </tr>
                            @endforeach()
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    </div>
@endsection('')
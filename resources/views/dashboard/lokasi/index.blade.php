@extends('templates.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-10">
            <div class="card shadow">
                <div class="card-body">
                    <a href="/dashboard/lokasi/create" class="btn btn-primary">Create</a>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Lokasi</th>
                                <th>Alamat Lokasi</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($lokasi as $l) 
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $l->nama_lokasi }}</td>
                                <td>{{ $l->alamat_lokasi }}</td>
                                <td>
                                    <form action="/dashboard/lokasi/delete/{{ $l->id }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                        <a href="/dashboard/lokasi/edit/{{ $l->id }}" class="btn btn-secondary">Edit</a>
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
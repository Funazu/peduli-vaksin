@extends('templates.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-10">
            <div class="card shadow">
                <div class="card-body">
                    <a href="/dashboard/masyarakat/create" class="btn btn-primary">Create</a>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>NIK</th>
                                <th>Nama</th>
                                <th>Gender</th>
                                <th>Alamat</th>
                                <th>Pekerjaan</th>
                                <th>No Telp</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($masyarakat as $m) 
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $m->nik }}</td>
                                <td>{{ $m->nama }}</td>
                                <td>{{ $m->gender }}</td>
                                <td>{{ $m->alamat }}</td>
                                <td>{{ $m->pekerjaan }}</td>
                                <td>{{ $m->no_telp }}</td>
                                <td>
                                    <form action="/dashboard/masyarakat/delete/{{ $m->id }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                        <a href="/dashboard/masyarakat/edit/{{ $m->id }}" class="btn btn-secondary">Edit</a>
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
@extends('templates.main')
@section('content')
    <div class="row justify-content-center mt-5">
        <div class="col-10">
            <div class="card shadow">
                <div class="card-body">
                    <a href="/dashboard/mastervaccination/create" class="btn btn-primary">Create</a>
                    <hr>
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>#</th>
                                <th>Nama Master</th>
                                <th>Keterangan</th>
                                <th>Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($mastervac as $mv) 
                            <tr>
                                <td>{{ ++$i }}</td>
                                <td>{{ $mv->nama_master }}</td>
                                <td>{{ $mv->keterangan }}</td>
                                <td>
                                    <form action="/dashboard/mastervaccination/delete/{{ $mv->id }}" method="POST">
                                        @csrf
                                        <button class="btn btn-danger">Delete</button>
                                        <a href="/dashboard/mastervaccination/edit/{{ $mv->id }}" class="btn btn-secondary">Edit</a>
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
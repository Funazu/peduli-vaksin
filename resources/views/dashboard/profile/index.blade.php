@extends('templates.main')
@section('content')
<div class="row justify-content-center mt-5">
    <div class="col-5">
        <div class="card shadow">
            <div class="card-body">
                <h4 class="text-center">Edit Profile Admin</h4>
                <hr>
                <form action="/dashboard/profile/edit/{{ $profile->id }}" method="POST">
                    @method('PUT')
                    @csrf
                    <div class="form-group mb-2">
                        <strong>Username</strong>
                        <input type="text" name="username" class="form-control">
                    </div>
                    <div class="form-group mb-2">
                        <strong>Password</strong>
                        <input type="password" name="password" class="form-control">
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
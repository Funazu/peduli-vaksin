<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ $title }} | Data Vaksinasi</title>
    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <script src="/js/bootstrap.min.js"></script>
</head>
<body>
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-5">
                <div class="card shadow">
                    <div class="card-body">
                        <h4 class="text-center">Admin Login</h4>
                        <hr>
                        <form action="/auth/login" method="POST">
                            @csrf
                            <div class="form-group">
                                <strong>Username</strong>
                                <input type="text" name="username" class="form-control" placeholder="Masukan Username">
                            </div>
                            <div class="form-group">
                                <strong>Password</strong>
                                <input type="password" name="password" placeholder="Masukan Password" class="form-control">
                            </div>
                            <hr>
                            <div class="form-group">
                                <button class="btn btn-primary">Kirim</button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</body>
</html>
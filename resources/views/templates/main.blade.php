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

    <!-- Header -->
    <div class="card">
        <div class="container">
            <header class="d-flex justify-content-center py-3">
                <ul class="nav nav-pills">
                    <li class="nav-item"><a href="/dashboard/mastervaccination" class="nav-link">Data Jenis Vaksin</a></li>
                    <li class="nav-item"><a href="/dashboard/masyarakat" class="nav-link">Data Masyarakat</a></li>
                    <li class="nav-item"><a href="/dashboard/datavaccination" class="nav-link">Data Pemberian Vaksin</a></li>
                    <!-- <li class="nav-item"><a href="#" class="nav-link">Data User Account</a></li> -->
                    <li class="nav-item"><a href="/dashboard/lokasi" class="nav-link">Data Lokasi Vaksin</a></li>
                    <li class="nav-item"><a href="/dashboard/profile" class="nav-link active me-2">Profile</a></li>

                    
                    <form action="/auth/logout" method="POST">
                        @csrf
                        <button class="btn btn-danger">Logout</button>
                    </form>
                </ul>
            </header>
        </div>
    </div>

    <div class="container">
        @yield('content')
    </div>
</body>
</html>
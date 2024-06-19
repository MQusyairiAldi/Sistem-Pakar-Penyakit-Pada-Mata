<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Konsultasi</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.10.5/font/bootstrap-icons.css">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">
    <link rel="stylesheet" href="/css/style.css">
</head>

<body>
    <div id="wrapper">
        <div id="topbar" class="d-flex align-items-center fixed-top">
            <div class="container d-flex justify-content-between">

            </div>
        </div>
        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

                <h1 class="logo me-auto"><a href="index.html">MATA</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto " href="{{route('user.homeuser')}}">Home</a></li>
                        <li><a class="nav-link scrollto" href="{{route('user.info')}}">Penyakit Mata</a></li>
                        <li><a class="nav-link scrollto" href="{{route('user.konsultasiuser')}}">Konsultasi</a></li>

                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->
                <div class="appointment-buttons">
                    <a href="{{route('auth.register')}}" class="appointment-btn scrollto"><span
                            class="d-none d-md-inline">Log Out</span></a>
                </div>
            </div>
        </header><br><br><br><br>

        <div class="container mt-5">
            <h1 class="mb-4">Hasil Konsultasi</h1>
            <div class="card mb-3">
                <div class="card-header">
                    <h2 class="h5">Detail Konsultasi</h2>
                </div>
                <div class="card-body">
                    <p><strong>Nama Pasien:</strong> {{ $konsultasi->nama }}</p>
                    <p><strong>Tanggal Konsultasi:</strong> {{ $konsultasi->tanggal }}</p>

                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <h2 class="h5">Hasil Diagnosa</h2>
                </div>
                <div class="card-body">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th>Penyakit</th>
                                <th>solusi</th>
                                <th>Presentase</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach($detailPenyakits as $detailPenyakit)

                            <tr>
                                <td>{{ $detailPenyakit->namapenyakit }}</td>
                                <td>{{ $detailPenyakit->solusi }}</td>
                                <td>{{ number_format($detailPenyakit->presentase, 2) }}%</td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
</body>

</html>
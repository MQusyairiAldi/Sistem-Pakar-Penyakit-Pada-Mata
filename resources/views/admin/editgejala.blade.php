<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.10.5/font/bootstrap-icons.css">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">
</head>

<body id="page-top">

    <div id="wrapper">

        <!-- ======= Header ======= -->
        <header id="header" class="fixed-top">
            <div class="container d-flex align-items-center">

                <h1 class="logo me-auto"><a href="index.html">Medilab</a></h1>
                <!-- Uncomment below if you prefer to use an image logo -->
                <!-- <a href="index.html" class="logo me-auto"><img src="assets/img/logo.png" alt="" class="img-fluid"></a>-->

                <nav id="navbar" class="navbar order-last order-lg-0">
                    <ul>
                        <li><a class="nav-link scrollto " href="{{route('admin.homeadmin')}}">Home</a></li>
                        <li><a class="nav-link scrollto" href="{{route('admin.gejala')}}">Gejala</a></li>
                        <li><a class="nav-link scrollto" href="{{route('admin.penyakit')}}">Penyakit</a></li>
                        <li><a class="nav-link scrollto" href="{{route('admin.basisaturan')}}">Basis Aturan</a></li>


                    </ul>
                    <i class="bi bi-list mobile-nav-toggle"></i>
                </nav>
                <!-- .navbar -->

                <div class="appointment-buttons">

                    <a href="{{route('auth.register')}}" class="appointment-btn scrollto"><span
                            class="d-none d-md-inline">Log Out</span></a>
                </div>
            </div>
        </header><br><br><br><br><br><br><br>


        <!-- Begin Page Content -->

        <div class="row justify-content-center">
            <div class="col-lg-6">
                <div class="card shadow"></div>

                <!-- Content Row -->
                <div class="row">
                    <div class="col-lg-12">
                        <div class="container ">
                            @if (Session::get('success'))
                            <div class="alert alert-success alert-dismissible fade show" role="alert">
                                <strong>Berhasil!</strong> {{ Session::get('success') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif

                            @if (Session::get('failed'))
                            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                                <strong>Gagal!</strong> {{ Session::get('failed') }}
                                <button type="button" class="btn-close" data-bs-dismiss="alert"
                                    aria-label="Close"></button>
                            </div>
                            @endif
                        </div>
                        <div class="card shadow mb-4">
                            <div class="card-header py-3">
                                <h6 class="m-0 font-weight-bold text-primary">Edit Data Gejala</h6>
                            </div>
                            <div class="card-body">
                                <form action="/posteditgejala/{{ $data->id }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <div class="form-group mt-1">
                                        <label class="text-secondary mb-2">Nama Gejala</label>
                                        <input type="text" class="form-control border border-secondary form-control"
                                            name="namagejala" required value="{{ $data->namagejala }}">
                                        <span class="text-danger">
                                            @error('namagejala')
                                            {{ $message }}
                                            @enderror
                                        </span>
                                    </div><br><br>

                                    <button type="submit" class="appointment-btn scrollto">Update Data Gejala</button>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>


                <!-- End of Content Wrapper -->

            </div>
        </div>
        <!-- End of Page Wrapper -->
        <!-- Footer -->
    </div>
    </div>
    </div>



    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <script href="{{ asset('tmp/js/sb-admin-2.min.css') }}"></script>
    <script href="{{ asset('tmp/vendor/jquery/jquery.min.js') }}"></script>
    <script href="{{ asset('tpm/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
    <script href="{{ asset('tmp/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
    <script href="{{ asset('tmp/vendor/chart.js/Chart.min.js') }}"></script>

</body>

</html>
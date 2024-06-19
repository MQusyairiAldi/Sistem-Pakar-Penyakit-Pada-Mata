<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">
</head>

<body id="page-top">

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


        <!-- Content Wrapper -->
        <div id="content-wrapper" class="d-flex flex-column">

            <!-- Main Content -->
            <div id="content">

                <!-- Begin Page Content -->
                <div class="container-fluid">


                    <!-- Content Row -->
                    <div class="row justify-content-center">
                        <div class="col-lg-8">
                            <div class="container">
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
                                <div class="card-header d-flex justify-content-between align-items-center">
                                    <h6 class="m-0 font-weight-bold text-primary">Data Penyakit</h6>
                                    <div>
                                        <a href="{{ route('admin.tambahpenyakit') }}" class="appointment-btn scrollto">+
                                            Tambah
                                            Data</a>
                                    </div>
                                </div>

                                <div class="card-body">
                                    <div class="table-responsive">
                                        <table class="table">
                                            <thead>
                                                <tr>

                                                    <th scope="col">Nama Penyakit</th>
                                                    <th scope="col">Keterangan</th>
                                                    <th scope="col">Solusi</th>

                                                </tr>
                                            </thead>
                                            <tbody class="table-group-divider">
                                                @foreach ($data as $index => $penyakit)
                                                <tr>
                                                    <td>{{ $penyakit->namapenyakit }}</td>
                                                    <td>{{ $penyakit->keterangan }}</td>
                                                    <td>{{ $penyakit->solusi }}</td>

                                                    <td>
                                                        <div class="d-flex justify-content-end">
                                                            <a href="{{ route('admin.editpenyakit', $penyakit->id) }}"
                                                                class="appointment-btn scrollto">Edit</a>
                                                            <a class="delete-btn"
                                                                href="/admin/hapuspenyakit/{{ $penyakit->id }}">Delete</a>
                                                        </div>
                                                    </td>
                                                </tr>
                                                @endforeach
                                            </tbody>
                                        </table>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- End of Page Content -->


                <!-- End of Footer -->

                <!-- Scroll to Top Button-->
                <a class="scroll-to-top rounded" href="#page-top">
                    <i class="fas fa-angle-up"></i>
                </a>

                <!-- Logout Modal-->
                <!-- Logout modal content here -->

                <!-- Bootstrap JS and other scripts -->
                <!-- Include your JS and script links here -->
                <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
                <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
                <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
                <script src="{{ asset('tmp/js/sb-admin-2.min.js') }}"></script>
                <script src="{{ asset('tmp/vendor/jquery/jquery.min.js') }}"></script>
                <script src="{{ asset('tmp/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
                <script src="{{ asset('tmp/vendor/jquery-easing/jquery.easing.min.js') }}"></script>
                <script src="{{ asset('tmp/vendor/chart.js/Chart.min.js') }}"></script>

</body>

</html>
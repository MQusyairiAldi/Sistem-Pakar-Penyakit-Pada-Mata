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

        <div class="container my-5">
            @if (Session::get('success'))
            <div class="alert alert-success alert-dismissible fade show" role="alert">
                <strong>Berhasil!</strong> {{ Session::get('success') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            @if (Session::get('failed'))
            <div class="alert alert-danger alert-dismissible fade show" role="alert">
                <strong>Gagal!</strong> {{ Session::get('failed') }}
                <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
            </div>
            @endif

            <div class="row justify-content-center">
                <div class="col-lg-6">
                    <div class="card shadow">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Konsultasi Pasien</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('prosesKonsultasi') }}" method="POST">
                                @csrf
                                <div class="form-group mt-1">
                                    <label class="text-secondary mb-2">Nama Pasien</label>
                                    <input type="text" class="form-control" name="nama" maxlength="50" required>
                                </div>
                                <br>
                                <div class="form-group">
                                    <label class="text-secondary mb-2">Pilih Gejala-gejala Berikut</label>
                                    <table class="table table-bordered">
                                        <thead>
                                            <tr>
                                                <th width="50px"></th>
                                                <th width="50px">No.</th>
                                                <th width="200px">Nama Gejala</th>
                                            </tr>
                                        </thead>
                                        <tbody>
                                            @foreach($dataGejala as $gejala)
                                            <tr>
                                                <td><input type="checkbox" class="check-item" name="idgejala[]"
                                                        value="{{ $gejala->id }}"></td>
                                                <td>{{ $loop->iteration }}</td>
                                                <td>{{ $gejala->namagejala }}</td>
                                                <!-- Assuming the correct attribute is 'name' -->
                                            </tr>
                                            @endforeach
                                        </tbody>
                                    </table>
                                </div>
                                <br>

                                <button type="submit" class="btn btn-primary">Submit</button>
                            </form>


                        </div>
                    </div>
                </div>
            </div>
        </div>


        <!-- Bootstrap JS and dependencies -->
        <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
        <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
        <script src="resources/js/chosen.jquery.min.js"></script>
        <script>
        $(function() {
            $('.chosen').chosen();
        });
        </script>
        <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
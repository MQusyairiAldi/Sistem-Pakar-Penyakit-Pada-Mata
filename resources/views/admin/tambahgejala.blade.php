<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">
</head>

<body id="page-top">



    <div id="wrapper">

        <!-- Begin Page Content -->
        <div class="container my-5">

            <!-- Content Row -->
            <div class="row justify-content-center">
                <div class="col-md-6">
                    <div class="container ">
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
                    </div>
                    <div class="card shadow mb-4">
                        <div class="card-header py-3">
                            <h6 class="m-0 font-weight-bold text-primary">Tambah Gejala Baru</h6>
                        </div>
                        <div class="card-body">
                            <form action="{{ route('posttambahgejala') }}" method="POST" enctype="multipart/form-data">
                                @csrf

                                <div class="form-group mt-1">
                                    <label class="text-secondary mb-2">Nama Gejala</label>
                                    <input type="text" class="form-control border border-secondary form-control"
                                        name="namagejala" required value="{{ old('namagejala') }}">
                                    <span class="text-danger">
                                        @error('namagejala')
                                        {{ $message }}
                                        @enderror
                                    </span>
                                </div><br><br>

                                <button type="submit" class="appointment-btn scrollto">Tambah Gejala</button>
                            </form>
                            <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                let successMessage = "{{ Session::get('success') }}";

                                if (successMessage) {
                                    window.location.href = "{{ route('admin.gejala') }}";
                                }
                            });
                            </script>
                        </div>
                    </div>
                </div>
            </div>


            <!-- End of Content Wrapper -->

        </div>
    </div>
    <!-- End of Page Wrapper -->
    <!-- Footer -->



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
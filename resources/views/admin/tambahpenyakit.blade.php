<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
</head>

<body>

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
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Penyakit Baru</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('posttambahpenyakit') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Nama Penyakit</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="namapenyakit" required value="{{ old('namapenyakit') }}">
                                <span class="text-danger">
                                    @error('namapenyakit')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>

                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Keterangan</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="keterangan" required value="{{ old('keterangan') }}">
                                <span class="text-danger">
                                    @error('keterangan')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div>
                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Solusi</label>
                                <input type="text" class="form-control border border-secondary form-control"
                                    name="solusi" required value="{{ old('solusi') }}">
                                <span class="text-danger">
                                    @error('solusi')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br><br>

                            <button type="submit" class="appointment-btn scrollto">Tambah Penyakit</button>
                        </form>
                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            let successMessage = "{{ Session::get('success') }}";

                            if (successMessage) {
                                window.location.href = "{{ route('admin.penyakit') }}";
                            }
                        });
                        </script>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- Bootstrap JS and dependencies -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.16.0/umd/popper.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
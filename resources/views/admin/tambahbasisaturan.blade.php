<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">

    <link rel="stylesheet" href="resources/css/bootstrap-chosen.css">
    <link rel="stylesheet" href="/css/style.css">
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
                        <h6 class="m-0 font-weight-bold text-primary">Tambah Basis Aturan Baru</h6>
                    </div>
                    <div class="card-body">
                        <form action="{{ route('posttambahbasisaturan') }}" method="POST" enctype="multipart/form-data">
                            @csrf

                            <div class="form-group mt-1">
                                <label class="text-secondary mb-2">Nama Penyakit</label>
                                <select class="form-control border border-secondary form-control" name="penyakit_id"
                                    required>
                                    <option value="">--Pilih Penyakit--</option>
                                    @foreach($dataPenyakit as $penyakit)
                                    <option value="{{ $penyakit->id }}">{{ $penyakit->namapenyakit }}</option>
                                    @endforeach
                                </select>
                                <span class="text-danger">
                                    @error('penyakit_id')
                                    {{ $message }}
                                    @enderror
                                </span>
                            </div><br>

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
                                            <td><input type="checkbox" class="check-item" name=<?php echo 'gejala_id[]'?>
                                                    value="{{ $gejala->id }}"></td>
                                            <td>{{ $loop->iteration }}</td>
                                            <td>{{ $gejala->namagejala }}</td>
                                        </tr>
                                        @endforeach
                                    </tbody>
                                </table>
                            </div>

                            <br><br>

                            <button type="submit" class="appointment-btn scrollto">Tambah Penyakit</button>

                        </form>
                        <script>
                        document.addEventListener('DOMContentLoaded', function() {
                            let successMessage = "{{ Session::get('success') }}";

                            if (successMessage) {
                                window.location.href = "{{ route('admin.basisaturan') }}";
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
    <script src="resources/js/chosen.jquery.min.js"></script>
    <script>
    $(function() {
        $('.chosen').chosen();
    });
    </script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
</body>

</html>
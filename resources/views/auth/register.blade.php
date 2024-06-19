<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Register</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <style>
    body {
        background-color: #D5EBFF;
    }

    .container {
        color: #1977cc;
    }

    .card {
        background-color: #fff;
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
    }

    .btn-primary {
        background-color: #1977cc;
        border-color: #1977cc;
    }

    .btn-primary:hover {
        background-color: #1977cc;
        border-color: #1977cc;
    }

    a {
        color: #1977cc;
    }

    a:hover {
        color: #008000;
    }

    .login-image {
        width: 100%;
        max-width: 400px;
        height: auto;
        margin-right: 20px;
    }
    </style>
</head>

<body>
    <div class="container">
        <a href="/">
            <i class="bi-arrow-left h1"></i>
        </a>
    </div>

    <div class="container mt-3">
        @if (Session::get('failed'))
        <div class="alert alert-danger alert-dismissible fade show" role="alert">
            <strong>Registrasi Gagal!</strong> {{ Session::get('failed') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>
        @endif
    </div>

    <div class="container d-flex justify-content-center align-items-center" style="margin-top: 60px">
        <div class="card" style="width: 80%">
            <div class="card-body p-4">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset ('asset/images/5.jpeg') }}" style="width: 70%; border-radius: 10px;"
                        alt="Login Image" class="login-image">
                    <div style="width: 60%">
                        <h3 class="card-title text-center">Register</h3>
                        <form action="{{ route('postRegister') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <label for="name" class="form-label text-secondary">Nama Anda</label>
                                <input type="text" id="name" class="form-control" name="name" required
                                    value="{{ old('name') }}">
                                <span class="text-danger">@error('name') {{ $message }} @enderror</span>
                            </div>
                            <div class="mb-3">
                                <label for="email" class="form-label text-secondary">Email Anda</label>
                                <input type="email" id="email" class="form-control" name="email" required
                                    value="{{ old('email') }}">
                                <span class="text-danger">@error('email') {{ $message }} @enderror</span>
                            </div>
                            <div class="mb-3">
                                <label for="umur" class="form-label text-secondary">Umur Anda</label>
                                <input type="text" id="umur" class="form-control" name="umur" required
                                    value="{{ old('umur') }}">
                                <span class="text-danger">@error('umur') {{ $message }} @enderror</span>
                            </div>
                            <div class="mb-3">
                                <label class="form-label text-secondary">Pilih Jenis Kelamin</label><br>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jeniskelamin" value="laki-laki"
                                        id="inlineRadio1">
                                    <label class="form-check-label" for="inlineRadio1">Laki-Laki</label>
                                </div>
                                <div class="form-check form-check-inline">
                                    <input class="form-check-input" type="radio" name="jeniskelamin" value="perempuan"
                                        id="inlineRadio2">
                                    <label class="form-check-label" for="inlineRadio2">Perempuan</label>
                                </div>
                                <span class="text-danger">@error('jeniskelamin') {{ $message }} @enderror</span>
                            </div>
                            <div class="mb-3">
                                <label for="alamat" class="form-label text-secondary">Alamat Anda</label>
                                <input type="text" id="alamat" class="form-control" name="alamat" required
                                    value="{{ old('alamat') }}">
                                <span class="text-danger">@error('alamat') {{ $message }} @enderror</span>
                            </div>
                            <div class="mb-3">
                                <label for="password" class="form-label text-secondary">Password Anda</label>
                                <input type="password" id="password" class="form-control" name="password" required>
                                <span class="text-danger">@error('password') {{ $message }} @enderror</span>
                            </div>
                            <div class="mb-3">
                                <label for="password_confirmation" class="form-label text-secondary">Konfirmasi Password
                                    Anda</label>
                                <input type="password" id="password_confirmation" class="form-control"
                                    name="password_confirmation" required>
                                <span class="text-danger">@error('password_confirmation') {{ $message }}
                                    @enderror</span>
                            </div>
                            <button type="submit" class="btn btn-primary mt-4">Register</button>
                        </form>
                        <p class="mt-2 text-center">
                            Sudah Punya Akun? <a href="{{ route('auth.login') }}" style="text-decoration: none">Ayo
                                Masuk!!</a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.2/dist/js/bootstrap.min.js"></script>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css">

    <style>
    body {
        background-color: #F2F9FF;
        /* Warna latar belakang hijau muda */
    }

    .container {
        color: #1977cc;
        /* Warna teks hijau tua */
    }

    .card {
        background-color: #fff;
        /* Warna latar belakang card putih */
        box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
        /* Bayangan card untuk tampilan lebih baik */
    }

    .btn-primary {
        background-color: #1977cc;
        /* Warna tombol hijau tua */
        border-color: #1977cc;
        /* Warna border tombol hijau tua */
    }

    .btn-primary:hover {
        background-color: #1977cc;
        /* Warna tombol saat cursor diarahkan menjadi hijau lebih terang */
        border-color: #1977cc;
        /* Warna border tombol saat cursor diarahkan menjadi hijau lebih terang */
    }

    a {
        color: #1977cc;
        /* Warna tautan hijau tua */
    }

    a:hover {
        color: #1977cc;
        /* Warna tautan saat cursor diarahkan menjadi hijau lebih terang */
    }

    .login-image {
        width: 100%;
        max-width: 400px;
        /* Lebar maksimum gambar */
        height: auto;
        /* Tinggi otomatis sesuai proporsi gambar */
        margin-right: 20px;
        /* Jarak kanan gambar dari formulir */
    }
    </style>
    <title>Login</title>
</head>

<body>
    <div class="container">
        <a href="/">
            <i class="bi-arrow-left h1"></i>
        </a>
    </div>
    <div class="container d-flex justify-content-center align-items-center" style="margin-top: 60px">
        <div class="card d-flex align-items-center animate__animated animate__fadeIn rounded" style="width: 60%">
            <div class="card-body p-4">
                <div class="d-flex justify-content-center">
                    <img src="{{ asset ('asset/images/2.jpg') }}" style="width: 70%; border-radius: 10px;"
                        alt="Login Image" class="login-image">

                    <div>
                        <div class="spinner-grow" style="color: #1977cc;" role="status">
                            <span class="visually-hidden">Loading...</span>
                        </div>


                        <h3 class="card-title ">Login</h3>
                        <form action="{{ route('postLogin') }}" method="POST"
                            class="fade animate__animated animate__fadeIn">



                            @csrf
                            <div class="form-group mt-4">
                                <label class="text-secondary">Email Anda</label>
                                <input type="email" class="form-control border border-secondary form-control-lg"
                                    name="email">
                            </div>
                            <div class="form-group mt-1">
                                <label class="text-secondary">Password Anda</label>
                                <input type="password" class="form-control border border-secondary form-control-lg"
                                    name="password">
                            </div>
                            <button type="submit" class=" form-control btn btn-primary mt-5">Login</button>
                        </form>
                        <p class="mt-2 text-center">Belum punya akun?
                            <a href="{{ route('auth.register') }}" style="text-decoration: none">
                                Ayo buat akun!
                            </a>
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
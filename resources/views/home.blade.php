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

<body>
    <!-- ======= Top Bar ======= -->
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
                    <li><a class="nav-link " href="#">Home</a></li>
                    <li><a class="nav-link " href="#about">About</a></li>

                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>
            <!-- .navbar -->

            <a href="{{route('auth.login')}}" class="appointment-btn scrollto"><span
                    class="d-none d-md-inline">Login</span></a>
            <a href="{{route('auth.register')}}" class="appointment-btn scrollto"><span
                    class="d-none d-md-inline">Daftar</span></a>

        </div>
    </header>
    <!-- End Header --><br><br>

    <!-- ======= Hero Section ======= -->
    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1>Welcome to DOMA </h1>
            <h2>Dokter Matamu Kapanpun, Di Manapun</h2>
            <a href="{{route('auth.login')}}" class="btn-get-started scrollto">Yuk Konsultasi</a>
        </div>
    </section>
    <!-- End Hero -->

    <main id="main">

        <!-- ======= Why Us Section ======= -->
        <section id="why-us" class="why-us">
            <div class="container">

                <div class="row">
                    <div class="col-lg-4 d-flex align-items-stretch">

                    </div>
                    <div class="col-lg-8 d-flex align-items-stretch">
                        <div class="icon-boxes d-flex flex-column justify-content-center">

                        </div>
                        <!-- End .content-->
                    </div>
                </div>

            </div>
        </section><br><br><br><br><br><br><br><br><br><br>
        <!-- End Why Us Section -->

        <!-- ======= About Section ======= -->
        <section id="about" class="about">
            <div class="container-fluid">

                <div class="row">
                    <div
                        class="col-xl-5 col-lg-6 video-box d-flex justify-content-center align-items-stretch position-relative">
                        <img src="{{ asset('asset/images/9.jpg') }}"
                            style="width: 100%; height: auto; border-radius: 10px; object-fit: cover;" alt="Login Image"
                            class="login-image">
                    </div>


                    <div
                        class="col-xl-7 col-lg-6 icon-boxes d-flex flex-column align-items-stretch justify-content-center py-5 px-lg-5">
                        <h3>APA ITU DOMA?</h3>
                        <p>DOMA (Dokter Mata) adalah website sistem pakar diagnosa penyakit mata yang memberikan solusi
                            cerdas untuk
                            kesehatan mata Anda. DOMA memanfaatkan kecanggihan teknologi untuk memberikan akses mudah
                            kepada informasi dan layanan kesehatan mata berkualitas, kapanpun dan dimanapun Anda berada.
                        </p>

                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{ asset ('asset/images/6.png') }}" alt="Icon Description" />
                            </div>
                            <h4 class="title"><a href="">Diagnosa Cepat dan Akurat</a></h4>
                            <p class="description">DOMA membantu Anda mendiagnosis penyakit mata secara cepat dan akurat
                                dengan menggunakan sistem pakar yang canggih.</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{ asset ('asset/images/7.png') }}" alt="Icon Description" />
                            </div>
                            <h4 class="title"><a href="">Informasi Lengkap dan Terpercaya</a></h4>
                            <p class="description">DOMA menyediakan informasi lengkap
                                dan terpercaya tentang berbagai penyakit mata, tips menjaga kesehatan mata, dan pilihan
                                pengobatan yang tersedia.</p>
                        </div>

                        <div class="icon-box">
                            <div class="icon">
                                <img src="{{ asset ('asset/images/8.png') }}" alt="Icon Description" />
                            </div>
                            <h4 class="title"><a href="">Konsultasi Mudah dan Nyaman</a></h4>
                            <p class="description">DOMA memungkinkan Anda untuk
                                berkonsultasi dengan dokter mata secara online dengan mudah dan nyaman, tanpa harus
                                keluar rumah.</p>
                        </div>

                    </div>
                </div>

            </div>
        </section>
        <!-- End About Section -->

        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bund
 le.min.js"></script>
</body>

</html>
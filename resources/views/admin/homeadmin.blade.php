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
    </div><br><br><br>

    <section id="hero" class="d-flex align-items-center">
        <div class="container">
            <h1 class="text-secondary">Selamat Datang {{
                    Auth::user()->name }}</h1>
            <h2>Sehat selaluu</h2>

        </div>
    </section>



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

                <a href="{{route('logout')}}" class="appointment-btn scrollto"><span class="d-none d-md-inline">Log
                        Out</span></a>
            </div>
        </div>
    </header><br><br><br><br><br><br><br>


    <!-- Content Section -->

    <!-- End About Section -->

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bund
 le.min.js"></script>
    <!-- End Content Section -->


    <link rel="stylesheet" href="../assets/js/jquery-3.7.0.min.js">
    <link rel="stylesheet" href="../assets/js/bootstrap.min.js">
</body>

</html>
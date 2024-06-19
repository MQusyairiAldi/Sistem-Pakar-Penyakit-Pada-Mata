<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrapicons@1.10.5/font/bootstrap-icons.css">

    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/4.1.1/animate.min.css" />

    <style>
    .btn-custom {
        color: #1977CC;
        border-color: #1977CC;
    }

    .btn-custom:hover {
        color: #ffffff;
        background-color: #1977CC;
        border-color: #1977CC;
    }

    body {
        background: #f4f4f4;
    }

    .banner {
        background: #1e3c72;
        background: -webkit-linear-gradient(to right, #1e3c72, #2a5298, #3a7bd5);
        background: linear-gradient(to right, #1e3c72, #2a5298, #3a7bd5);
    }

    .custom-banner {
        position: relative;
        background: linear-gradient(rgba(25, 119, 204, 0.7), rgba(25, 119, 204, 0.7)),
            url("../asset/images/11.png") no-repeat center center;
        background-size: cover;
        border-radius: 15px;
        /* Mengubah ujung menjadi tumpul */
    }

    .custom-banner h1,
    .custom-banner p {
        position: relative;
        z-index: 1;
    }

    .custom-banner::before {
        content: "";
        position: absolute;
        top: 0;
        left: 0;
        right: 0;
        bottom: 0;
        background: linear-gradient(rgba(25, 119, 204, 0.7), rgba(25, 119, 204, 0.7));
        border-radius: 15px;
    }
    </style>
</head>


<body>

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
        <div class="container-fluid">
            <div class="px-lg-5">

                <!-- For demo purpose -->
                <div class="row py-5">
                    <div class="col-lg-12 mx-auto">
                        <div class="text-white p-5 shadow-sm rounded banner custom-banner">
                            <h1 class="display-4" style="font-weight: bold;">Penyakit Mata</h1>

                            <p class="lead">Yuk Simak</p><br><br>
                            <p class="lead">Informasi Mengenai Penyakit Mata</p>
                        </div>
                    </div>
                </div>

                <!-- End -->

                <div class="row">
                    <!-- Gallery item -->
                    <div class="col-md-4 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="{{ asset ('asset/images/katarak.png') }}"
                                alt="" class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">KATARAK</a></h5>
                                <p class="small text-muted mb-0">

                                    Katarak adalah kondisi di mana lensa mata menjadi keruh, mengaburkan penglihatan.
                                </p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><button type="button"
                                            class="btn btn-outline-primary btn-custom" data-mdb-ripple-init
                                            data-mdb-ripple-color="dark">Selengkapnya</button>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-md-4 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="{{ asset ('asset/images/ablasio.png') }}"
                                alt="" class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">ABLASIO</a></h5>
                                <p class="small text-muted mb-0">
                                    Ablasio retina terjadi ketika lapisan retina terlepas dari lapisan di belakangnya.
                                </p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><button type="button"
                                            class="btn btn-outline-primary btn-custom" data-mdb-ripple-init
                                            data-mdb-ripple-color="dark">Selengkapnya</button>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-md-4 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="{{ asset ('asset/images/astigmatisme.png') }}"
                                alt="" class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">ASTIGMATISME</a></h5>
                                <p class="small text-muted mb-0">
                                    Astigmatisme adalah kelainan bentuk mata yang menyebabkan penglihatan kabur atau
                                    buram.
                                </p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><button type="button"
                                            class="btn btn-outline-primary btn-custom" data-mdb-ripple-init
                                            data-mdb-ripple-color="dark">Selengkapnya</button>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-md-4 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="{{ asset ('asset/images/glaukoma.png') }}"
                                alt="" class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">GLAUKOMA</a></h5>
                                <p class="small text-muted mb-0">

                                    Glaukoma adalah kondisi di mana tekanan dalam mata meningkat, merusak saraf optik.
                                </p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><button type="button"
                                            class="btn btn-outline-primary btn-custom" data-mdb-ripple-init
                                            data-mdb-ripple-color="dark">Selengkapnya</button>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-md-4 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="{{ asset ('asset/images/bufthalmus.png') }}"
                                alt="" class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">BUFTHALMUS</a></h5>
                                <p class="small text-muted mb-0">

                                    Bufthalmus adalah kondisi di mana bola mata membesar secara tidak proporsional.
                                </p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><button type="button"
                                            class="btn btn-outline-primary btn-custom" data-mdb-ripple-init
                                            data-mdb-ripple-color="dark">Selengkapnya</button>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-md-4 mb-4">
                        <div class="bg-white rounded shadow-sm"><img
                                src="{{ asset ('asset/images/konjungtivitis.png') }}" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">KONJUNGTIVITIS</a></h5>
                                <p class="small text-muted mb-0">

                                    Juga dikenal sebagai "mata merah," konjungtivitis adalah peradangan pada membran
                                    yang melapisi bola mata dan kelopak.
                                </p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><button type="button"
                                            class="btn btn-outline-primary btn-custom" data-mdb-ripple-init
                                            data-mdb-ripple-color="dark">Selengkapnya</button>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-md-4 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="{{ asset ('asset/images/pterygium.png') }}"
                                alt="" class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">PTERYGIUM</a></h5>
                                <p class="small text-muted mb-0">

                                    Pterygium adalah pertumbuhan jaringan pada mata yang dapat menyebabkan iritasi dan
                                    gangguan penglihatan.
                                </p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><button type="button"
                                            class="btn btn-outline-primary btn-custom" data-mdb-ripple-init
                                            data-mdb-ripple-color="dark">Selengkapnya</button>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-md-4 mb-4">
                        <div class="bg-white rounded shadow-sm"><img src="{{ asset ('asset/images/blefaritis.png') }}"
                                alt="" class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">BLEFARITIS</a></h5>
                                <p class="small text-muted mb-0">

                                    Blefaritis adalah peradangan pada kelopak mata, sering disebabkan oleh infeksi
                                    bakteri.
                                </p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><button type="button"
                                            class="btn btn-outline-primary btn-custom" data-mdb-ripple-init
                                            data-mdb-ripple-color="dark">Selengkapnya</button>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->

                    <!-- Gallery item -->
                    <div class="col-md-4 mb-4">
                        <div class="bg-white rounded shadow-sm"><img
                                src="{{ asset ('asset/images/dakriosistitis.png') }}" alt=""
                                class="img-fluid card-img-top">
                            <div class="p-4">
                                <h5> <a href="#" class="text-dark">DAKRIOSISTITIS</a></h5>
                                <p class="small text-muted mb-0">

                                    Dakriosistitis adalah infeksi pada saluran air mata yang dapat menyebabkan mata
                                    berair atau bernanah.
                                </p>
                                <div
                                    class="d-flex align-items-center justify-content-between rounded-pill bg-light px-3 py-2 mt-4">
                                    <p class="small mb-0"><i class="fa fa-picture-o mr-2"></i><button type="button"
                                            class="btn btn-outline-primary btn-custom" data-mdb-ripple-init
                                            data-mdb-ripple-color="dark">Selengkapnya</button>
                                    </p>

                                </div>
                            </div>
                        </div>
                    </div>
                    <!-- End -->
                </div>
            </div>
        </div>


        <!-- Gallery item -->

        <!-- End -->

    </div>

    </div>
    </div>
</body>

</html>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MM Tailor</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <link href="landing/img/logo3.png" rel="icon">
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <link href="landing/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="landing/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="landing/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <link href="landing/css/style.css" rel="stylesheet">

</head>

<body>
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{ url('/') }}"><img src="landing/img/logo3.png"
                        style="width: 70px; height: 60px;"></a></h1>
            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#pegawai"><span>Pegawai</span></i></a>
                    </li>
                    <li><a href="#lokasi">Lokasi</a></li>
                    <li><a href="{{ url('/login') }}" class="getstarted">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav>

        </div>
    </header>

    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">
                <div class="carousel-item active" style="background-image: url(landing/img/slide/hero.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>MM Tailor</span></h2>
                            <a href="{{ url('/login') }}"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(landing/img/slide/hero2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>MM Tailor</span></h2>
                            <a href="{{ url('/login') }}"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>
                <div class="carousel-item" style="background-image: url(landing/img/slide/hero3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>MM Tailor</span></h2>
                            <a href="{{ url('/login') }}"
                                class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>
            </div>
            <a class="carousel-control-prev" href="#heroCarousel" role="button" data-bs-slide="prev">
                <span class="carousel-control-prev-icon bi bi-chevron-left" aria-hidden="true"></span>
            </a>
            <a class="carousel-control-next" href="#heroCarousel" role="button" data-bs-slide="next">
                <span class="carousel-control-next-icon bi bi-chevron-right" aria-hidden="true"></span>
            </a>
        </div>
    </section>

    <main id="main">
        <section id="stats" class="stats section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="stats-item text-center">
                            <i class="bi bi-people"></i>
                            <span class="purecounter" data-purecounter-start="0" data-purecounter-end="15"
                                data-purecounter-duration="0">{{ $totalpegawai }}</span>
                            <p>Total Pegawai</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="stats-item text-center">
                            <i class="bi bi-person"></i>
                            <span class="purecounter" data-purecounter-start="0" data-purecounter-end="232"
                                data-purecounter-duration="0">{{ $totalpegawaiL }}</span>
                            <p>Pegawai Laki-Laki</p>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="stats-item text-center">
                            <i class="bi bi-person"></i>
                            <span class="purecounter" data-purecounter-start="0" data-purecounter-end="521"
                                data-purecounter-duration="0">{{ $totalpegawaiP }}</span>
                            <p>Pegawai Perempuan</p>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section id="pegawai" class="team section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Pegawai</h2>
                </div>

                <div class="row">
                    @foreach ($pegawai as $p)
                        @php
                            $jabatanPegawai = $jabatan->firstWhere('id', $p->jabatan_id);
                            $divisi = $divisi->firstWhere('id', $p->divisi_id);
                        @endphp
                        <div class="col-lg-6 mt-4">
                            <div class="member d-flex align-items-start">
                                <div class="pic">
                                    <img src="{{ asset($p->foto) }}" class="img-fluid">
                                </div>
                                <div class="member-info">
                                    <h4>{{ $p->nama_pegawai }}</h4>
                                    <span>{{ $jabatanPegawai->jabatan }}</span>
                                    <p>{{ $divisi->divisi }}</p>
                                    <div class="social">
                                        <a href="#"><i class="ri-twitter-fill"></i></a>
                                        <a href="#"><i class="ri-facebook-fill"></i></a>
                                        <a href="#"><i class="ri-instagram-fill"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </section>
    </main>

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <script src="landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="landing/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="landing/vendor/waypoints/noframework.waypoints.js"></script>

    <script src="landing/js/main.js"></script>
</body>

</html>

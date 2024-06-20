<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">

    <title>MM's Tailor</title>
    <meta content="" name="description">
    <meta content="" name="keywords">
    <!-- Favicons -->
    <link href="landing/img/logo3.png" rel="icon">
    <link href="landing/img/apple-touch-icon.png" rel="apple-touch-icon">

    <!-- Google Fonts -->
    <link
        href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,600,600i,700,700i|Raleway:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i"
        rel="stylesheet">

    <!-- Vendor CSS Files -->
    <link href="landing/vendor/animate.css/animate.min.css" rel="stylesheet">
    <link href="landing/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
    <link href="landing/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
    <link href="landing/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
    <link href="landing/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
    <link href="landing/vendor/remixicon/remixicon.css" rel="stylesheet">
    <link href="landing/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">

    <!-- Template Main CSS File -->
    <link href="landing/css/style.css" rel="stylesheet">

    <link rel="stylesheet" href="https://unpkg.com/leaflet/dist/leaflet.css" />
    <style>
        #map {
            height: 400px;
        }
    </style>
</head>

<body>
    <!-- ======= Header ======= -->
    <header id="header" class="fixed-top d-flex align-items-center">
        <div class="container d-flex align-items-center">

            <h1 class="logo me-auto"><a href="{{ url('/') }}"><img src="landing/img/logo3.png"
                        style="width: 70px; height: 60px;"></a></h1>
            <!-- Uncomment below if you prefer to use an image logo -->
            <!-- <a href="index.html" class="logo me-auto"><img src="landing/img/logo.png" alt="" class="img-fluid"></a>-->

            <nav id="navbar" class="navbar">
                <ul>
                    <li><a href="#hero" class="active">Home</a></li>
                    <li><a href="#pegawai"><span>Pegawai</span></i></a>
                    </li>
                    <li><a href="#lokasi">Lokasi</a></li>
                    <li><a href="{{ url('/login') }}" class="getstarted">Login</a></li>
                </ul>
                <i class="bi bi-list mobile-nav-toggle"></i>
            </nav><!-- .navbar -->

        </div>
    </header><!-- End Header -->

    <!-- ======= Hero Section ======= -->
    <section id="hero">
        <div id="heroCarousel" data-bs-interval="5000" class="carousel slide carousel-fade" data-bs-ride="carousel">

            <ol class="carousel-indicators" id="hero-carousel-indicators"></ol>

            <div class="carousel-inner" role="listbox">

                <!-- Slide 1 -->
                <div class="carousel-item active" style="background-image: url(landing/img/slide/slide-1.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>MM's Tailor</span></h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 2 -->
                <div class="carousel-item" style="background-image: url(landing/img/slide/slide-2.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>MM's Tailor</span></h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
                                More</a>
                        </div>
                    </div>
                </div>

                <!-- Slide 3 -->
                <div class="carousel-item" style="background-image: url(landing/img/slide/slide-3.jpg)">
                    <div class="carousel-container">
                        <div class="container">
                            <h2 class="animate__animated animate__fadeInDown">Welcome to <span>MM's Tailor</span></h2>
                            <p class="animate__animated animate__fadeInUp">Ut velit est quam dolor ad a aliquid qui
                                aliquid. Sequi ea ut et est quaerat sequi nihil ut aliquam. Occaecati alias dolorem
                                mollitia ut. Similique ea voluptatem. Esse doloremque accusamus repellendus deleniti
                                vel. Minus et tempore modi architecto.</p>
                            <a href="#about" class="btn-get-started animate__animated animate__fadeInUp scrollto">Read
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
    </section><!-- End Hero -->

    <main id="main">
        <section id="stats" class="stats section">
            <div class="container">
                <div class="row gy-4">
                    <div class="col-lg-4 col-md-6">
                        <div class="stats-item text-center">
                            <i class="bi bi-person"></i>
                            <span class="purecounter" data-purecounter-start="0" data-purecounter-end="232"
                                data-purecounter-duration="0">232</span>
                            <p>Klien</p>
                        </div><!-- End Stats Item -->
                    </div>
                    <div class="col-lg-4 col-md-6">
                        <div class="stats-item text-center">
                            <i class="bi bi-journal-richtext"></i>
                            <span class="purecounter" data-purecounter-start="0" data-purecounter-end="521"
                                data-purecounter-duration="0">521</span>
                            <p>Projek</p>
                        </div><!-- End Stats Item -->
                    </div>

                    <div class="col-lg-4 col-md-6">
                        <div class="stats-item text-center">
                            <i class="bi bi-people"></i>
                            <span class="purecounter" data-purecounter-start="0" data-purecounter-end="15"
                                data-purecounter-duration="0">15</span>
                            <p>Pegawai</p>
                        </div><!-- End Stats Item -->
                    </div>
                </div>
            </div>
        </section>

        {{-- Team --}}
        <section id="pegawai" class="team section-bg">
            <div class="container">

                <div class="section-title">
                    <h2>Pegawai</h2>
                </div>

                <div class="row">

                    <div class="col-lg-6">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="landing/img/team/team-1.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Walter White</h4>
                                <span>Chief Executive Officer</span>
                                <p>Explicabo voluptatem mollitia et repellat</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4 mt-lg-0">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="landing/img/team/team-2.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Sarah Jhonson</h4>
                                <span>Product Manager</span>
                                <p>Aut maiores voluptates amet et quis</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="landing/img/team/team-3.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>William Anderson</h4>
                                <span>CTO</span>
                                <p>Quisquam facilis cum velit laborum corrupti</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                    <div class="col-lg-6 mt-4">
                        <div class="member d-flex align-items-start">
                            <div class="pic"><img src="landing/img/team/team-4.jpg" class="img-fluid"
                                    alt=""></div>
                            <div class="member-info">
                                <h4>Amanda Jepson</h4>
                                <span>Accountant</span>
                                <p>Dolorum tempora officiis odit laborum officiis</p>
                                <div class="social">
                                    <a href=""><i class="ri-twitter-fill"></i></a>
                                    <a href=""><i class="ri-facebook-fill"></i></a>
                                    <a href=""><i class="ri-instagram-fill"></i></a>
                                    <a href=""> <i class="ri-linkedin-box-fill"></i> </a>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

            </div>
        </section><!-- End Team Section -->

        <section id="lokasi" class="contact">
            <div class="container">
                <div class="section-title">
                    <h2>Lokasi</h2>
                    <p>Temukan Lokasi kami</p>
                </div>
                <div class="row">
                    <div class="col-lg-12">
                        <div id="map"></div>
                    </div>
                </div>
            </div>
        </section><!-- End Contact Section -->

    </main><!-- End #main -->

    <!-- ======= Footer ======= -->
    <footer id="footer">
        <div class="container">
            <div class="copyright">
                &copy; Copyright <strong><span>Sailor</span></strong>. All Rights Reserved
            </div>
            <div class="credits">
                <!-- All the links in the footer should remain intact. -->
                <!-- You can delete the links only if you purchased the pro version. -->
                <!-- Licensing information: https://bootstrapmade.com/license/ -->
                <!-- Purchase the pro version with working PHP/AJAX contact form: https://bootstrapmade.com/sailor-free-bootstrap-theme/ -->
                Designed by <a href="https://bootstrapmade.com/">BootstrapMade</a>
            </div>
        </div>
    </footer><!-- End Footer -->

    <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i
            class="bi bi-arrow-up-short"></i></a>

    <!-- Vendor JS Files -->
    <script src="landing/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
    <script src="landing/vendor/glightbox/js/glightbox.min.js"></script>
    <script src="landing/vendor/isotope-layout/isotope.pkgd.min.js"></script>
    <script src="landing/vendor/swiper/swiper-bundle.min.js"></script>
    <script src="landing/vendor/waypoints/noframework.waypoints.js"></script>
    <script src="landing/vendor/php-email-form/validate.js"></script>

    <!-- Template Main JS File -->
    <script src="landing/js/main.js"></script>

    <script src="https://unpkg.com/leaflet/dist/leaflet.js"></script>
    <script>
        var map = L.map('map').setView([-6.9482, 112.8349], 13);

        L.tileLayer('https://{s}.tile.openstreetmap.org/{z}/{x}/{y}.png', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/copyright">OpenStreetMap</a> contributors'
        }).addTo(map);

        // Tambahkan marker untuk koordinat baru
        L.marker([-6.9482, 112.8349]).addTo(map)
            .bindPopup('MM`s Tailor') // Sesuaikan dengan teks atau informasi yang ingin ditampilkan
        .bindTooltip('MM`s Tailor', {
                permanent: true,
                direction: 'top'
            }); // Tambahkan tooltip untuk marker baru
    </script>

</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Diskriminasi-PNUP</title>
    <link rel="shortcut icon" href="{{ 'main/images/logo-pnup.png' }}" type="image/png">
    <link rel="stylesheet" href="{{ asset('main/css/slick.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/nice-select.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/jquery.nice-number.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/default.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/style.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/responsive.css') }}">
    <link rel="stylesheet" href="{{ asset('main/css/floting.css') }}">

</head>
<style>
    .yellowtext {
        color: #ffc600;
    }
</style>

<body>
    <a href="Pengaduan.html" target="_blank">
        <button class="btn-floating cs">
            <img src="{{ 'main/images/customer-service (1).png' }}" alt="CS">
            <span><strong>Form Pengaduan!</strong></span>
        </button>
    </a>
    <div class="preloader">
        <div class="loader rubix-cube">
            <div class="layer layer-1"></div>
            <div class="layer layer-2"></div>
            <div class="layer layer-3 color-1"></div>
            <div class="layer layer-4"></div>
            <div class="layer layer-5"></div>
            <div class="layer layer-6"></div>
            <div class="layer layer-7"></div>
            <div class="layer layer-8"></div>
        </div>
    </div>

    <header id="header-part">

        <div class="header-top d-none d-lg-block">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6">
                        <div class="header-contact text-lg-left text-center">
                            <ul>
                                <li><img src="{{ asset('main/images/all-icon/map.png') }}" alt="icon"><span>Jalan
                                        Perintis Kemerdekaan KM.10 Tamalanrea , Makassar
                                    </span></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-lg-6">
                        <div class="header-opening-time text-lg-right text-center">
                            <p>Kode Pos: 90245</p>
                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- header top -->

        <div class="header-logo-support pt-30 pb-30">
            <div class="container">
                <div class="row">
                    <div class="col-lg-1">
                        <div class="logo">
                            <a href="index-2.html">
                                <img src="{{ asset('main/images/logo-pnup.png') }}" alt="Logo" height="80"
                                    width="80">
                            </a>
                        </div>
                    </div>
                    <div class="col-lg-8 col-md-1">
                        <div class="support float-left">
                            <div class="cont">
                                <h3 class="yellowtext">SISTEM PENGADUAN</h3>
                                <h3>POLITEKNIK NEGERI UJUNG PANDANG</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1">
                        <div class="support-button float-left d-none d-md-block">
                            <div class="support float-left">
                                <div class="icon">
                                    <img src="{{ asset('main/images/all-icon/support.png') }}" alt="icon">
                                    <p>+62(411)585365</p>
                                </div>
                                <div class="button">
                                    <a href="#" class="main-btn">Get Started</a>
                                </div>

                            </div>
                        </div>
                    </div>
                </div> <!-- row -->

            </div>
        </div>

        </div> <!-- row -->
        </div> <!-- container -->
        </div> <!-- header logo support -->

        <div class="navigation">
            <div class="container">
                <div class="row">
                    <div class="col-lg-10 col-md-10 col-sm-9 col-8">
                        <nav class="navbar navbar-expand-lg">
                            <button class="navbar-toggler" type="button" data-toggle="collapse"
                                data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent"
                                aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a href="/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#about-part">Informasi</a>
                                        <ul class="sub-menu">
                                            <li><a href="/korupsi">Korupsi</a></li>
                                            <li><a href="/kekerasan">Kekerasan Seksual</a></li>
                                            <li><a href="/bullying">Bullying</a></li>
                                            <li><a href="/pembatasankebebasan" class="active">Pembatasan Kebebasan</a>
                                            </li>
                                            <li><a href="/diskriminasi.html">Diskriminasi</a></li>
                                        </ul>
                                    </li>
                                    <li class="nav-item">
                                        <a href="tentangkami.html">Tentang Kami</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="Pengaduan.html">Pengaduan</a>
                                    </li>
                                </ul>
                            </div>
                        </nav> <!-- nav -->
                    </div>
                    <div class="col-lg-2 col-md-2 col-sm-3 col-4">
                        <div class="right-icon text-right">
                            <ul>
                                <li><a href="#" id="search"><i class="fa fa-search"></i></a></li>
                            </ul>
                        </div> <!-- right icon -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div>

    </header>

    <div class="search-box">
        <div class="serach-form">
            <div class="closebtn">
                <span></span>
                <span></span>
            </div>
            <form action="#">
                <input type="text" placeholder="Search by keyword">
                <button><i class="fa fa-search"></i></button>
            </form>
        </div> <!-- serach form -->
    </div>

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8"
        style="background-image: url({{ asset('main/images/slide1.PNG') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>DISKRIMINASI</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                                <li class="breadcrumb-item active" aria-current="page">DISKRIMINASI</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->
    <section id="about-page" class="pt-70 pb-110">
        <div class="container">
            <div class="row">
                <div class="col-lg-5">
                    <div class="teachers-left mt-50" style="padding-top:0%;">
                        <div class="hero">
                            <img src="/images/diskriminasi.jpg" alt="Teachers">
                        </div>
                        <div class="name">
                            <h6>DISKRIMINASI</h6>
                            <span>Menurut KBBI</span>
                        </div>
                        <div class="description">
                            <p>"Pembedaan perlakuan terhadap sesama warga negara (berdasarkan warna kulit, golongan,
                                suku, ekonomi, agama, dan sebagainya). Selanjutnya, jika mengacu pada Oxford Learner's
                                Dictionaries, maka pengertian dari diskriminasi adalah mengenali adanya perbedaan antara
                                orang-orang atau hal-hal"</p>
                        </div>
                        <!-- teachers left -->
                    </div>
                </div> <!-- about cont -->
                <div class="col-lg-7" style="padding-top: 100px;">
                    <div class="section-title mt-50">
                        <h5>DISKRIMINASI</h5>
                        <h2>Dimata Hukum </h2><br>
                    </div> <!-- section title -->
                    <div class="about-cont">
                        <h6><strong>UU NO 12 TAHUN 2012 PASAL 6 B</strong></h6>
                        <span>Penyelenggaraan Pendidikan Tinggi</span>
                        <p style="padding-top: 0px;">"Demokratis dan berkeadilan serta tidak diskriminatif dengan
                            menjunjung tinggi hak asasi manusia, nilai agama, nilai budaya, kemajemukan, persatuan, dan
                            kesatuan bangsa"</p><br>
                    </div>
                    <div class="about-cont">
                        <h6><strong>UU NO 12 TAHUN 2012 PASAL 6 A</strong></h6><br>
                        <span>Penyelenggaraan Pendidikan Tinggi</span>
                        <p style="padding-top: 0px;">"mencari kebenaran Ilmiah, demokratis dan berkeadilan serta tidak
                            diskriminatif dengan menjunjung tinggi sebuah hak asasi manusia, nilai agama, nilai budaya,
                            kemajemukan, persatuan, dan serta kesatuan bangsa"</p>
                    </div>
                </div>
            </div> <!-- row -->
            <div class="about-items pt-60">
                <h3>Kasus Diskriminasi Umum Di Kampus</h3>
                <div class="row justify-content-center">
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>01</span>
                            <h4>Ras atau Etnis</h4>
                            <p>Diskriminasi berdasarkan ras atau etnis terjadi ketika seseorang diperlakukan secara
                                tidak adil atau diabaikan berdasarkan ras atau latar belakang etnis mereka. Hal ini
                                dapat mencakup perlakuan yang merendahkan, stereotip negatif, pengucilan, atau
                                penghalangan akses terhadap kesempatan pendidikan atau kegiatan kampus.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>02</span>
                            <h4>Agama</h4>
                            <p>Diskriminasi berdasarkan agama terjadi ketika seseorang menghadapi perlakuan yang tidak
                                adil berdasarkan keyakinan atau praktik keagamaan mereka. Ini bisa termasuk intimidasi,
                                pelecehan verbal, penolakan akses ke fasilitas atau acara kampus, atau penilaian yang
                                tidak adil.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>03</span>
                            <h4>Gender</h4>
                            <p>Deskriminasi berdasarkan gender terjadi ketika seseorang diperlakukan secara tidak adil
                                berdasarkan jenis kelamin mereka. ini biasa meliputi pelecehan seksual, diskriminasi
                                dalam rekrutmen atau promosi, dan pengucilan sosial</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>04</span>
                            <h4>Disabilitas</h4>
                            <p>Diskriminasi berdasarkan disabilitas terjadi ketika seseorang diabaikan atau diperlakukan
                                secara tidak adil berdasarkan kondisi fisik, mental, atau sensorik mereka. Ini bisa
                                termasuk kurangnya aksesibilitas fisik, penolakan akomodasi yang diperlukan, atau
                                perlakuan yang merendahkan.</p>
                        </div> <!-- about singel -->
                    </div>
                    <div class="col-lg-4 col-md-6 col-sm-10">
                        <div class="about-singel-items mt-30">
                            <span>05</span>
                            <h4>Sosial Ekonomi</h4>
                            <p>Diskriminasi berdasarkan status sosial ekonomi terjadi ketika seseorang diperlakukan
                                secara tidak adil berdasarkan latar belakang ekonomi atau status sosial mereka. Ini bisa
                                termasuk perlakuan yang merendahkan, stereotip negatif, atau pembatasan akses terhadap
                                kesempatan akademik atau ekstrakurikuler.</p>
                        </div> <!-- about singel -->
                    </div>
                </div> <!-- row -->
            </div> <!-- about items -->
        </div> <!-- container -->
    </section>

    <!--====== BLOG PART START ======-->

    <!-- disini isi itemnya yah bosku -->




    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="#"><img src="{{ asset('main/images/logo-pnup.png') }}" alt="Logo"
                                        height="200" width="200"></a>
                            </div>
                            <ul class="mt-20">
                                <li><a href="https://www.facebook.com/9171dukcapilkotajayapura"><i
                                            class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/dispendukcapil?lang=en"><i
                                            class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCXTp3P4Nd3SIzfuUHV0jzfw"><i
                                            class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/?hl=id"><i class="fa fa-instagram"></i></a>
                                </li>
                            </ul>
                        </div> <!-- footer about -->
                    </div>
                    <div class="col-lg-3 col-md-6 col-sm-6">
                        <div class="footer-link mt-40">
                            <div class="footer-title pb-25">
                                <h6>Pengaduan</h6>
                            </div>
                            <ul>
                                <li><a href="/"><i class="fa fa-angle-right"></i>Home</a></li>
                                <li><a href="/korupsi"><i class="fa fa-angle-right"></i>Informasi</a></li>
                                <li><a href="tentangkami.html"><i class="fa fa-angle-right"></i>Tentang Kami</a></li>
                            </ul>
                        </div> <!-- footer link -->
                    </div>
                    <div class="col-lg-3 col-md-6">
                        <div class="footer-address mt-40">
                            <div class="footer-title pb-25">
                                <h6>Alamat</h6>
                            </div>
                            <ul>
                                <iframe
                                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31790.70104477153!2d119.4436746743164!3d-5.129840899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcca2887e13f%3A0xf5c059de86dd07!2sPNUP%20Politeknik%20Negeri%20Ujung%20Pandang!5e0!3m2!1sid!2sid!4v1686879077808!5m2!1sid!2sid"
                                    width="400" height="250" style="border:0;" allowfullscreen=""
                                    loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                            </ul>
                        </div> <!-- footer address -->
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer top -->

        <div class="footer-copyright pt-10 pb-25">
            <div class="container">
                <div class="row">
                    <div class="col-md-8">
                        <div class="copyright text-md-left text-center pt-15">
                            <p><a target="_blank" href="https://www.templateshub.net">Copyright © 2023 | Kelompok 2
                                    Pancasila</a> </p>
                        </div>
                    </div>
                    <div class="col-md-4">
                        <div class="copyright text-md-right text-center pt-15">

                        </div>
                    </div>
                </div> <!-- row -->
            </div> <!-- container -->
        </div> <!-- footer copyright -->
    </footer>


    <!--====== jquery js ======-->
    <script src="{{ asset('main/js/vendor/modernizr-3.6.0.min.js') }}"></script>
    <script src="{{ asset('main/js/vendor/jquery-1.12.4.min.js') }}"></script>

    <!--====== Bootstrap js ======-->
    <script src="{{ asset('main/js/bootstrap.min.js') }}"></script>

    <!--====== Slick js ======-->
    <script src="{{ asset('main/js/slick.min.js') }}"></script>

    <!--====== Magnific Popup js ======-->
    <script src="{{ asset('main/js/jquery.magnific-popup.min.js') }}"></script>

    <!--====== Counter Up js ======-->
    <script src="{{ asset('main/js/waypoints.min.js') }}"></script>
    <script src="{{ asset('main/js/jquery.counterup.min.js') }}"></script>

    <!--====== Nice Select js ======-->
    <script src="{{ asset('main/js/jquery.nice-select.min.js') }}"></script>

    <!--====== Nice Number js ======-->
    <script src="{{ asset('main/js/jquery.nice-number.min.js') }}"></script>

    <!--====== Count Down js ======-->
    <script src="{{ asset('main/js/jquery.countdown.min.js') }}"></script>

    <!--====== Validator js ======-->
    <script src="{{ asset('main/js/validator.min.js') }}"></script>

    <!--====== Ajax Contact js ======-->
    <script src="{{ asset('main/js/ajax-contact.js') }}"></script>

    <!--====== Main js ======-->
    <script src="{{ asset('main/js/main.js') }}"></script>

    <!--====== Map js ======-->
    <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyDC3Ip9iVC0nIxC6V14CKLQ1HZNF_65qEQ"></script>
    <script src="{{ asset('main/js/map-script.js') }}"></script>

</body>

</html>

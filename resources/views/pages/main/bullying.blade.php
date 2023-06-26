<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bullying-PNUP</title>
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
                                            <li><a href="/kekerasan" >Kekerasan Seksual</a></li>
                                            <li><a href="/bullying" class="active">Bullying</a></li>
                                            <li><a href="/pembatasankebebasan">Pembatasan Kebebasan</a></li>
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
                        <h2>BULLYING</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">HOME</a></li>
                                <li class="breadcrumb-item active" aria-current="page">BULLYING</li>
                            </ol>
                        </nav>
                    </div> <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    <!--====== PAGE BANNER PART ENDS ======-->
    <section id="teachers-singel" class="pt-70 pb-120 gray-bg">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-4 col-md-8">
                    <div class="teachers-left mt-50">
                        <div class="hero">
                            <img src="/images/bulliying.jpg" alt="Kekerasan">
                        </div>
                        <div class="name">
                            <h6>Bullying</h6>
                            <span>World Health Organization (WHO) </span>
                        </div>
                        <div class="description">
                            <p style="text-align: center;">"perilaku agresif yang disengaja, yang dilakukan secara
                                berulang kali oleh satu individu atau sekelompok individu terhadap individu lain yang
                                memiliki kekuatan yang lebih rendah atau kesempatan yang lebih kecil untuk membela
                                diri."</p>
                        </div>
                    </div> <!-- teachers left -->
                </div>
                <div class="col-lg-8">
                    <div class="teachers-right mt-50">
                        <ul class="nav nav-justified" id="myTab" role="tablist">
                            <li class="nav-item">
                                <a class="active" id="dashboard-tab" data-toggle="tab" href="#dashboard"
                                    role="tab" aria-controls="dashboard" aria-selected="true">Tentang
                                    Bullying</a>
                            </li>
                            <li class="nav-item">
                                <a id="courses-tab" data-toggle="tab" href="#courses" role="tab"
                                    aria-controls="courses" aria-selected="false">Dampak</a>
                            </li>
                            <li class="nav-item">
                                <a id="reviews-tab" data-toggle="tab" href="#reviews" role="tab"
                                    aria-controls="reviews" aria-selected="false">Dasar Hukum</a>
                            </li>
                        </ul> <!-- nav -->
                        <div class="tab-content" id="myTabContent">
                            <div class="tab-pane fade show active" id="dashboard" role="tabpanel"
                                aria-labelledby="dashboard-tab">
                                <div class="dashboard-cont">
                                    <div class="singel-dashboard pt-40">
                                        <h5>Definisi Bullying</h5>
                                        <p>Bullying (dalam bahasa Indonesia dikenal sebagai “penindasan/risak”)
                                            merupakan segala bentuk penindasan atau kekerasan yang dilakukan dengan
                                            sengaja oleh satu orang atau sekelompok orang yang lebih kuat atau berkuasa
                                            terhadap orang lain, dengan tujuan untuk menyakiti dan dilakukan secara
                                            terus menerus. Terdapat banyak definisi mengenai bullying, terutama yang
                                            terjadi dalamkonteks lain seperti di rumah, tempat kerja, masyarakat,
                                            komunitas virtual</p>
                                    </div> <!-- singel dashboard -->
                                    <div class="singel-dashboard pt-40">
                                        <h5>Kategori</h5>
                                        <ul style="list-style:decimal;">
                                            <li>Kontak fisik langsung. Tindakan memukul, mendorong, menggigit,
                                                menjambak, menendang, mengunci seseorang dalam ruangan, mencubit,
                                                mencakar, juga termasuk memeras dan merusak barang yang dimiliki orang
                                                lain. </li>
                                            <li>Kontak verbal langsung. Tindakan mengancam, mempermalukan, merendahkan,
                                                mengganggu, memberi panggilan nama (name-calling), sarkasme, merendahkan
                                                (put- downs), mencela/mengejek, mengintimidasi, memaki, menyebarkan
                                                gosip. </li>
                                            <li>Perilaku non-verbal langsung. Tindakan melihat dengan sinis, menjulurkan
                                                lidah, menampilkan ekspresi muka yang merendahkan, mengejek, atau
                                                mengancam; biasanya disertai oleh bullying fisik atau verbal.</li>
                                            <li>Perilaku non-verbal tidak langsung. Tindakan mendiamkan seseorang,
                                                memanipulasi persahabatan sehingga menjadi retak, sengaja mengucilkan
                                                atau mengabaikan, mengirimkan surat kaleng. </li>
                                            <li>Cyber Bullying Tindakan menyakiti orang lain dengan sarana media
                                                elektronik (rekaman video intimidasi, pencemaran nama baik lewat media
                                                social) </li>
                                            <li>Pelecehan seksual. Kadang tindakan pelecehan dikategorikan perilaku
                                                agresi fisik atau verbal.</li>
                                        </ul>
                                    </div> <!-- singel dashboard -->
                                    <!-- singel dashboard -->
                                </div> <!-- dashboard cont -->
                            </div>
                            <div class="tab-pane fade" id="courses" role="tabpanel" aria-labelledby="courses-tab">
                                <div class="dashboard-cont">
                                    <div class="singel-dashboard pt-40">
                                        <h5>Dampak</h5>
                                        <h7><strong>Dampak Bagi Korban</strong></h7>
                                        <ul style="list-style: decimal;">
                                            <li>Depresi dan marah </li>
                                            <li>rendahnya tingkat kehadiran dan rendahnya prestasi akademik mahasiswa
                                            </li>
                                            <li>Menurunnya skor tes kecerdasan (IQ) dan kemampuan analisis mahasiswa.
                                            </li>
                                        </ul> <br>
                                        <h7><strong>Dampak Bagi Pelaku</strong></h7>
                                        <p>Pelaku memiliki rasa percaya diri yang tinggi dengan harga diri yang tinggi
                                            pula, cenderung bersifat agresif dengan perilaku yang pro terhadap
                                            kekerasan, tipikal orang berwatak keras, mudah marah dan impulsif, toleransi
                                            yang rendah terhadap frustasi. Memiliki kebutuhan kuat untuk mendominasi
                                            orang lain dan kurang berempati terhadap targetnya. Dengan melakukan
                                            bullying, pelaku akan beranggapan bahwa mereka memiliki kekuasaan terhadap
                                            keadaan. Jika dibiarkan terus menerus tanpa intervensi, perilaku bullying
                                            ini dapat menyebabkan terbentuknya perilaku lain berupa kekerasan terhadap
                                            dan perilaku kriminal lainnya</p><br>

                                    </div> <!-- singel dashboard -->
                                </div> <!-- dashboard cont -->
                            </div>
                            <div class="tab-pane fade" id="reviews" role="tabpanel" aria-labelledby="reviews-tab">
                                <div class="reviews-cont">
                                    <div class="title">
                                        <h6>Dasar-dasar Hukum</h6>
                                    </div>
                                    <ul>
                                        <li>
                                            <div class="singel-reviews">
                                                <div class="reviews-author">
                                                    <div class="author-name">
                                                        <h6>UURI NO 35 Tahun 2014</h6>
                                                        <span>Pasal 76C</span>
                                                    </div>
                                                </div>
                                                <div class="reviews-description pt-20">
                                                    <p>"Setiap Orang dilarang menempatkan, membiarkan,
                                                        melakukan, menyuruh melakukan, atau turut serta
                                                        melakukan Kekerasan terhadap Anak.
                                                        "</p>
                                                </div>
                                            </div> <!-- singel reviews -->
                                        </li>
                                        <li>
                                            <div class="singel-reviews">
                                                <div class="reviews-author">
                                                    <div class="author-name">
                                                        <h6>Pasal 170 KUHP Ayat 1-2</h6>
                                                        <span>Tentang Pengeroyokan</span>
                                                    </div>
                                                </div>
                                                <div class="reviews-description pt-20">
                                                    <UL style="list-style: decimal;">
                                                        <li>"Barang siapa dengan terang-terangan dan dengan tenaga
                                                            bersama menggunakan kekerasan terhadap orang atau barang,
                                                            diancam dengan pidana penjara paling lama lima tahun enam
                                                            bulan. "</li>
                                                        <li>yangber salah diancah
                                                            <ul style="list-style: lower-alpha; padding-left: 15px">
                                                                <li>dengan pidana penjara paling lama tujuh tahun, jika
                                                                    ia dengan sengaja menghancurkan barang atau jika
                                                                    kekerasan yang digunakan mengakibatkan luka-luka;
                                                                </li>
                                                                <li>dengan pidana penjara paling lama sembilan tahun,
                                                                    jika kekerasan mengakibatkan luka berat;</li>
                                                                <li>dengan pidana penjara paling lama dua belas tahun,
                                                                    jika kekerasan mengakibatkan maut. </li>
                                                            </ul>
                                                        </li>
                                                    </UL>
                                                </div>
                                            </div> <!-- singel reviews -->
                                        </li>
                                        <li>
                                            <div class="singel-reviews">
                                                <div class="reviews-author">
                                                    <div class="author-name">
                                                        <h6>Pasal 351 KUHP Ayat 1-5</h6>
                                                        <span>Tindak Penganiyaan</span>
                                                    </div>
                                                </div>
                                                <div class="reviews-description pt-20">
                                                    <UL style="list-style: decimal;">
                                                        <li>Penganiayaan diancam dengan pidana penjara paling lama dua
                                                            tahun delapan bulan atau pidana denda paling banyak empat
                                                            ribu lima ratus rupiah;</li>
                                                        <li>Jika perbuatan mengakibatkan luka-luka berat, yang bersalah
                                                            diancam dengan pidana penjara paling lama lima tahun;</li>
                                                        <li>Jika mengakibatkan mati, diancam dengan pidana penjara
                                                            paling lama tujuh tahun;</li>
                                                        <li>Dengan penganiayaan disamakan sengaja merusak kesehatan;
                                                        </li>
                                                        <li>Percobaan untuk melakukan kejahatan ini tidak dipidana</li>
                                                    </UL>
                                                </div>
                                            </div>
                                        </li>
                                        <li>
                                            <div class="singel-reviews">
                                                <div class="reviews-author">
                                                    <div class="author-name">
                                                        <h6>Pasal 310 KUHP Ayat 1-2</h6>
                                                        <span>Pencemaran Nama Baik</span>
                                                    </div>
                                                </div>
                                                <div class="reviews-description pt-20">
                                                    <UL style="list-style: decimal;">
                                                        <li>Barangsiapa sengaja menyerang kehormatan atau nama baik
                                                            seseorang dengan menuduhkan sesuatu hal, yang maksudnya
                                                            terang supaya hal itu diketahui umum, diancam karena
                                                            pencemaran dengan pidana penjara paling lama sembilan bulan
                                                            atau pidana denda paling banyak empat ribu lima ratus
                                                            rupiah;</li>
                                                        <li>Jika hal itu dilakukan dengan tulisan atau gambaran yang
                                                            disiarkan, dipertunjukkan atau ditempelkan di muka umum,
                                                            maka diancam karena pencemaran tertulis dengan pidana
                                                            penjara paling lama satu tahun empat bulan atau pidana denda
                                                            paling banyak empat ribu lima ratus rupiah;</li>
                                                        <li>Tidak merupakan pencemaran atau pencemaran tertulis, jika
                                                            perbuatan jelas dilakukan demi kepentingan umum atau karena
                                                            terpaksa untuk membela diri.</li>
                                                    </UL>
                                                </div>
                                            </div> <!-- singel reviews -->
                                        </li>
                                        <li>
                                            <div class="singel-reviews">
                                                <div class="reviews-author">
                                                    <div class="author-name">
                                                        <h6>Pasal 311 KUHP Ayat 1-2</h6>
                                                        <span>Kitab Undang-undang Hukum Pidana</span>
                                                    </div>
                                                </div>
                                                <div class="reviews-description pt-20">
                                                    <UL style="list-style: decimal;">
                                                        <li>Jika yang melakukan kejahatan pencemaran atau pencemaran
                                                            tertulis dibolehkan untuk membuktikan apa yang dituduhkan
                                                            itu benar, tidak membuktikannya, dan tuduhan dilakukan
                                                            bertentangan dengan apa yang diketahui, maka dia diancam
                                                            dengan fitnah dengan pidana penjara paling lama empat tahun;
                                                        </li>
                                                        <li>Pencabutan hak-hak berdasarkan pasal 35 no. 1-3 dapat
                                                            dijatuhkan.</li>
                                                    </UL>
                                                </div>
                                            </div> <!-- singel reviews -->
                                        </li>
                                    </ul>
                                    <div class="title pt-15">
                                        <a href="https://peraturan.bpk.go.id/Home/Details/207944/uu-no-12-tahun-2022">
                                            <h6>UURI NO 12 TAHUN 2022</h6>
                                        </a>
                                    </div>
                                </div> <!-- reviews cont -->
                            </div>
                        </div> <!-- tab content -->
                    </div> <!-- teachers right -->
                </div>
            </div> <!-- row -->
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

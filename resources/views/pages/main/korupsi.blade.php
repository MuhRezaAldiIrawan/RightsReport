<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Korupsi-PNUP</title>
    <link rel="shortcut icon" href="{{ ('main/images/logo-pnup.png') }}" type="image/png">
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
            <img src="{{ ('main/images/customer-service (1).png') }}" alt="CS">
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
                                <li><img src="{{ asset('main/images/all-icon/map.png') }}" alt="icon"><span>Jalan Perintis Kemerdekaan KM.10 Tamalanrea , Makassar
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
                                <img src="{{ asset('main/images/logo-pnup.png') }}" alt="Logo" height="80" width="80">
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
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                                <span class="icon-bar"></span>
                            </button>

                            <div class="collapse navbar-collapse sub-menu-bar" id="navbarSupportedContent">
                                <ul class="navbar-nav mr-auto">
                                    <li class="nav-item">
                                        <a  href="/">Home</a>
                                    </li>
                                    <li class="nav-item">
                                        <a href="#about-part">Informasi</a>
                                        <ul class="sub-menu">
                                            <li><a href="/korupsi" class="active">Korupsi</a></li>
                                            <li><a href="/kekerasan">Kekerasan Seksual</a></li>
                                            <li><a href="/bullying">Bullying</a></li>
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

    <section id="page-banner" class="pt-105 pb-130 bg_cover" data-overlay="8" style="background-image: url({{ asset('main/images/slide1.PNG') }})">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="page-banner-cont">
                        <h2>KORUPSI</h2>
                        <nav aria-label="breadcrumb">
                            <ol class="breadcrumb">
                                <li class="breadcrumb-item"><a href="index.php">INFORMASI</a></li>
                                <li class="breadcrumb-item active" aria-current="page">KORUPSI</li>
                            </ol>
                        <div style="margin-top: 50px;">
                            <h3 style="color: #ffc600;">Bureaucratic Corruption</h3>
                            <p style="color: white;">"Korupsi yang terjadi di lingkungan birokrasi dan pelakunya para birokrat atau pegawai rendahan. Bentuknya biasanya menerima atau meminta suap dalam jumlah yang relatif kecil dari masyarakat. Jenis korupsi ini sering disebut petty corruption."</p>
                        </div>
                        </nav>
                    <DIv>
                        <p>

                        </p>
                    </DIv>
                    </div>  <!-- page banner cont -->
                </div>
            </div> <!-- row -->
        </div> <!-- container -->
    </section>

    
    <!--====== PAGE BANNER PART ENDS ======-->
   
    <!--====== BLOG PART START ======-->
    
    <section id="blog-page" class="pt-90 pb-120 gray-bg">
        <div class="container">
           <div class="row">
               <div class="col-lg-8">
                   <div class="singel-blog">
                       <div class="blog-thum">
                           <img src="{{ asset('main/images/Penyuapan.png') }}" alt="Blog">
                       </div>
                       <div class="blog-cont">
                        <ul>
                            <li><a href="https://theconversation.com/kasus-suap-rektor-unila-korupsi-penerimaan-mahasiswa-baru-semakin-subur-di-tengah-kapitalisme-akademik-189226/"><i class="fa fa-tags"></i>Kasus suap rektor unila</a></li>
                        </ul>
                           <a href="blog-singel.html"><h3>Penyuapan dalam Penerimaan Mahasiswa Baru</h3></a>
                           <p>Dalam beberapa kasus, pihak-pihak yang terlibat dalam proses penerimaan mahasiswa baru di kampus dapat terlibat dalam korupsi. Ini termasuk menerima suap atau gratifikasi untuk mempengaruhi keputusan penerimaan.Penyuapan dalam penerimaan mahasiswa adalah tindakan ilegal dan melanggar etika akademik. Penyuapan terjadi ketika seseorang memberikan uang, hadiah, atau imbalan lainnya kepada pihak yang berwenang di institusi pendidikan untuk memperoleh akses atau keuntungan yang tidak adil dalam proses penerimaan mahasiswa.</p>
                       </div>
                   </div> <!-- singel blog -->
                   <div class="singel-blog mt-30">
                       <div class="blog-thum">
                           <img src="{{ asset('main/images/penyalah_gunaan.png') }}" alt="Blog">
                       </div>
                       <div class="blog-cont">
                        <ul>
                            <li><a href="https://ungarannews.com/2019/07/02/mahasiswa-unpand-semarang-tuntut-transparansi-pengelolaan-uang-kampus/"><i class="fa fa-tags"></i>Mahasiswa Unpad Tuntut Transparansi Uang Kampus</a></li>
                        </ul>
                           <a href="blog-singel.html"><h3>Penyalahgunaan Dana</h3></a>
                           <p> Korupsi juga dapat terjadi melalui penyalahgunaan dana yang dialokasikan untuk keperluan pendidikan dan pengembangan kampus. Misalnya, anggaran yang seharusnya digunakan untuk memperbaiki fasilitas atau meningkatkan kualitas pendidikan dapat disalahgunakan untuk kepentingan pribadi. Penyalahgunaan dana kampus merujuk pada tindakan yang tidak sesuai atau melanggar aturan dan prosedur penggunaan dana yang dialokasikan untuk kegiatan atau program di lingkungan kampus. Hal ini dapat melibatkan penggunaan dana secara tidak sah, manipulasi, atau penyalahgunaan kepercayaan yang diberikan kepada pihak yang bertanggung jawab atas pengelolaan dana kampus.</p>
                       </div>
                   </div> <!-- singel blog -->
                   <nav class="courses-pagination mt-50">
                        <ul class="pagination justify-content-lg-end justify-content-center">
                            <li class="page-item">
                                <a href="#" aria-label="Previous">
                                    <i class="fa fa-angle-left"></i>
                                </a>
                            </li>
                            <li class="page-item"><a class="active" href="#">1</a></li>
                            <li class="page-item"><a href="/korupsi2">2</a></li>
                            <li class="page-item"><a href="#">3</a></li>
                            <li class="page-item">
                                <a href="#" aria-label="Next">
                                    <i class="fa fa-angle-right"></i>
                                </a>
                            </li>
                        </ul>
                    </nav>  <!-- courses pagination -->
               </div>
               <div class="col-lg-4">
                   <div class="saidbar">
                       <div class="row">
                           <div class="col-lg-12 col-md-6">
                               <div class="saidbar-search ">
                                   <form action="#">
                                       <input type="text" placeholder="Search">
                                       <button type="button"><i class="fa fa-search"></i></button>
                                   </form>
                               </div> <!-- saidbar search -->
                               <div class="categories mt-30">
                                   <h4>Dasar-Dasar Hukum</h4>
                                   <ul>
                                       <li><a href="#">UU No. 3 tahun 1971 Tentang Pemberantasan Tindak Pidana Korupsi</a></li>
                                       <li><a href="#">Ketetapan MPR No XI/MPR/1998 tentang Penyelenggara Negara yang Bersih dan Bebas KKN</a></li>
                                       <li><a href="#">UU no 28 tahun 1999 tentang Penyelenggaraan Negara yang Bersih dan Bebas KKN</a></li>
                                       <li><a href="#">UU Nomor 20 Tahun 2001 jo UU No. 31/1999 tentang Pemberantasan Tindak Pidana Korupsi</a></li>
                                       <li><a href="#">Peraturan Pemerintah No 71 Tahun 2000 Tentang Tata Cara Pelaksanaan Peran Serta Masyarakat dan Pemberian Penghargaan dalam Pencegahan dan Pemberantasan Tindak Pidana Korupsi</a></li>
                                       <li><a href="#">UU No 30 tahun 2002 tentang Komisi Pemberantasan Tindak Pidana Korupsi </a></li>
                                       <li><a href="#">UU No 15 tahun 2002 tentang Tindak Pidana Pencucian Uang</a></li>
                                       <li><a href="#">Peraturan Presiden Nomor 54 tahun 2018 tentang Strategi Nasional Pencegahan Korupsi (Stranas PK)</a></li>
                                       <li><a href="#">Peraturan Presiden No.102/2020 tentang tentang Pelaksanaan Supervisi Pemberantasan Tindak Pidana Korupsi</a></li>
                                       <li><a href="#">Permenristekdikti Nomor 33 Tahun 2019 tentang Kewajiban Penyelenggaraan Pendidikan Anti Korupsi (PAK) di Perguruan Tinggi</a></li>
                                   </ul>
                               </div>
                           </div> <!-- categories -->
                       </div> <!-- row -->
                   </div> <!-- saidbar -->
               </div>
           </div> <!-- row -->
        </div> <!-- container -->
    </section>
    
    <!-- disini isi itemnya yah bosku -->




    <footer id="footer-part">
        <div class="footer-top pt-40 pb-70">
            <div class="container">
                <div class="row">
                    <div class="col-lg-4 col-md-6">
                        <div class="footer-about mt-40">
                            <div class="logo">
                                <a href="#"><img src="{{ asset('main/images/logo-pnup.png') }}" alt="Logo" height="200" width="200"></a>
                            </div>
                            <ul class="mt-20">
                                <li><a href="https://www.facebook.com/9171dukcapilkotajayapura"><i class="fa fa-facebook-f"></i></a></li>
                                <li><a href="https://twitter.com/dispendukcapil?lang=en"><i class="fa fa-twitter"></i></a></li>
                                <li><a href="https://www.youtube.com/channel/UCXTp3P4Nd3SIzfuUHV0jzfw"><i class="fa fa-youtube"></i></a></li>
                                <li><a href="https://www.instagram.com/?hl=id"><i class="fa fa-instagram"></i></a></li>
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
                                <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d31790.70104477153!2d119.4436746743164!3d-5.129840899999996!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x2dbefcca2887e13f%3A0xf5c059de86dd07!2sPNUP%20Politeknik%20Negeri%20Ujung%20Pandang!5e0!3m2!1sid!2sid!4v1686879077808!5m2!1sid!2sid" width="400" height="250" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
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
                            <p><a target="_blank" href="https://www.templateshub.net">Copyright © 2023 | Kelompok 2 Pancasila</a> </p>
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
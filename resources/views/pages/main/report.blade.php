<!doctype html>
<html lang="en">

<head>
    <title>Laporan</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <link href='https://fonts.googleapis.com/css?family=Roboto:400,100,300,700' rel='stylesheet' type='text/css'>

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css">

    <link rel="stylesheet" href="{{ 'pengaduan/css/style.css' }}">

</head>

<body>
    @include('sweetalert::alert')
    <section class="ftco-section img bg-hero" style="background-image: url({{ asset('pengaduan/images/pnup.jpg') }});">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-md-6 text-center mb-5">
                    <h2 class="heading-section">Form Laporan Pelanggaran HAM</h2>
                </div>
            </div>
            <div class="row justify-content-center">
                <div class="col-lg-11">
                    <div class="wrapper">
                        <div class="row no-gutters justify-content-between">
                            <div class="row mb-5">
                                <div class="col-md-3">
                                    <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-map-marker"></span>
                                </div>
                                <div class="text">
                                <p><span>Address:</span>Jalan Perintis Kemerdekaan KM.10 Tamalanrea , Makassar 90245 </p>
                              </div>
                          </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-phone"></span>
                                </div>
                                <div class="text">
                                <p><span>Phone:</span> <a href="tel://1234567920">+62 (411) 585365 | +62 (411) 585367 | +62 (411) 585368</a></p>
                              </div>
                          </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-paper-plane"></span>
                                </div>
                                <div class="text">
                                <p><span>Email:</span> <a href="mailto:info@yoursite.com">pnup@poliupg.ac.id
                                </a></p>
                              </div>
                          </div>
                                </div>
                                <div class="col-md-3">
                                    <div class="dbox w-100 text-center">
                                <div class="icon d-flex align-items-center justify-content-center">
                                    <span class="fa fa-globe"></span>
                                </div>
                                <div class="text">
                                <p><span>Website</span> <a href="#">https://www.poliupg.ac.id</a></p>
                              </div>
                          </div>
                                </div>
                            </div>
                            <div class="col-lg-12">
                                <div class="contact-wrap w-100 p-md-5 p-4">
                                    <h3 class="mb-4">Form Pengajuan Laporan Pelanggaran HAM</h3>
                                    <div id="form-message-warning" class="mb-4"></div>
                                    {{-- <div id="form-message-success" class="mb-4">
                                        Your message was sent, thank you!
                                    </div> --}}
                                    <form method="POST" action="/report" enctype="multipart/form-data">
                                        @csrf
                                        <div class="row">
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="nama"
                                                        id="nama" placeholder="Nama">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="email" class="form-control" name="email"
                                                        id="email" placeholder="Email">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="hp"
                                                        id="hp" placeholder="Nomor HP">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select class="form-control" id="jurusan" name="jurusan">
                                                        <option >Jurusan</option>
                                                        <option value="Teknik Elektro">Teknik Elektro</option>
                                                        <option value="Teknik Sipil">Teknik Sipil</option>
                                                        <option value="Teknik Mesin">Teknik Mesin</option>
                                                        <option value="Teknik Kimia">Teknik Kimia</option>
                                                        <option value="Akuntansi">Akuntansi</option>
                                                        <option value="Administrasi Niaga">Administrasi Niaga</option>
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="prodi"
                                                        id="prodi" placeholder="Program Studi">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="angkatan"
                                                        id="angkatan" placeholder="Angkatan">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <select class="form-control" id="kategori_id" name="kategori_id">
                                                        <option >Jenius Pelanggaran</option>
                                                        <option value="1">Kekerasan</option>
                                                        <option value="3">Diskriminasi</option>
                                                        <option value="4">Korupsi</option>
                                                        <option value="2">Bulyying</option>
                                                        <option value="5">Pembatasan Kebebasan</option>
                                                      </select>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <textarea name="rincian" class="form-control" id="rincian" cols="30" rows="5" placeholder="Rincian Insiden"></textarea>
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="file" class="form-control" name="bukti"
                                                        id="bukti" placeholder="Lampirkan Bukti insiden">
                                                </div>
                                            </div>
                                            <div class="col-md-12" hidden>
                                                <div class="form-group">
                                                    <input type="text" class="form-control" name="status"
                                                        id="status" placeholder="Status Laporan" value="new">
                                                </div>
                                            </div>
                                            <div class="col-md-12">
                                                <div class="form-group">
                                                    <input type="submit" value="Kirim Laporan" class="btn btn-primary">
                                                    <div class="submitting"></div>
                                                </div>
                                            </div>
                                        </div>
                                    </form>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <script src="{{ asset('pengaduan/js/jquery.min.js') }}"></script>
    <script src="{{ 'pengaduan/js/popper.js' }}"></script>
    <script src="{{ 'pengaduan/js/bootstrap.min.js' }}"></script>
    <script src="{{ 'pengaduan/js/jquery.validate.min.js' }}"></script>
    <script src="{{ 'pengaduan/js/main.js' }}"></script>

</body>

</html>

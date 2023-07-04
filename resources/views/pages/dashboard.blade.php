{{-- Extends layout --}}
@extends('components.layout')



{{-- Content --}}
@section('content')
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Welcome Admin 🎉</h5>

                        <p class="mb-4">
                            Kamu Punya <span class="fw-bold">2</span> Laporan Yang Masuk
                        </p>

                        <a href="/toll" class="btn btn-sm btn-outline-primary">View Report</a>
                    </div>
                </div>
                <div class="col-sm-5 text-end text-sm-left">
                    <div class="card-body pb-0 px-0 px-md-4">
                        <img src="{{ asset('img/illustrations/man-with-laptop-light.png') }}" height="140"
                            alt="View Badge User" data-app-dark-img="illustrations/man-with-laptop-dark.png"
                            data-app-light-img="illustrations/man-with-laptop-light.png" />
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- <div class=""> --}}
    <div class="row">
        <div class=" col-md-6 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('img/icons/unicons/inreport.png') }}" alt="chart success" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <h2 class="fw-semibold d-block mb-1">{{ $masuk }}</h2>
                    <h4 class="card-title mb-2">Laporan Masuk</h4>
                    {{-- <small class="text-success fw-semibold">bulan ini <i class="bx bx-up-arrow-alt"></i></small> --}}
                </div>
            </div>
        </div>
        <div class=" col-md-6 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('img/icons/unicons/proses.png') }}" alt="chart success" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <h2 class="fw-semibold d-block mb-1">{{ $proses }}</h2>
                    <h4 class="card-title mb-2">Laporan Dalam Proses</h4>
                    {{-- <small class="text-success fw-semibold">bulan ini <i class="bx bx-up-arrow-alt"></i></small> --}}
                </div>
            </div>
        </div>
    </div>
    {{-- </div> --}}
    <div class="row">
        <div class=" col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('img/icons/unicons/exploit.png') }}" alt="chart success" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <h2 class="fw-semibold d-block mb-1">{{ $kekerasan }}</h2>
                    <h4 class="card-title mb-2">Kekerasan</h4>
                    {{-- <small class="text-success fw-semibold">bulan ini <i class="bx bx-up-arrow-alt"></i></small> --}}
                </div>
            </div>
        </div>
        <div class=" col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('img/icons/unicons/bullies.png') }}" alt="chart success" class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <h2 class="fw-semibold d-block mb-1">{{ $bullying }}</h2>
                    <h4 class="card-title mb-2">Bullying</h4>
                    {{-- <small class="text-success fw-semibold">bulan ini <i class="bx bx-up-arrow-alt"></i></small> --}}
                </div>
            </div>
        </div>
        <div class=" col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('img/icons/unicons/people.png') }}" alt="chart success" class="rounded"
                            />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <h2 class="fw-semibold d-block mb-1">{{ $diskriminasi }}</h2>
                    <h4 class="card-title mb-2">Diskriminasi</h4>
                    {{-- <small class="text-success fw-semibold">bulan ini <i class="bx bx-up-arrow-alt"></i></small> --}}
                </div>
            </div>
        </div>
        <div class=" col-md-3 col-6 mb-4">
            <div class="card">
                <div class="card-body">
                    <div class="card-title d-flex align-items-start justify-content-between">
                        <div class="avatar flex-shrink-0">
                            <img src="{{ asset('img/icons/unicons/corruption.png') }}" alt="chart success"
                                class="rounded" />
                        </div>
                        <div class="dropdown">
                            <button class="btn p-0" type="button" id="cardOpt3" data-bs-toggle="dropdown"
                                aria-haspopup="true" aria-expanded="false">
                                <i class="bx bx-dots-vertical-rounded"></i>
                            </button>
                            <div class="dropdown-menu dropdown-menu-end" aria-labelledby="cardOpt3">
                                <a class="dropdown-item" href="javascript:void(0);">View More</a>
                                <a class="dropdown-item" href="javascript:void(0);">Delete</a>
                            </div>
                        </div>
                    </div>
                    <h2 class="fw-semibold d-block mb-1">{{ $korupsi }}</h2>
                    <h4 class="card-title mb-2">Korupsi</h4>
                    {{-- <small class="text-success fw-semibold">bulan ini <i class="bx bx-up-arrow-alt"></i></small> --}}
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Order Statistics -->
        <div class="col-md-12 col-lg-8 col-xl-8 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Kasus Pelanggaran HAM</h5>
                        <small class="text-muted">Berdasarkan Kategori Pelanggaran HAM</small>
                    </div>
                </div>
                <div class="card-body">
                    {!! $ReportChart->container() !!}
                </div>
            </div>
        </div>
        <div class="col-md-6 col-lg-4 order-1 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Kasus Pelanggaran HAM</h5>
                        {{-- <small class="text-muted">42.82k Total Sales</small> --}}
                    </div>
                </div>
                <div class="card-body px-0">
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div class="d-flex p-4 pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('img/icons/unicons/people.png') }}" alt="chart success"
                                        class="rounded" />
                                </div>
                                <div>
                                    <small class="text-muted d-block">Diskriminasi</small>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">{{ $diskriminasi }}</h6>
                                        <small class="text-success fw-semibold">Naik Per
                                            <i class="bx bx-chevron-up"></i>
                                            0% / Bulan
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div class="d-flex p-4 pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('img/icons/unicons/corruption.png') }}" alt="chart success"
                                        class="rounded" />
                                </div>
                                <div>
                                    <small class="text-muted d-block">Korupsi</small>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">{{ $korupsi }}</h6>
                                        <small class="text-success fw-semibold">Naik Per
                                            <i class="bx bx-chevron-up"></i>
                                            0% / Bulan
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div class="d-flex p-4 pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('img/icons/unicons/exploit.png') }}" alt="chart success"
                                        class="rounded" />
                                </div>
                                <div>
                                    <small class="text-muted d-block">Kekerasan</small>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">{{ $kekerasan }}</h6>
                                        <small class="text-success fw-semibold">Naik Per
                                            <i class="bx bx-chevron-up"></i>
                                            0% / Bulan
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div class="d-flex p-4 pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('img/icons/unicons/bullies.png') }}" alt="chart success"
                                        class="rounded" style="width: 30px; height: 30px" />
                                </div>
                                <div>
                                    <small class="text-muted d-block">Bullying</small>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">{{ $bullying }}</h6>
                                        <small class="text-success fw-semibold">Naik Per
                                            <i class="bx bx-chevron-up"></i>
                                            0% / Bulan
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div class="d-flex p-4 pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="{{ asset('img/icons/unicons/freedom.png') }}" alt="chart success"
                                        class="rounded" style="width: 30px; height: 30px" />
                                </div>
                                <div>
                                    <small class="text-muted d-block">Pembatasan Kebebasan</small>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">{{ $kebebasan }}</h6>
                                        <small class="text-success fw-semibold">Naik Per
                                            <i class="bx bx-chevron-up"></i>
                                            0% / Bulan
                                        </small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="row">
        <!-- Order Statistics -->
        <div class="col-md-12 col-lg-8 col-xl-6 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Pelanggaran HAM di Jurusan</h5>
                        <small class="text-muted">Jumlah Pelanggaran HAM di tingkat Jurusan PNUP</small>
                    </div>
                </div>
                <div class="card-body">
                    {!! $jurusanChart->container() !!}
                </div>
            </div>
        </div>
        <!--/ Order Statistics -->

        <!-- Expense Overview -->
        <div class="col-md-12 col-lg-8 col-xl-6 order-0 mb-4">
            <div class="card h-100">
                <div class="card-header d-flex align-items-center justify-content-between pb-0">
                    <div class="card-title mb-0">
                        <h5 class="m-0 me-2">Pelanggaran HAM di Jurusan</h5>
                        <small class="text-muted">Jumlah Pelanggaran HAM di tingkat Jurusan PNUP</small>
                    </div>
                </div>
                <div class="card-body">
                    {!! $prodichart->container() !!}
                </div>
            </div>
        </div>
        <!--/ Expense Overview -->
    </div>
    <script src="{{ $ReportChart->cdn() }}"></script>
    <script src="{{ $jurusanChart->cdn() }}"></script>
    <script src="{{ $prodichart->cdn() }}"></script>

    {{ $ReportChart->script() }}
    {{ $jurusanChart->script() }}
    {{ $prodichart->script() }}
@endsection

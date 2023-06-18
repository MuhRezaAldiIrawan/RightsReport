{{-- Extends layout --}}
@extends('components.layout')



{{-- Content --}}
@section('content')
    \
    @php use ArielMejiaDev\LarapexCharts\LarapexChart; @endphp
    <div class="col-lg-12 mb-4 order-0">
        <div class="card">
            <div class="d-flex align-items-end row">
                <div class="col-sm-7">
                    <div class="card-body">
                        <h5 class="card-title text-primary">Welcome Developer Llen 🎉</h5>

                        <p class="mb-4">
                            Kamu Punya <span class="fw-bold"></span> Report Yang Masuk
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
                            <img src="{{ asset('img/icons/unicons/bullies.png') }}" alt="chart success"
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
                            <img src="{{ asset('img/icons/unicons/people.png') }}" alt="chart success" class="rounded" />
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
                    {{-- <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div class="d-flex p-4 pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../assets/img/icons/unicons/wallet.png" alt="User" />
                                </div>
                                <div>
                                    <small class="text-muted d-block">Total Balance</small>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">$459.10</h6>
                                        <small class="text-success fw-semibold">
                                            <i class="bx bx-chevron-up"></i>
                                            42.9%
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="incomeChart"></div>
                            <div class="d-flex justify-content-center pt-4 gap-2">
                                <div class="flex-shrink-0">
                                    <div id="expensesOfWeek"></div>
                                </div>
                                <div>
                                    <p class="mb-n1 mt-1">Expenses This Week</p>
                                    <small class="text-muted">$39 less than last week</small>
                                </div>
                            </div>
                        </div>
                    </div> --}}
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
                        <h5 class="m-0 me-2">Kasus Pelanggaran HAM Di Tingkat Jurusan</h5>
                        <small class="text-muted">Jumlah Pelanggaran HAM Di Setiap Jurusan</small>
                    </div>
                </div>
                <div class="card-body">
                    {!! $jurusanChart->container() !!}
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
                    {{-- <div class="tab-content p-0">
                        <div class="tab-pane fade show active" id="navs-tabs-line-card-income" role="tabpanel">
                            <div class="d-flex p-4 pt-3">
                                <div class="avatar flex-shrink-0 me-3">
                                    <img src="../assets/img/icons/unicons/wallet.png" alt="User" />
                                </div>
                                <div>
                                    <small class="text-muted d-block">Total Balance</small>
                                    <div class="d-flex align-items-center">
                                        <h6 class="mb-0 me-1">$459.10</h6>
                                        <small class="text-success fw-semibold">
                                            <i class="bx bx-chevron-up"></i>
                                            42.9%
                                        </small>
                                    </div>
                                </div>
                            </div>
                            <div id="incomeChart"></div>
                            <div class="d-flex justify-content-center pt-4 gap-2">
                                <div class="flex-shrink-0">
                                    <div id="expensesOfWeek"></div>
                                </div>
                                <div>
                                    <p class="mb-n1 mt-1">Expenses This Week</p>
                                    <small class="text-muted">$39 less than last week</small>
                                </div>
                            </div>
                        </div>
                    </div> --}}
                </div>
            </div>
        </div>
    </div>

    {{-- <div class="p-6 m-20 bg-white rounded shadow">
        {!! $ReportChart->container() !!}
        {!! $jurusanChart->container() !!}
    </div>

    </div> --}}

    <script src="{{ $ReportChart->cdn() }}"></script>
    <script src="{{ $jurusanChart->cdn() }}"></script>

    {{ $ReportChart->script() }}
    {{ $jurusanChart->script() }}
@endsection

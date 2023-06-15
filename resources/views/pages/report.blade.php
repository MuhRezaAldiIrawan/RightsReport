{{-- Extends layout --}}
@extends('components.layout')



{{-- Content --}}
@section('content')
    @if (request()->route()->getName() === 'new_report')
        <div class="card">
            <h5 class="card-header">Laporan Baru</h5>
            <div class="card-body">
                <div class="table-responsive text-nowrap">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Nama</th>
                                <th class="text-center">HP</th>
                                <th class="text-center">Jurusan</th>
                                <th class="text-center">Prodi</th>
                                <th class="text-center"class="text-center">Kategori Pelanggaan</th>
                                <th class="text-center">Action</th>
                            </tr>
                        </thead>
                        <tbody>
                            @foreach ($new_report as $n)
                            <tr>
                                <td>
                                    {{ ++$i }}
                                </td>
                                <td>{{ $n->nama }}</td>
                                <td>{{ $n->hp }}</td>
                                <td>{{ $n->jurusan }}</td>
                                <td>{{ $n->prodi }}</td>
                                <td>{{ $n->kategori->kategori  }}</td>
                                <td class="d-flex justify-content-center">
                                    <a href="/detailreport/{{ $n->id }}">
                                    <button type="button" class="btn btn-primary">
                                        <span class="tf-icons bx bx-body"></span>&nbsp; Detail
                                      </button>
                                    </a>
                                </td>
                            </tr>
                            @endforeach
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @elseif(request()->route()->getName() === 'proggress_report')
        <div class="card">
            <h5 class="card-header">Laporan dalam Proses</h5>
            <div class="card-body">
                <div class="table-responsive "">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Jenis Kategori</th>
                                <th class="text-center">Deskripsi</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($kategori as $k) --}}
                            <tr>
                                <td>
                                    {{-- {{ ++$i }} --}}1
                                </td>
                                <td>Kategori</td>
                                <td>Deskripsi</td>
                                <td class="d-flex justify-content-center">
                                    <button class="btn btn-icon btn-primary me-1" type="button" data-bs-toggle="modal"
                                        data-bs-target="#basicModalView" aria-expanded="false"
                                        aria-controls="multiCollapseExample2"> <span class="tf-icons bx bx-edit"></span>
                                    </button>
                                    <button class="btn btn-icon btn-info me-1 " type="button" data-bs-toggle="modal"
                                        data-bs-target="#basicModalView" aria-expanded="false"
                                        aria-controls="multiCollapseExample2"> <span class="tf-icons bx bx-detail"></span>
                                    </button>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @elseif(request()->route()->getName() === 'histori_report')
        <div class="card">
            <h5 class="card-header">Riwayat Laporan</h5>
            <div class="card-body">
                <div class="table-responsive "">
                    <table class="table table-bordered">
                        <thead>
                            <tr>
                                <th class="text-center">No</th>
                                <th class="text-center">Jenis Kategori</th>
                                <th class="text-center">Deskripsi</th>
                                <th class="text-center">Actions</th>
                            </tr>
                        </thead>
                        <tbody>
                            {{-- @foreach ($kategori as $k) --}}
                            <tr>
                                <td>
                                    {{-- {{ ++$i }} --}}1
                                </td>
                                <td>Kategori</td>
                                <td>Deskripsi</td>
                                <td class="d-flex justify-content-center">
                                    <button class="btn btn-icon btn-primary me-1" type="button" data-bs-toggle="modal"
                                        data-bs-target="#basicModalView" aria-expanded="false"
                                        aria-controls="multiCollapseExample2"> <span class="tf-icons bx bx-edit"></span>
                                    </button>
                                    <button class="btn btn-icon btn-info me-1 " type="button" data-bs-toggle="modal"
                                        data-bs-target="#basicModalView" aria-expanded="false"
                                        aria-controls="multiCollapseExample2"> <span class="tf-icons bx bx-detail"></span>
                                    </button>
                                </td>
                            </tr>
                            {{-- @endforeach --}}
                        </tbody>
                    </table>
                </div>
            </div>
        </div>
    @endif
@endsection

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
                    <nav aria-label="Page navigation">
                        <ul class="pagination">
                            {{ $new_report->links() }}
                        </ul>
                    </nav>
                </div>
            </div>
        </div>
    @elseif(request()->route()->getName() === 'proggress_report')
    <div class="card">
        <h5 class="card-header">Laporan Dalam Proses</h5>
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
                        @foreach ($proggress_report as $n)
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
    @elseif(request()->route()->getName() === 'histori_report')
    <div class="card">
        <h5 class="card-header">Riwayat Laporan</h5>
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
                        @foreach ($histori_report as $n)
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
                <nav aria-label="Page navigation">
                    <ul class="pagination">
                        {{ $histori_report->links() }}
                    </ul>
                </nav>
            </div>
        </div>
    </div>
    @endif
@endsection

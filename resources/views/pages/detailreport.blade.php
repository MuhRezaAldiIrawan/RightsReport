{{-- Extends layout --}}
@extends('components.layout')



{{-- Content --}}
@section('content')
  
    <h5 class="fw-bold py-3 mb-4"><span class="text-muted fw-light">Report /</span>Detail Report<i
            class='bx bx-street-view m-1'></i></h5>

    <div class="col-xxl">
        <div class="card mb-4">
            <div class="card-header d-flex align-items-center justify-content-between">
                <h5 class="mb-0">Data Pelapor</h5>
            </div>
            <div class="card-body">
                @foreach ($detailreport as $d)
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Nama Lengkap</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-user"></i></span>
                                <input type="text" class="form-control active" value="{{ $d->nama }}" readonly style="background-color: transparent"/>
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Email</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                <input type="text" class="form-control" value="{{ $d->email }}" readonly style="background-color: transparent" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-phone">No HP</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i
                                        class="bx bx-phone"></i></span>
                                <input type="text" class="form-control phone-mask" value="{{ $d->hp }}"
                                readonly style="background-color: transparent" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-fullname">Jurusan</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-fullname2" class="input-group-text"><i
                                        class="bx bx-building-house"></i></span>
                                <input type="text" class="form-control" value="{{ $d->jurusan }}" readonly style="background-color: transparent" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Prodi</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-home"></i></span>
                                <input type="text" id="basic-icon-default-email" class="form-control"
                                    value="{{ $d->prodi }}" readonly style="background-color: transparent" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-phone">Angkatan</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-phone2" class="input-group-text"><i
                                        class="bx bx-user-circle"></i></span>
                                <input type="text" id="basic-icon-default-phone" class="form-control phone-mask"
                                    value="{{ $d->angkatan }}"readonly style="background-color: transparent" />
                            </div>
                        </div>
                    </div>
                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Kategori Pelanggaran
                            HAM</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-category-alt"></i></span>
                                <input type="text" id="basic-icon-default-email" class="form-control"
                                    value="{{ $d->kategori->kategori }}" readonly style="background-color: transparent" />
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 form-label" for="basic-icon-default-message">Rincian</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span id="basic-icon-default-message2" class="input-group-text"><i
                                        class="bx bx-comment"></i></span>
                                <textarea id="basic-icon-default-message" class="form-control" readonly style="background-color: transparent">{{ $d->rincian }}</textarea>
                            </div>
                        </div>
                    </div>

                    <div class="row mb-3">
                        <label class="col-sm-2 col-form-label" for="basic-icon-default-email">Bukti Foto Pelanggaran</label>
                        <div class="col-sm-10">
                            <div class="input-group input-group-merge">
                                <span class="input-group-text"><i class="bx bx-envelope"></i></span>
                                {{-- <input type="text" id="basic-icon-default-email" class="form-control"
                                    placeholder="john.doe" aria-label="john.doe"
                                    aria-describedby="basic-icon-default-email2" /> --}}
                            </div>
                        </div>
                    </div>

                    <div class="row justify-content-end">
                        <div class="col-sm-10">
                            @if ($d->status == 'new')
                                <form action="/proses_report/{{ $d->id }}" method="post">
                                    @csrf
                                    <input type="text" name="status" id="status" value="proses" hidden>
                                    <button type="submit" class="btn btn-primary">Proses Laporan</button>
                                </form>
                            @elseif($d->status == 'proses')
                                <form action="/end_report/{{ $d->id }}" method="post">
                                    @csrf
                                    <input type="text" name="status" id="status" value="selesai" hidden>
                                    <button type="submit" class="btn btn-primary">Tutup Laporan</button>
                                </form>
                            @endif
                        </div>
                    </div>
                @endforeach
            </div>
        </div>
    </div>
@endsection

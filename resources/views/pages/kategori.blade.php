{{-- Extends layout --}}
@extends('components.layout')



{{-- Content --}}
@section('content')
    <div class="card">
        <h5 class="card-header">Kategori Pelanggaran HAM</h5>
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
                        @foreach ($kategori as $k)
                            <tr>
                                <td>
                                    {{ ++$i }}
                                </td>
                                <td>{{ $k->kategori }}</td>
                                <td>{{ $k->deskripsi }}</td>
                                <td class="d-flex justify-content-center">
                                    <button class="btn btn-icon btn-primary me-1" type="button" data-bs-toggle="modal"
                                        data-bs-target="#basicModalView{{ $k->id }}" aria-expanded="false"
                                        aria-controls="multiCollapseExample2"> <span class="tf-icons bx bx-edit"></span>
                                    </button>
                                    <button class="btn btn-icon btn-info me-1 " type="button" data-bs-toggle="modal"
                                        data-bs-target="#basicModalView{{ $k->id }}" aria-expanded="false"
                                        aria-controls="multiCollapseExample2"> <span class="tf-icons bx bx-detail"></span>
                                    </button>
                                </td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

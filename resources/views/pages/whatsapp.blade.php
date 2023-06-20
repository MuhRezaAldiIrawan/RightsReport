{{-- Extends layout --}}
@extends('components.layout')



{{-- Content --}}
@section('content')
    <link href="{{ asset('css/LoginPage.css') }}" rel="stylesheet">
    <div class="main-content">
        <div class="container-fluid p-h-0">
            <div class="chat chat-app row">
                <div class="chat-list">
                    <div class="chat-user-tool">
                        <i class='prefix-icon bx bx-search-alt'></i>
                        
                        <input placeholder="Search...">
                    </div>
                    <div class="chat-user-list">
                        <a class="chat-list-item p-h-25" href="javascript:void(0);">
                            <div class="media align-items-center">
                                <div class="avatar avatar-image">
                                    <img src="{{ asset('img/logo/logo100.png ') }}" alt="Logo">
                                </div>
                                <div class="p-l-15">
                                    <h5 class="m-b-0">Ahmad Fauzy</h5>
                                    <p class="msg-overflow m-b-0 text-muted font-size-13">
                                        Apakah Penanganannya sudah dilanjutkan?
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a class="chat-list-item p-h-25" href="javascript:void(0);">
                            <div class="media align-items-center">
                                <div class="avatar avatar-image">
                                    <img src="{{ asset('img/logo/logo100.png ') }}" alt="Logo">
                                </div>
                                <div class="p-l-15">
                                    <h5 class="m-b-0">Anhar Fadillah</h5>
                                    <p class="msg-overflow m-b-0 text-muted font-size-13">
                                        Saya akan ke tempat pengaduan
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a class="chat-list-item p-h-25" href="javascript:void(0);">
                            <div class="media align-items-center">
                                <div class="avatar avatar-image">
                                    <img src="{{ asset('img/logo/logo100.png ') }}" alt="Logo">
                                </div>
                                <div class="p-l-15">
                                    <h5 class="m-b-0">Irgi Faturahhamn</h5>
                                    <p class="msg-overflow m-b-0 text-muted font-size-13">
                                        Saya Ingin mengajukan laporan lain
                                    </p>
                                </div>
                            </div>
                        </a>
                        <a class="chat-list-item p-h-25" href="javascript:void(0);">
                            <div class="media align-items-center">
                                <div class="avatar avatar-image">
                                    <img src="{{ asset('img/logo/logo100.png ') }}" alt="Logo">
                                </div>
                                <div class="p-l-15">
                                    <h5 class="m-b-0">Nisa Rahman</h5>
                                    <p class="msg-overflow m-b-0 text-muted font-size-13">
                                        Apakah Pelecehan itu masuk kategori pelanggaran
                                    </p>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
                <div class="chat-content">
                    <div class="conversation">
                        <div class="conversation-wrapper">
                            <div class="conversation-header justify-content-between">
                                <div class="media align-items-center">
                                    <a href="javascript:void(0);"
                                        class="chat-close m-r-20 d-md-none d-block text-dark font-size-18 m-t-5">
                                        <i class="anticon anticon-left-circle"></i>
                                    </a>
                                    <div class="avatar avatar-image">
                                        <img src="{{ asset('img/logo/logo100.png ') }}" alt="Logo">
                                    </div>
                                    <div class="p-l-15">
                                        <h6 class="m-b-0">Ahmad Fauzy</h6>
                                        <p class="m-b-0 text-muted font-size-13 m-b-0">
                                            <span class="badge badge-success badge-dot m-r-5"></span>
                                            <span>Online</span>
                                        </p>
                                    </div>
                                </div>
                                <div class="dropdown dropdown-animated scale-left">
                                    <a class="text-dark font-size-20" href="javascript:void(0);" data-toggle="dropdown">
                                        <i class='bx bx-cog'></i>
                                    </a>
                                    <div class="dropdown-menu">
                                        <button class="dropdown-item" type="button">Action</button>
                                        <button class="dropdown-item" type="button">Another action</button>
                                        <button class="dropdown-item" type="button">Something else here</button>
                                    </div>
                                </div>
                            </div>
                            <div class="conversation-body">
                                <div class="msg justify-content-center">
                                    <div class="font-weight-semibold font-size-12"> 7:57PM </div>
                                </div>
                                <div class="msg msg-recipient">
                                    <div class="m-r-10">
                                        <div class="avatar avatar-image">
                                            <img src="{{ asset('img/logo/logo100.png ') }}" alt="Logo">
                                        </div>
                                    </div>
                                    <div class="bubble">
                                        <div class="bubble-wrapper">
                                            <span>Apakah Penanganannya sudah dilanjutkan? </span>
                                        </div>
                                    </div>
                                </div>
                                <div class="msg msg-sent">
                                    <div class="bubble">
                                        <div class="bubble-wrapper">
                                            <span>Kami telah menangani Kasus Yang Adek Mahasiswa Ajukan ke Pihat terkait</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="msg msg-recipient">
                                    <div class="m-r-10">
                                        <div class="avatar avatar-image">
                                            <img src="{{ asset('img/logo/logo100.png ') }}" alt="Logo">
                                        </div>
                                    </div>
                                    <div class="bubble">
                                        <div class="bubble-wrapper p-5">
                                            <img src="{{ asset('img/kekerasan.jpeg') }}">
                                        </div>
                                    </div>
                                </div>
                                <div class="msg msg-recipient">
                                    <div class="bubble m-l-50">
                                        <div class="bubble-wrapper">
                                            <span>Seperti Yang ibu lihat dari foto bukti diatas saya dipukuli oleh petugas kampus</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="msg msg-recipient">
                                    <div class="bubble m-l-50">
                                        <div class="bubble-wrapper">
                                            <span>Saya ingin kasus ini segera ditangani oleh pihak kampus</span>
                                        </div>
                                    </div>
                                </div>
                                <div class="msg msg-sent">
                                    <div class="bubble">
                                        <div class="bubble-wrapper">
                                            <span>Kami akan menindak lanjuti terkait dengan petugas tersebut dan akan memanggil untuk melakukan mediasi dengan pihak terkait</span>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="conversation-footer">
                                <input class="chat-input" type="text" placeholder="Type a message...">
                                <ul class="list-inline d-flex align-items-center m-b-0">
                                    <li class="list-inline-item m-r-15">
                                        <a class="text-gray font-size-20" href="javascript:void(0);"
                                            data-toggle="tooltip" title="Emoji">
                                            <i class='bx bx-smile'></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item m-r-15">
                                        <a class="text-gray font-size-20" href="javascript:void(0);"
                                            data-toggle="tooltip" title="Attachment">
                                            <i class='bx bx-paperclip'></i>
                                        </a>
                                    </li>
                                    <li class="list-inline-item">
                                        <button class="d-none d-md-block btn btn-primary">
                                            <span class="m-r-10">Send</span>
                                            <i class="far fa-paper-plane"></i>
                                        </button>
                                        <a href="javascript:void(0);" class="text-gray font-size-20 d-md-none d-block">
                                            <i class='bx bx-paper-plane' ></i>
                                        </a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div>
    </div>

    <script src="{{ asset('js/vendors.min.js') }}"></script>
    <script src="{{ asset('js/quill.min.js') }}"></script>
    <script src="{{ asset('js/mail.js') }}"></script>
    <script src="{{ asset('js/LoginPage.vendors.min.js') }}"></script>
    <script src="{{ asset('js/LoginPage.app.min.js') }}"></script>
@endsection

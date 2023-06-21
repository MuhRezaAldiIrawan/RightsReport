{{-- Extends layout --}}
@extends('components.layout')



{{-- Content --}}
@section('content')
    <link href="{{ asset('css/LoginPage.css') }}" rel="stylesheet">
    <div class="main-content">
        <div class="mail-wrapper">
            <div class="mail-nav" id="mail-nav">
                <div class="p-h-25 m-t-25">
                    <div class="p-b-15 d-md-none d-inline-block">
                        <a class="text-dark font-size-18 mail-close-nav" href="javascript:void(0);">
                            <i class="anticon anticon-menu-fold"></i>
                        </a>
                    </div>
                    <button class="btn btn-primary w-100 mail-open-compose">
                        <i class='bx bx-edit-alt'></i>
                        <span class="m-l-5">Compose</span>
                    </button>
                </div>
                <div class="p-v-15">
                    <ul class="menu nav flex-column">
                        <li class="nav-item">
                            <a href="" class="nav-link active">
                                <i class='bx bxs-inbox'></i>
                                <span>Inbox</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class='bx bx-mail-send'></i>
                                <span>Sent Mail</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class='bx bx-memory-card'></i>
                                <span>Drafts</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class='bx bx-star'></i>
                                <span>Favorite</span>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <i class='bx bx-trash'></i>
                                <span>Deleted</span>
                            </a>
                        </li>
                    </ul>
                    <ul class="menu nav flex-column m-t-25">
                        <li class="nav-item">
                            <h6 class="nav-link d-inline-block">Labels</h6>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <div class="d-flex align-items-center m-r-10">
                                    <span class="badge badge-success badge-dot m-r-10"></span>
                                    <span>Works</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <div class="d-flex align-items-center m-r-10">
                                    <span class="badge badge-danger badge-dot m-r-10"></span>
                                    <span>Private</span>
                                </div>
                            </a>
                        </li>
                        <li class="nav-item">
                            <a href="" class="nav-link">
                                <div class="d-flex align-items-center m-r-10">
                                    <span class="badge badge-warning badge-dot m-r-10"></span>
                                    <span>Important</span>
                                </div>
                            </a>
                        </li>
                    </ul>
                </div>
            </div>
            <div id="mail-list" class="mail-content">
                <div class="p-h-10 p-v-5 d-md-none d-inline-block">
                    <a class="text-dark font-size-18 mail-open-nav" href="javascript:void(0);">
                        <i class="anticon anticon-menu-unfold"></i>
                    </a>
                </div>
                <div class="row d-flex align-items-center justify-content-between p-10">
                    <div class="d-flex align-items-center col-md-3 m-b-10">
                        <div class="input-affix m-r-10">
                            <i class='prefix-icon bx bx-search-alt'></i>
                            {{-- <i class=" anticon anticon-search"></i> --}}
                            <input type="text" class="form-control" placeholder="Search">
                        </div>
                        <button class="btn btn-icon btn-default">
                            <i class='bx bx-refresh'></i>
                        </button>
                    </div>
                </div>
                @if (session('success'))
                    <div class="alert alert-success">
                        {{ session('success') }}
                    </div>
                @endif
                <div>
                    <div class="mail-list">
                        <div class="checkbox d-inline-block">
                            <input id="mail-checkbox-1" type="checkbox">
                            <label for="mail-checkbox-1"></label>
                        </div>
                        <table class="table list-info">
                            <tr>
                                <td class="list-sender">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-image avatar-sm">
                                            <img src="{{ asset('img/logo/logo100.png ') }}" alt="Logo">
                                        </div>
                                        <h6 class="m-l-10 m-b-0">Ahmad Fauzy</h6>
                                    </div>
                                </td>
                                <td class="list-content">
                                    <div class="list-msg">
                                        <span class="list-title">Kasus Kekerasan</span>
                                        <span class="m-h-5 d-none d-lg-inline-block"> - </span>
                                        <span class="list-text text-gray"> Hi Erin, Somebody's coming. Oh!
                                            Luke! Where's Leia? What? She didn't come back? I thought she
                                            was with you. We got separated. Hey, we better go look for her.
                                            Take the squad ahead. We'll meet at the shield generator at
                                            0300. Come on, Artoo. We'll need your scanners. Don't worry,
                                            Master Luke. We know what to do. And you said it was </span>
                                    </div>
                                </td>
                                <td class="list-date">
                                    <span>12:06PM</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                    <div class="mail-list">
                        <div class="checkbox d-inline-block">
                            <input id="mail-checkbox-3" type="checkbox">
                            <label for="mail-checkbox-3"></label>
                        </div>
                        <table class="table list-info">
                            <tr>
                                <td class="list-sender">
                                    <div class="media align-items-center">
                                        <div class="avatar avatar-image avatar-sm">
                                            <img src="{{ asset('img/logo/logo100.png ') }}" alt="Logo">
                                        </div>
                                        <h6 class="m-l-10 m-b-0">Marshall Nichols</h6>
                                    </div>
                                </td>
                                <td class="list-content">
                                    <div class="list-msg">
                                        <span class="list-title">Leave that to me</span>
                                        <span class="m-h-5 d-none d-lg-inline-block"> - </span>
                                        <span class="list-text text-gray"> Run! Yes. A Jedi's strength
                                            flows from the Force. But beware of the dark side.
                                            Anger...fear...aggression. The dark side of the Force are they.
                                        </span>
                                    </div>
                                </td>
                                <td class="list-date">
                                    <span>Feb 6</span>
                                </td>
                            </tr>
                        </table>
                    </div>
                </div>
                <div class="m-t-20 text-right">
                    {{-- Pagination --}}
                </div>
            </div>
            <div id="mail-content" class="mail-content d-none">
                <div class="d-lg-flex align-items-center justify-content-between">
                    <div class="media align-items-center m-b-15">
                        <a id="back" class="text-gray m-r-15 font-size-18" href="javascript:void(0);">
                            <i class='bx bx-arrow-back'></i>
                        </a>
                        <div class="avatar avatar-image">
                            <img src="{{ asset('img/logo/logo100.png ') }}" alt="Logo">
                        </div>
                        <div class="m-l-10">
                            <h6 class="m-b-0">Erin Gonzales</h6>
                            <span class="text-muted font-size-13">To: nathan@themenate.com</span>
                        </div>
                    </div>
                    <div class="d-flex align-items-center m-b-15 p-l-30">
                        <span class="text-gray m-r-15">12:06PM</span>
                        <a class="text-gray font-size-18 m-r-20">
                            <i class='bx bx-reply'></i>
                        </a>
                        <a class="text-gray font-size-18 m-r-20">
                            <i class='bx bx-star' ></i>
                        </a>
                        <a class="text-gray font-size-18 m-r-20">
                            <i class='bx bx-trash' ></i>
                        </a>
                    </div>
                </div>
                <div class="m-t-30 p-h-30">
                    <h4>All flight trooper</h4>
                    <div class="m-t-30">
                        <p>Hi Erin,</p>
                        <p>Somebody's coming. Oh! Luke! Where's Leia? What? She didn't come back? I thought
                            she was with you. We got separated. Hey, we better go look for her. Take the
                            squad ahead. We'll meet at the shield generator at 0300. Come on, Artoo. We'll
                            need your scanners. Don't worry, Master Luke. We know what to do. And you said
                            it was pretty here. Ugh!.</p>
                        <p>This can't be! Artoo, you're playing the wrong message. There will be no bargain.
                            We're doomed. I will not give up my favorite decoration. I like Captain Solo
                            where he is. Artoo, look! Captain Solo. And he's still frozen in carbonite. What
                            could possibly have come over Master Luke. Is it something I did? He never
                            expressed any unhappiness with my work. Oh! Oh! Hold it! Ohh!</p>
                        <p>Your fleet has lost. And your friends on the Endor moon will not survive. There
                            is no escape, my young apprentice. </p>
                        <p>Moruth Doole, </p>
                    </div>
                    <div class="m-t-30">
                        <a class="file" href="" style="min-width: 200px">
                            <div class="media align-items-center">
                                <div class="m-r-15 font-size-30">
                                    <i class='bx bxs-file-doc text-danger'></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Prospectus.doc</h6>
                                    <span class="font-size-13 text-muted">1MB</span>
                                </div>
                            </div>
                        </a>
                        <a class="file" href="" style="min-width: 200px">
                            <div class="media align-items-center">
                                <div class="m-r-15 font-size-30">
                                    <i class='bx bxs-file-doc text-success'></i>
                                </div>
                                <div>
                                    <h6 class="mb-0">Financial_Report.xls</h6>
                                    <span class="font-size-13 text-muted">652KB</span>
                                </div>
                            </div>
                        </a>
                    </div>
                </div>
            </div>
            <div id="mail-compose" class="mail-content d-none">
                <div class="p-b-15 m-r-15 d-md-none d-inline-block">
                    <a class="text-dark font-size-18 mail-open-nav" href="javascript:void(0);">
                        <i class="anticon anticon-menu-unfold"></i>
                    </a>
                </div>
                <h5 class="m-b-20">New Message</h5>
                <form action="/sendemail" method="post">
                    @csrf
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="To" id="to" name="to">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Subject" id="subject" name="subject">
                    </div>
                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="message" id="mail-compose-editor"
                            name="message">
                    </div>
                    <div class="text-right m-t-25">
                        <button class="m-r-10 btn btn-default mail-close-compose">Discard</button>
                        <button class="btn btn-primary" type="submit">Send</button>
                    </div>
                </form>
            </div>
        </div>
    </div>
<div></div>

    <script src="{{ asset('js/vendors.min.js') }}"></script>
    <script src="{{ asset('js/quill.min.js') }}"></script>
    <script src="{{ asset('js/mail.js') }}"></script>
    <script src="{{ asset('js/LoginPage.vendors.min.js') }}"></script>
    <script src="{{ asset('js/LoginPage.app.min.js') }}"></script>
@endsection

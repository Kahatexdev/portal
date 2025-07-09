@extends('layout.layout')

@php
$topToBottom = 'true';
$header = 'false';
@endphp

@section('content')
<!-- Simple‑DataTables CSS (boleh override styling-nya dengan Tailwind) -->
<link
  rel="stylesheet"
  href="https://cdn.jsdelivr.net/npm/simple-datatables@latest/dist/style.css"
/>

<style>
    /* -------------------------------------
   Kontainer
---------------------------------------*/
    .announcement-hero {
        background: var(--bs-white);
        overflow: hidden;
        position: relative;
        border-radius: .75rem;
        /* rounded-4 */
    }

    /* -------------------------------------
   Background Logo (floating)
---------------------------------------*/
    .floating-logo {
        animation: float 6s ease-in-out infinite;
        pointer-events: none;
    }

    @keyframes float {

        0%,
        100% {
            transform: translate(-50%, -50%) translateY(0);
        }

        50% {
            transform: translate(-50%, -50%) translateY(-10px);
        }
    }

    /* -------------------------------------
   Indicators: bulatan kecil di bawah
---------------------------------------*/
    .carousel-indicators {
        bottom: 1rem;
        /* geser ke atas 1rem dari bawah */
    }

    .carousel-indicators .custom-indicator {
        width: 12px;
        height: 12px;
        background-color: rgba(255, 255, 255, 0.5);
        border: none;
        margin: 0 .25rem;
        transition: background-color .3s, transform .3s;
    }

    .carousel-indicators .custom-indicator.active {
        background-color: var(--bs-primary);
        transform: scale(1.25);
    }

    /* -------------------------------------
   Gambar slide
---------------------------------------*/
    .carousel-image {
        object-fit: cover;
    }

    /* -------------------------------------
   Overlay gelap tipis di atas gambar
---------------------------------------*/
    .carousel-overlay {
        background: rgba(0, 0, 0, 0.35);
    }

    /* -------------------------------------
   Caption
---------------------------------------*/
    .carousel-caption {
        bottom: 1.5rem;
        left: 1.5rem;
        right: auto;
        text-align: left;
    }

    /* -------------------------------------
   Kontrol prev/next (panah)
---------------------------------------*/
    .custom-control {
        width: 2.5rem;
        height: 2.5rem;
    }

    .custom-control-icon {
        width: 100%;
        height: 100%;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .carousel-control-prev-icon,
    .carousel-control-next-icon {
        display: none;
        /* sembunyikan ikon default */
    }

    /* di resources/css/app.css (atau custom.css) */
.dataTable-dropdown select { @apply border-gray-300 rounded px-2 py-1 }
.dataTable-input { @apply border-gray-300 rounded px-2 py-1 w-full max-w-xs }
.dataTable-pagination li button { @apply px-3 py-1 rounded border border-gray-300 mx-1 }
.dataTable-pagination li.is-selected button { @apply bg-blue-600 text-white border-transparent }

    
</style>
<!-- Start Header Area -->
<header class="rbt-header rbt-header-default">
    <div class="rbt-sticky-placeholder"></div>
    <!-- Start Header Top  -->
    <div
        class="rbt-header-top rbt-header-top-1 variation-height-60 header-space-betwween bg-color-transparent top-expended-activation">
        <div class="container">
            <div class="top-expended-wrapper">
                <div class="top-expended-inner rbt-header-sec align-items-center ">
                    <div class="rbt-header-sec-col rbt-header-left">
                        <div class="rbt-header-content">
                            <div class="header-info d-none d-lg-block">
                                <ul class="rbt-information-list">
                                    <li>
                                        <a href="#kontak"><i class="feather-help-circle"></i>Ada Pertanyaan?</a>
                                    </li>
                                    <li>
                                        <a href="mailto:bpsock@bd.kaha.com"><i class="feather-mail"></i>bpsock@bd.kaha.com</a>
                                    </li>
                                    <li>
                                        <a href="#"><i class="feather-phone"></i>606</a>
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                    <div class="rbt-header-sec-col rbt-header-right mt_md--10 mt_sm--10">
                        <div class="rbt-header-content justify-content-start justify-content-lg-end">
                            <div class="header-info">

                            </div>
                            <div class="header-info">

                            </div>
                        </div>
                    </div>
                </div>
                <div class="header-info">
                    <div class="top-bar-expended d-block d-lg-none">
                        <button class="topbar-expend-button rbt-round-btn"><i
                                class="color-body feather-plus"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Header Top  -->

    <div class="rbt-header-wrapper  shadow-none">
        <div class="container">
            <div class="mainbar-row rbt-navigation-center align-items-center">
                <div class="header-left">
                    <div class="logo logo-dark">
                        <a href="#">
                            <img src="{{ asset('assets/images/logo/logokhtx.png') }}" alt="Education Logo Images">
                        </a>
                    </div>

                    <div class="logo d-none logo-light">
                        <a href="#">
                            <img src="{{ asset('assets/images/logo/logokhtx.png') }}" alt="Education Logo Images">
                        </a>
                    </div>
                </div>

                <div class="rbt-main-navigation d-none d-xl-block">
                    <nav class="mainmenu-nav">
                        <ul class="mainmenu">
                            <li class="position-static">
                                <a href="#portal">Portal</a>
                            </li>
                            <li class="position-static">
                                <a href="#pengumuman">Pengumuman</a>
                            </li>
                            <li class="position-static">
                                <a href="#kontak">Kontak Kami</a>
                            </li>
                        </ul>
                    </nav>
                </div>

                <div class="header-right">
                    <!-- Navbar Icons -->
                    <div class="rbt-btn-wrapper d-none d-xl-block ml--20">
                        <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm hover-transform-none" href="#aduan">
                            <span data-text="Daftar Aduan">Daftar Aduan</span>
                        </a>
                    </div>
                    <div class="rbt-btn-wrapper d-none d-xl-block ml--20">
                        <a class="rbt-btn rbt-switch-btn btn-gradient btn-sm hover-transform-none" href="#portal">
                            <span data-text="Masuk Portal">Masuk Portal</span>
                        </a>
                    </div>

                    <!-- Start Mobile-Menu-Bar -->
                    <div class="mobile-menu-bar ml--5 d-block d-xl-none">
                        <div class="hamberger">
                            <button class="hamberger-button">
                                <i class="feather-menu"></i>
                            </button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</header>
<!-- Mobile Menu Section -->

<div class="popup-mobile-menu">
    <div class="inner-wrapper">
        <div class="inner-top">
            <div class="content">
                <div class="logo">
                    <div class="logo logo-dark">
                        <a href="#">
                            <img src="{{ asset('assets/images/logo/logokhtx.png') }}" alt="Education Logo Images">
                        </a>
                    </div>

                    <div class="logo d-none logo-light">
                        <a href="#">
                            <img src="{{ asset('assets/images/logo/logokhtx.png') }}"
                                alt="Education Logo Images">
                        </a>
                    </div>
                </div>
                <div class="rbt-btn-close">
                    <button class="close-button rbt-round-btn"><i class="feather-x"></i></button>
                </div>
            </div>
            <p class="description">
                PORTAL KAHATEX DEPT KAOSKAKI merupakan portal resmi yang bertujuan untuk mempermudah
                dan meningkatkan efisiensi dalam proses pengelolaan data produksi.
            </p>
            <ul class="navbar-top-left rbt-information-list justify-content-start">
                <li>
                    <a href="mailto:bpsock@bd.kaha.com"><i class="feather-mail"></i>bpsock@bd.kaha.com</a>
                </li>
                <li>
                    <a href="#"><i class="feather-phone"></i>606</a>
                </li>
            </ul>
        </div>

        <nav class="mainmenu-nav">
            <ul class="mainmenu">
                <li class="position-static">
                    <a href="#">Portal</a>
                </li>
                <li class="position-static">
                    <a href="#">Pengumuman</a>
                </li>
                <li class="position-static">
                    <a href="#">Kontak Kami</a>
                </li>
            </ul>
        </nav>

        <div class="mobile-menu-bottom">
            {{-- <div class="rbt-btn-wrapper mb--20">
                    <a class="rbt-btn btn-border-gradient radius-round btn-sm hover-transform-none w-100 justify-content-center text-center" href="#">
                        <span>Enroll Now</span>
                    </a>
                </div> --}}

            {{-- <div class="social-share-wrapper">
                    <span class="rbt-short-title d-block">Find With Us</span>
                    <ul class="social-icon social-default transparent-with-border justify-content-start mt--20">
                        <li><a href="https://www.facebook.com/">
                                <i class="feather-facebook"></i>
                            </a>
                        </li>
                        <li><a href="https://www.twitter.com">
                                <i class="feather-twitter"></i>
                            </a>
                        </li>
                        <li><a href="https://www.instagram.com/">
                                <i class="feather-instagram"></i>
                            </a>
                        </li>
                        <li><a href="https://www.linkdin.com/">
                                <i class="feather-linkedin"></i>
                            </a>
                        </li>
                    </ul>
                </div> --}}
        </div>

    </div>
</div>

<main class="rbt-main-wrapper">
    <!-- Start Banner Area  -->
    <div class="rbt-banner-area rbt-banner-20 position-relative">
        <div class="wrapper">
            <div class="circle-sd-wrapper">
                <div class="circle-shadow-1">
                    <img src="{{ asset('assets/images/shape/shadow-1.png') }}" alt="Bannder Shadow">
                </div>
                <div class="circle-shadow-2">
                    <img src="{{ asset('assets/images/shape/shadow-2.png') }}" alt="Bannder Shadow">
                </div>
                <div class="circle-shadow-3">
                    <img src="{{ asset('assets/images/shape/shadow-3.png') }}" alt="Bannder Shadow">
                </div>
            </div>
            <div class="shapes-wrapper">
                <div class="curve-line-1">
                    <img src="{{ asset('assets/images/shape/curve-line-1.png') }}" alt="Banner Line">
                </div>
                <div class="curve-line-2">
                    <img src="{{ asset('assets/images/shape/curve-line-2.png') }}" alt="Banner Line">
                </div>
                <div class="curve-line-3">
                    <img src="{{ asset('assets/images/shape/curve-line-3.png') }}" alt="Banner Line">
                </div>
                <div class="curve-line-4">
                    <img src="{{ asset('assets/images/shape/curve-line-4.png') }}" alt="Banner Line">
                </div>
                <div class="shape-hand scene">
                    <span data-depth="2">
                        <img src="{{ asset('assets/images/shape/hand-cap.png') }}" alt="Banner hand">
                    </span>
                </div>
                <div class="dot-bg">
                    <img src="{{ asset('assets/images/shape/dot-bg.png') }}" alt="Banner Dot">
                </div>
                <div class="dot-element scene">
                    <span data-depth="2">
                        <img src="{{ asset('assets/images/shape/dot-element.png') }}" alt="Banner Dot">
                    </span>
                </div>
            </div>

            <div class="container">
                <div class="row align-items-center">
                    <!-- Announcement Carousel Section -->
                    <div class="col-xl-6" >
                        <div class="announcement-hero shadow-lg" style="height: 500px; position: relative;">
                            <!-- Carousel -->
                            <div id="announcementCarousel"
                                class="carousel carousel-dark slide h-100"
                                data-bs-ride="carousel"
                                data-bs-interval="5000"
                                data-bs-pause="hover">

                                <!-- Carousel Indicators -->
                                <div class="carousel-indicators">
                                    @foreach($pengumuman as $i => $announcement)
                                    <button type="button"
                                        data-bs-target="#announcementCarousel"
                                        data-bs-slide-to="{{ $i }}"
                                        class="rounded-circle custom-indicator @if($i === 0) active @endif"
                                        @if($i===0) aria-current="true" @endif
                                        aria-label="Slide {{ $i + 1 }}">
                                    </button>
                                    @endforeach
                                </div>

                                <!-- Carousel Slides -->
                                <div class="carousel-inner h-100 rounded-4">
                                    @forelse($pengumuman as $i => $announcement)
                                    <div class="carousel-item h-100 @if($i === 0) active @endif"
                                        data-bs-interval="{{ $announcement->interval ?? 5000 }}">

                                        <!-- Slide Image -->
                                        <div class="position-relative h-100">
                                            <img src="{{ asset($announcement->image 
                                                                        ? 'public/storage/' . $announcement->image 
                                                                        : '') }}"
                                                class="d-block w-100 h-100 carousel-image"
                                                alt="{{ $announcement->title }}" />
                                            <div class="position-absolute top-0 start-0 w-100 h-100 carousel-overlay"></div>
                                        </div>

                                        <!-- Slide Content -->
                                        <div class="carousel-caption d-block text-start">
                                            <span class="badge bg-primary rounded-pill mb-2 px-3 py-2">
                                                <i class="fas fa-bullhorn me-2"></i>Pengumuman
                                            </span>

                                            <h2 class="h4 fw-bold mb-2 text-white">
                                                {{ $announcement->title }}
                                            </h2>

                                            <p class="text-white-50 mb-3 d-none d-md-block">
                                                {{ Str::limit($announcement->content, 120) }}
                                            </p>

                                            <div class="d-flex align-items-center gap-3 text-white-50">
                                                <small>
                                                    <i class="fas fa-calendar-alt me-2"></i>
                                                    {{ $announcement->created_at->format('d M Y') }}
                                                </small>
                                                <small class="d-none d-sm-flex">
                                                    <i class="fas fa-clock me-2"></i>
                                                    {{ $announcement->created_at->format('H:i') }}
                                                </small>
                                            </div>
                                        </div>
                                    </div>
                                    @empty
                                    <div class="carousel-item active h-100">
                                        <div class="d-flex h-100 align-items-center justify-content-center">
                                            <p class="text-muted mb-0">
                                                Tidak ada pengumuman terbaru.
                                            </p>
                                        </div>
                                    </div>
                                    @endforelse
                                </div>

                                <!-- Carousel Controls -->
                                <button class="carousel-control-prev custom-control"
                                    type="button"
                                    data-bs-target="#announcementCarousel"
                                    data-bs-slide="prev">
                                    <span class="visually-hidden">Previous</span>
                                </button>

                                <button class="carousel-control-next custom-control"
                                    type="button"
                                    data-bs-target="#announcementCarousel"
                                    data-bs-slide="next">
                                    <span class="visually-hidden">Next</span>
                                </button>
                            </div>
                        </div>
                    </div>

                    <!-- Language World Section -->
                    <div class="col-xl-6">
                        @php
                        $count = $portals->count();
                        $containerSize = 500;
                        $borderWidth = 2;
                        $center = $containerSize / 2; // 250
                        $R = $center - $borderWidth / 2; // 249
                        $flagSize = 50;
                        $flagHalf = $flagSize / 2; // 25
                        @endphp

                        <div class="language-world" style="width: 500px; height: 500px;">
                            <!-- World Background -->
                            <div class="world">
                                <img src="{{ asset('assets/images/shape/world.png') }}" alt="World Map">
                            </div>

                            <!-- Portal Flags -->
                            <div class="flages">
                                @foreach ($portals as $portal)
                                @php
                                // Calculate angle for even distribution starting from top
                                $angle = ((2 * pi()) / $count) * $loop->index - pi() / 2;

                                // Calculate flag center position
                                $x = $center + $R * cos($angle);
                                $y = $center + $R * sin($angle);
                                @endphp

                                <div class="flag"
                                    data-tooltip="{{ $portal->name }}"
                                    tabindex="0"
                                    style="position: absolute; 
                                                    top: {{ round($y - $flagHalf) }}px; 
                                                    left: {{ round($x - $flagHalf) }}px;">
                                    <img src="{{ asset('public/storage/' . $portal->image) }}"
                                        alt="{{ $portal->name }}">
                                </div>
                                @endforeach
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Banner Area  -->


    <!-- Start Course Area -->
    <div class="rbt-course-area rbt-section-gapBottom rbt-section-gapTop" id="portal">
        <div class="container">
            <div class="row mb--30">
                <div class="col-lg-12">
                    <div class="section-title text-center">
                        {{-- <h6 class="b2 mb--15"><span class="theme-gradient">Our Course</span></h6> --}}
                        <h2 class="title w-600">PORTAL KAHATEX<br> <span class="theme-gradient">DEPT KAOSKAKI</span>
                        </h2>
                    </div>
                </div>
            </div>
            <div class="row mb--40">
                <div class="col-lg-12">
                    {{-- 1) Tab Buttons --}}
                    <ul class="rbt-course-tab-button nav nav-tabs" id="rbt-myTab" role="tablist">

                        @foreach ($portalsByCategory as $category => $items)
                        <li class="nav-item" role="presentation">
                            @php
                            $isActive =
                            request()->get('tab') === $category ||
                            ($loop->first && !request()->has('tab'));
                            @endphp

                            <button class="@if ($isActive) active @endif"
                                id="{{ $category }}-tab" data-bs-toggle="tab"
                                data-bs-target="#{{ $category }}" type="button" role="tab"
                                aria-controls="{{ $category }}"
                                aria-selected="{{ $isActive ? 'true' : 'false' }}">
                                <span class="icon">
                                    @switch($category)
                                    @case('Apps')
                                    <i class="feather-grid"></i>
                                    @break
                                    @endswitch
                                </span>
                                <span class="btn-text">{{ strtoupper($category) }}</span>
                            </button>
                        </li>
                        @endforeach
                    </ul>
                </div>
            </div>

            {{-- 2) Tab Panes --}}
            <div class="tab-content mt-4" id="rbt-myTabContent">
                @foreach ($portalsByCategory as $category => $items)
                <div class="tab-pane fade @if ($loop->first) show active @endif"
                    id="{{ $category }}" role="tabpanel" aria-labelledby="{{ $category }}-tab">
                    <div class="row g-5">
                        @foreach ($items as $portal)
                        <div class="col-xl-4 col-lg-4 col-md-6 col-sm-6 col-12" data-sal="slide-up"
                            data-sal-delay="150" data-sal-duration="800">
                            <div class="rbt-card variation-03 rbt-hover">
                                <div class="rbt-card-img">
                                    <a class="thumbnail-link" href="{{ $portal->url }}" target="_blank">
                                        <img src="{{ asset('public/storage/' . $portal->image) }}"
                                            alt="{{ $portal->name }}" style="width:100%; height:200px; object-fit:cover;">
                                        <span class="rbt-btn btn-white icon-hover btn-md">
                                            <span class="btn-text">MASUK PORTAL</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </span>
                                    </a>
                                </div>
                                <div class="card-body text-center">
                                    <h5 class="card-title">
                                        <a href="{{ $portal->url }}" target="_blank">
                                            {{ $portal->name }}
                                        </a>
                                    </h5>
                                    <div class="text-center">
                                        {{ $portal->description ?? '' }}
                                    </div>
                                </div>
                            </div>
                        </div>
                        @endforeach
                        @if ($items->isEmpty())
                        <div class="col-12 text-center text-muted">
                            Tidak ada portal pada kategori <strong>{{ $category }}</strong>.
                        </div>
                        @endif
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- End Course Area -->
    <!-- Start Blog Area -->
    <div class="rbt-blog-area rbt-sec-cir-shadow-1 rbt-section-gap bg-color-extra2 rbt-section-box">
        <div class="gradient-shape-top version-02"></div>
        <div class="gradient-shape-bottom version-02"></div>
        <div class="container">
            <div class="row mb--60 g-5 align-items-end">
                <div class="col-lg-8 col-md-8 col-12">
                    <div class="section-title text-start">
                        {{-- <h6 class="b2 mb--15"><span class="theme-gradient">Pengumuman</span></h6> --}}
                        <h2 class="title w-600">Pengumunan <span class="theme-gradient">Terbaru</span></h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-12">
                    <div class="load-more-btn text-start text-md-end">
                        {{-- icon pengumuman --}}
                        {{-- <a class="rbt-btn btn-gradient btn-sm hover-icon-reverse" href="#pengumuman">
                                <span class="icon-reverse-wrapper">
                                    <span class="btn-text">Lihat Semua</span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                </span>
                            </a> --}}
                    </div>
                </div>
            </div>
            <!-- Start Card Area -->
            <div class="row g-5" data-sal="slide-up" data-sal-delay="150" data-sal-duration="800" id="pengumuman">
                {{-- Loop through announcements --}}
                @forelse ($announcements as $announcement)
                <div class="col-lg-4 col-md-6 col-sm-12 col-12">
                    <div class="rbt-card variation-02 rbt-hover">
                        <div class="rbt-card-img"
                            style="width:390px; height:260px; overflow:hidden; display:flex; align-items:center; justify-content:center;">
                            <a href="#pengumuman"
                                style="width:100%; height:100%; display:flex; align-items:center; justify-content:center;">
                                <img src="{{ asset('public/storage/' . $announcement->image) }}" alt="Card image"
                                    style="width:100%; height:100%; object-fit:cover;">
                            </a>
                        </div>
                        <div class="rbt-card-body">
                            <h5 class="rbt-card-title"><a
                                    href="#pengumuman">{{ $announcement->title }}</a>
                            </h5>
                            <p class="rbt-card-text">{{ $announcement->content }}</p>
                            {{-- <div class="rbt-card-bottom">
                                        <a class="transparent-button" href="{{ route('courseDetails') }}">Lihat
                            Selengkapnya<i><svg width="17" height="12"
                                    xmlns="http://www.w3.org/2000/svg">
                                    <g stroke="#27374D" fill="none" fill-rule="evenodd">
                                        <path d="M10.614 0l5.629 5.629-5.63 5.629" />
                                        <path stroke-linecap="square" d="M.663 5.572h14.594" />
                                    </g>
                                </svg></i></a>
                        </div> --}}
                    </div>
                </div>
            </div>
            @empty
            <div class="col-12 text-center">
                <p class="text-muted">Tidak ada pengumuman terbaru.</p>
            </div>
            @endforelse
        </div>
        <!-- End Card Area -->
    </div>
    </div>
    <!-- End Blog Area -->

    <!-- Start Countdown Area -->
    <div class="rbt-countdown-area bg_image bg_image--6 bg_image_fixed rbt-section-gap" data-black-overlay="5"
        id="kontak">
        <div class="container">
            <div class="row g-5 align-items-center">
                <div class="col-lg-6">
                    <div class="inner">
                        <div class="section-title text-start">
                            <span class="subtitle bg-white-opacity">Kontak Kami</span>
                            <h2 class="title color-white">Silakan Hubungi Kami :</h2>
                            <p class="description has-medium-font-size mt--20 mb--0 color-white opacity-7">
                                Email: <a href="mailto:bpsock@bd.kaha.com" class="color-white">bpsock@bd.kaha.com</a><br>
                                Telepon: <a href="tel:606" class="color-white">606</a>
                            </p>
                        </div>
                        <div class="countdown-style-1 mt--50">
                            <div class="countdown realtime-clock">
                                <div class="countdown-container hours">
                                    <span id="clock-hours" class="countdown-value">00</span>
                                    <span class="countdown-heading">Jam</span>
                                </div>
                                <div class="countdown-container minutes">
                                    <span id="clock-minutes" class="countdown-value">00</span>
                                    <span class="countdown-heading">Menit</span>
                                </div>
                                <div class="countdown-container seconds">
                                    <span id="clock-seconds" class="countdown-value">00</span>
                                    <span class="countdown-heading">Detik</span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-6">
                    <div class="rbt-contact-form contact-form-style-1 w-100">
                        <div class="section-title text-start">
                            <span class="subtitle bg-primary-opacity">KOTAK PENGADUAN</span>
                        </div>
                        <h3 class="title">Silahkan Isi Form di bawah ini</h3>
                        <form id="contact-form" class="w-100" action="{{ route('suggestionBox.store') }}" method="POST">
                            {{-- CSRF Token --}}
                            @csrf
                            <div class="form-group">
                                <input name="name" type="text">
                                <label>Nama</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <input name="bagian" type="text">
                                <label>Bagian</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-group">
                                <textarea name="message" rows="4"></textarea>
                                <label>Masukan Aduan disini</label>
                                <span class="focus-border"></span>
                            </div>
                            <div class="form-submit-group mt--40">
                                <button type="submit" class="rbt-btn btn-gradient hover-icon-reverse w-100">
                                    <span class="icon-reverse-wrapper">
                                        <span class="btn-text">Kirim Saran</span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                    </span>
                                </button>
                            </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Countdown Area -->

    <!-- Start breadcrumb Area -->
    <div class="rbt-breadcrumb-default ptb--100 ptb_md--50 ptb_sm--30 bg-gradient-1" id="aduan">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="breadcrumb-inner text-center">
                        <h2 class="title">Daftar Aduan</h2>
                        <ul class="page-list">
                            <li class="rbt-breadcrumb-item"><a href="#">Home</a></li>
                            <li>
                                <div class="icon-right"><i class="feather-chevron-right"></i></div>
                            </li>
                            <li class="rbt-breadcrumb-item active">Daftar Pengaduan</li>
                        </ul>
                    </div>

                    {{-- table from suggentions box --}}
                    <div class="table-responsive mt-8">
                        <table id="suggestions-table" class="min-w-full divide-y divide-gray-200">
                          <thead class="bg-blue-600 text-white">
                            <tr>
                              <th class="px-4 py-2">No</th>
                              <th class="px-4 py-2">Nama</th>
                              <th class="px-4 py-2">Bagian</th>
                              <th class="px-4 py-2">Saran</th>
                              <th class="px-4 py-2">Tanggal</th>
                              <th class="px-4 py-2">Balasan</th>
                              <th class="px-4 py-2">Status</th>
                            </tr>
                          </thead>
                          <tbody class="bg-white divide-y divide-gray-200">
                            @foreach ($suggestions as $index => $s)
                            <tr>
                              <td class="px-4 py-3">{{ $index + 1 }}</td>
                              <td class="px-4 py-3">{{ $s->name }}</td>
                              <td class="px-4 py-3">{{ $s->bagian }}</td>
                              <td class="px-4 py-3">{{ $s->message }}</td>
                              <td class="px-4 py-3">{{ $s->created_at->format('d M Y H:i') }}</td>
                              <td class="px-4 py-3">
                                @if ($s->reply) {{ $s->reply }}
                                @else <span class="text-gray-500">Belum ada balasan</span>
                                @endif
                              </td>
                              <td class="px-4 py-3">
                                @if ($s->status==='pending')
                                  <span class="inline-block px-2 py-1 bg-yellow-200 text-yellow-800 rounded">Pending</span>
                                @elseif ($s->status==='replied')
                                  <span class="inline-block px-2 py-1 bg-green-200 text-green-800 rounded">Replied</span>
                                @else
                                  <span class="inline-block px-2 py-1 bg-gray-200 text-gray-600 rounded">Unknown</span>
                                @endif
                              </td>
                            </tr>
                            @endforeach
                          </tbody>
                        </table>
                      </div>
                      
                </div>
            </div>
        </div>
    </div>
    <!-- End Breadcrumb Area -->

    <!-- Start Footer aera -->
    <footer class="rbt-footer footer-style-1 bg-color-white">
        <div class="footer-top">
            <div class="container">
                <div class="row g-5">
                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <div class="logo logo-dark">
                                <a href="#">
                                    <img src="{{ asset('assets/images/logo/logokhtx.png') }}" alt="Edu-cause">
                                </a>
                            </div>
                            <div class="logo d-none logo-light">
                                <a href="#">
                                    <img src="{{ asset('assets/images/logo/logokhtx.png') }}" alt="Edu-cause">
                                </a>
                            </div>

                            <p class="description mt--20">PORTAL KAHATEX DEPT KAOSKAKI merupakan portal resmi
                                yang bertujuan untuk mempermudah dan meningkatkan efisiensi dalam proses
                                pengelolaan data produksi.</p>

                            {{-- <ul class="social-icon social-default justify-content-start">
                                    <li><a href="https://www.facebook.com/">
                                            <i class="feather-facebook"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.twitter.com">
                                            <i class="feather-twitter"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.instagram.com/">
                                            <i class="feather-instagram"></i>
                                        </a>
                                    </li>
                                    <li><a href="https://www.linkdin.com/">
                                            <i class="feather-linkedin"></i>
                                        </a>
                                    </li>
                                </ul> --}}

                            {{-- <div class="contact-btn mt--30">
                                    <a class="rbt-btn hover-icon-reverse btn-border-gradient radius-round" href="#">
                                        <div class="icon-reverse-wrapper">
                                            <span class="btn-text">Kontak Kami</span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                            <span class="btn-icon"><i class="feather-arrow-right"></i></span>
                                        </div>
                                    </a>
                                </div> --}}
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            {{-- <h5 class="ft-title">Our Company</h5>
                                <ul class="ft-link">
                                    <li>
                                        <a href="{{ route('contact') }}">Contact Us</a>
                            </li>
                            <li>
                                <a href="{{ route('becomeTeacher') }}">Become Teacher</a>
                            </li>
                            <li>
                                <a href="{{ route('blog') }}">Blog</a>
                            </li>
                            <li>
                                <a href="{{ route('instructor') }}">Instructor</a>
                            </li>
                            <li>
                                <a href="{{ route('eventList') }}">Events</a>
                            </li>
                            <li>
                                <a href="{{ route('courseFilterOneToggle') }}">Course</a>
                            </li>
                            <li>
                                <a href="{{ route('contact') }}">Contact</a>
                            </li>
                            </ul> --}}
                        </div>
                    </div>

                    <div class="col-lg-2 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5 class="ft-title">Tautan Berguna</h5>
                            <ul class="ft-link">
                                <li>
                                    <a href="#portal">Portal</a>
                                </li>
                                <li>
                                    <a href="#pengumuman">Pengumuman</a>
                                </li>
                                <li>
                                    <a href="#kontak">Kontak</a>
                                </li>
                            </ul>
                        </div>
                    </div>

                    <div class="col-lg-4 col-md-6 col-sm-6 col-12">
                        <div class="footer-widget">
                            <h5 class="ft-title">Hubungi Kami</h5>
                            <ul class="ft-link">
                                <li><span>Telepon :</span> <a href="#">606</a></li>
                                <li><span>E-mail :</span> <a href="mailto:bpsock@bd.kaha.com">bpsock@bd.kaha.com</a></li>
                                {{-- <li><span>Lokasi :</span> <a href="#">BP TrainingSchool</a></li> --}}
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="rbt-separator-mid">
            <div class="container">
                <hr class="rbt-separator m-0">
            </div>
        </div>
        <!-- Start Copyright Area  -->
        <div class="copyright-area copyright-style-1 ptb--20">
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                        <p class="rbt-link-hover text-center text-lg-start">Copyright © {{ date('Y') }} <a
                                href="https://woz-u.com/wp-content/uploads/2020/04/how-stressful-is-software-development-woz-u-1280x720.jpg"
                                target="_blank">Digitalisasi Sock Team.</a></p>
                    </div>
                    <div class="col-xxl-6 col-xl-6 col-lg-6 col-md-12 col-12">
                        <ul
                            class="copyright-link rbt-link-hover justify-content-center justify-content-lg-end mt_sm--10 mt_md--10">
                            <li><a href="#">Terms of service</a></li>
                            <li><a href="#">Privacy policy</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <!-- End Copyright Area  -->
    </footer>
    <!-- End Footer aera -->
</main>
<!-- Simple‑DataTables JS -->
<script src="https://cdn.jsdelivr.net/npm/simple-datatables@latest" defer></script>

    <script>
document.addEventListener('DOMContentLoaded', () => {
  new simpleDatatables.DataTable("#suggestions-table", {
    searchable: true,
    fixedHeight: true,
    perPage: 10,
    sortable: true,
    labels: {
      placeholder: "🔍 Cari...",
      perPage: "Menampilkan {select} entri per halaman",
      noRows: "Data tidak ditemukan",
      info: "Menampilkan {start}–{end} dari {rows} entri"
    }
  });
});
</script>
  
<script>
    // Smooth scroll effect for anchor links
    document.addEventListener('DOMContentLoaded', function() {
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                const targetId = this.getAttribute('href').substring(1);
                const target = document.getElementById(targetId);
                if (target) {
                    e.preventDefault();
                    window.scrollTo({
                        top: target.getBoundingClientRect().top + window.pageYOffset -
                            80,
                        behavior: 'smooth'
                    });
                }
            });
        });
    });

    function updateClock() {
        const now = new Date();
        document.getElementById('clock-hours').textContent = String(now.getHours()).padStart(2, '0');
        document.getElementById('clock-minutes').textContent = String(now.getMinutes()).padStart(2, '0');
        document.getElementById('clock-seconds').textContent = String(now.getSeconds()).padStart(2, '0');
    }

    // Update clock immediately and every second
    updateClock();
    setInterval(updateClock, 1000);
</script>
@endsection
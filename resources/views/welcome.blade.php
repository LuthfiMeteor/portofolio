@extends('layout.app')
@section('konten')
    @include('komponen.navbar')
    <!-- Main Section-->
    <section class="py-3 ">
        <!-- Page Content Goes Here -->

        <div class="container" data-scroll-section>

            <!-- Hero-->
            <div class="mb-lg-10">
                <p class="subtitle-sm" data-scroll data-scroll-speed="2" data-scroll-position="top">Hello there!</p>
                <h1 class="display-1 mb-4" data-scroll data-scroll-speed="4" data-scroll-position="top">I am Luthfi Novalino
                    Pratama</h1>
                <p data-scroll data-scroll-speed="6" data-scroll-position="top" class="lead typed-elem">A Student From SMKN 1
                    KTAPANG As <span class="fw-bold text-highlight"
                        data-typed='{"backSpeed": 50,"strings": ["frontend developer", "Helper"]}'></span><span
                        class="d-block">Focus in Laravel, HTML & Bootstrap</span></p>
            </div> <!-- /Hero-->

            <!-- Latest Projects Slideshow Top-->
            <div>
                <h2 class="display-6 border-bottom pb-5 mb-5 fade-in-up" data-scroll data-scroll-position="bottom">My
                    Project</h2>
                <div class="position-relative">
                    <div class="swiper-container swiper-linked-top">
                        <div class="swiper-wrapper">
                            <div class="swiper-slide cursor-pointer">
                                <picture>
                                    <img class="img-fluid" src="{{ asset('./assets/images/read.png') }}" alt="">
                                </picture>
                            </div>
                            <div class="swiper-slide cursor-pointer">
                                <picture>
                                    <img class="img-fluid" src="{{ asset('./assets/images/pos.png') }}" alt="">
                                </picture>
                            </div>
                            <div class="swiper-slide cursor-pointer">
                                <picture>
                                    <img class="img-fluid" src="{{ asset('./assets/images/lks.png') }}" alt="">
                                </picture>
                            </div>
                            <div class="swiper-slide cursor-pointer">
                                <picture>
                                    <img class="img-fluid" src="{{ asset('./assets/images/elektro.png') }}" alt="">
                                </picture>
                            </div>
                            <div class="swiper-slide cursor-pointer">
                                <picture>
                                    <img class="img-fluid" src="{{ asset('./assets/images/pplg.png') }}" alt="">
                                </picture>
                            </div>
                        </div>
                    </div>
                    <div class="swiper-prev swiper-btn"><i class="ri-arrow-left-line"></i></div>
                    <div class="swiper-next swiper-btn"><i class="ri-arrow-right-line"></i></div>
                </div>
            </div>
            <!-- / Latest Projects Slideshow Top-->

            <!-- Latest Projects Slideshow Bottom-->
            <div class="mt-3 mb-5">
                <div class="swiper-container swiper-linked-bottom">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="row gx-4 align-items-center">

                                <!-- Slide Image-->
                                <div class="col-12 col-md-6" data-swiper-parallax-x="-100">
                                    <picture>
                                        <img class="img-fluid" src="{{ asset('./assets/images/read.png') }}" alt="">
                                    </picture>
                                </div>
                                <!-- / Slide Image -->

                                <!-- Slide Text-->
                                <div class="col-12 col-md-6">
                                    <p class="subtitle-xs mb-0 mt-4 mt-md-0" data-swiper-parallax-x="-100"><span
                                            class='me-2'>Comic</span> &middot; <span class='ms-2'>Laravel 10</span></p>
                                    <p class="fw-bolder lead mb-3 mt-2" data-swiper-parallax-x="-150">Readverse</p>
                                    <p class="small text-muted mb-2" data-swiper-parallax-x="-200">website to read sercar
                                        comics online.</p>
                                    <div class="mt-3" data-swiper-parallax-y="-15">
                                        <a class="link-body" href="#">View Project</a>
                                    </div>
                                </div>
                                <!-- / Slide Text-->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row gx-4 align-items-center">

                                <!-- Slide Image-->
                                <div class="col-12 col-md-6" data-swiper-parallax-x="-100">
                                    <picture>
                                        <img class="img-fluid" src="{{ asset('./assets/images/pos.png') }}" alt="">
                                    </picture>
                                </div>
                                <!-- / Slide Image -->

                                <!-- Slide Text-->
                                <div class="col-12 col-md-6">
                                    <p class="subtitle-xs mb-0 mt-4 mt-md-0" data-swiper-parallax-x="-100"><span
                                            class='me-2'>Storage</span> &middot; <span class='ms-2'>LARAVEL 10</span>
                                    </p>
                                    <p class="fw-bolder lead mb-3 mt-2" data-swiper-parallax-x="-150">HARNOKO POS</p>
                                    <p class="small text-muted mb-2" data-swiper-parallax-x="-200">Purchasing and stock
                                        management application.</p>
                                    <div class="mt-3" data-swiper-parallax-y="-15">
                                        <a class="link-body" href="#">View Project</a>
                                    </div>
                                </div>
                                <!-- / Slide Text-->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row gx-4 align-items-center">

                                <!-- Slide Image-->
                                <div class="col-12 col-md-6" data-swiper-parallax-x="-100">
                                    <picture>
                                        <img class="img-fluid" src="{{ asset('./assets/images/lks.png') }}" alt="">
                                    </picture>
                                </div>
                                <!-- / Slide Image -->

                                <!-- Slide Text-->
                                <div class="col-12 col-md-6">
                                    <p class="subtitle-xs mb-0 mt-4 mt-md-0" data-swiper-parallax-x="-100"><span
                                            class='me-2'>Ecommerce</span> &middot; <span class='ms-2'>LARAVEL 10</span>
                                    </p>
                                    <p class="fw-bolder lead mb-3 mt-2" data-swiper-parallax-x="-150">TOKO LKS</p>
                                    <p class="small text-muted mb-2" data-swiper-parallax-x="-200">Program For Tester LKS
                                        Smkn 1 Katapang.</p>
                                    <div class="mt-3" data-swiper-parallax-y="-15">
                                        <a class="link-body" href="#">View Project</a>
                                    </div>
                                </div>
                                <!-- / Slide Text-->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row gx-4 align-items-center">

                                <!-- Slide Image-->
                                <div class="col-12 col-md-6" data-swiper-parallax-x="-100">
                                    <picture>
                                        <img class="img-fluid" src="{{ asset('./assets/images/elektro.png') }}"
                                            alt="">
                                    </picture>
                                </div>
                                <!-- / Slide Image -->

                                <!-- Slide Text-->
                                <div class="col-12 col-md-6">
                                    <p class="subtitle-xs mb-0 mt-4 mt-md-0" data-swiper-parallax-x="-100"><span
                                            class='me-2'>PROFILE</span> &middot; <span class='ms-2'>HTML & CSS</span>
                                    </p>
                                    <p class="fw-bolder lead mb-3 mt-2" data-swiper-parallax-x="-150">Elektronika Profile
                                    </p>
                                    <p class="small text-muted mb-2" data-swiper-parallax-x="-200">Website Profile
                                        Elektronika Industri From Smkn 1 Katapang.</p>
                                    <div class="mt-3" data-swiper-parallax-y="-15">
                                        <a class="link-body" href="#">View Project</a>
                                    </div>
                                </div>
                                <!-- / Slide Text-->
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="row gx-4 align-items-center">

                                <!-- Slide Image-->
                                <div class="col-12 col-md-6" data-swiper-parallax-x="-100">
                                    <picture>
                                        <img class="img-fluid" src="{{ asset('./assets/images/pplg.png') }}"
                                            alt="">
                                    </picture>
                                </div>
                                <!-- / Slide Image -->

                                <!-- Slide Text-->
                                <div class="col-12 col-md-6">
                                    <p class="subtitle-xs mb-0 mt-4 mt-md-0" data-swiper-parallax-x="-100"><span
                                            class='me-2'>PROFILE</span> &middot; <span class='ms-2'>LARAVEL 10</span>
                                    </p>
                                    <p class="fw-bolder lead mb-3 mt-2" data-swiper-parallax-x="-150">PPLG CLASS PROFILE
                                        (My Class)</p>
                                    <p class="small text-muted mb-2" data-swiper-parallax-x="-200">Webste Profile PPLG2
                                        Class From Smkn 1 Katapang.</p>
                                    <div class="mt-3" data-swiper-parallax-y="-15">
                                        <a class="link-body" href="https://eleven.pplg2.my.id">View Project</a>
                                    </div>
                                </div>
                                <!-- / Slide Text-->
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <!-- / Latest Projects Slideshow Bottom-->

            <!-- /Page Content -->
    </section>
    <!-- / Main Section-->
    @include('komponen.footer')
@endsection

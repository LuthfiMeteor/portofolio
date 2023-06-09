@extends('layout.app')
@section('konten')
    @include('komponen.navbar')
    <section class="container py-3 " data-scroll-section>
        <!-- Page Content Goes Here -->

        <h1 class="display-3 mb-5" data-scroll data-scroll-speed="6" data-scroll-position="top">My Project</h1>

        <div class="row g-8" data-scroll data-scroll-position="bottom">
            <!-- Single Work-->
            <div data-scroll data-scroll-position="bottom" class="col-12 col-md-6 fade-in-left">
                <div class="position-relative">
                    <a class="link-cover" href="#">
                        <picture>
                            <img class="img-fluid" src="{{ asset('./assets/images/read.png') }}" alt="">
                        </picture>
                    </a>
                    <p class="subtitle-xs mb-0 mt-4"><span class='me-2'>COMIC</span> &middot; <span class='ms-2'>LARAVEL
                            10</span></p>
                    <p class="fw-bolder lead mb-3 mt-2">Readverse</p>
                    <p class="small text-muted mb-2">website to read sercar
                        comics online.</p>
                    <a class="link-body" href="#">View Project</a>
                </div>
            </div>
            <!-- / Single Work -->
            <!-- Single Work-->
            <div data-scroll data-scroll-position="bottom" class="col-12 col-md-6 fade-in-right">
                <div class="position-relative">
                    <a class="link-cover" href="#">
                        <picture>
                            <img class="img-fluid" src="{{ asset('./assets/images/pos.png') }}" alt="">
                        </picture>
                    </a>
                    <p class="subtitle-xs mb-0 mt-4"><span class='me-2'>STORAGE</span> &middot; <span
                            class='ms-2'>LARAVEL 10</span></p>
                    <p class="fw-bolder lead mb-3 mt-2">HARNOKO POS</p>
                    <p class="small text-muted mb-2">Purchasing and stock
                        management application.</p>
                    <a class="link-body" href="#">View Project</a>
                </div>
            </div>
            <!-- / Single Work -->
            <!-- Single Work-->
            <div data-scroll data-scroll-position="bottom" class="col-12 col-md-6 fade-in-left">
                <div class="position-relative">
                    <a class="link-cover" href="#">
                        <picture>
                            <img class="img-fluid" src="{{ asset('./assets/images/lks.png') }}" alt="">
                        </picture>
                    </a>
                    <p class="subtitle-xs mb-0 mt-4"><span class='me-2'>Ecommerce</span> &middot; <span
                            class='ms-2'>LARAVEL 10</span></p>
                    <p class="fw-bolder lead mb-3 mt-2">TOKO LKS</p>
                    <p class="small text-muted mb-2">Program For Tester LKS
                        Smkn 1 Katapang.</p>
                    <a class="link-body" href="#">View Project</a>
                </div>
            </div>
            <!-- / Single Work -->
            <!-- Single Work-->
            <div data-scroll data-scroll-position="bottom" class="col-12 col-md-6 fade-in-right">
                <div class="position-relative">
                    <a class="link-cover" href="#">
                        <picture>
                            <img class="img-fluid" src="{{ asset('./assets/images/elektro.png') }}" alt="">
                        </picture>
                    </a>
                    <p class="subtitle-xs mb-0 mt-4"><span class='me-2'>PROFILE</span> &middot; <span
                            class='ms-2'>LARAVEL 10</span></p>
                    <p class="fw-bolder lead mb-3 mt-2">Elektro Profile Website</p>
                    <p class="small text-muted mb-2">Website Profile
                        Elektronika Industri From Smkn 1 Katapang.</p>
                    <a class="link-body" href="#">View Project</a>
                </div>
            </div>
            <!-- / Single Work -->
            <!-- Single Work-->
            <div data-scroll data-scroll-position="bottom" class="col-12 col-md-6 fade-in-left">
                <div class="position-relative">
                    <a class="link-cover" href="#">
                        <picture>
                            <img class="img-fluid" src="{{ asset('./assets/images/pplg.png') }}" alt="">
                        </picture>
                    </a>
                    <p class="subtitle-xs mb-0 mt-4"><span class='me-2'>PROFILE</span> &middot; <span
                            class='ms-2'>LARAVEL 10</span></p>
                    <p class="fw-bolder lead mb-3 mt-2">PPLG2 Class Profile (My Class)</p>
                    <p class="small text-muted mb-2">Webste Profile PPLG2
                        Class From Smkn 1 Katapang.</p>
                    <a class="link-body" href="https://pplg2.my.id">View Project</a>
                </div>
            </div>
            <!-- / Single Work -->
        </div>

        <!-- /Page Content -->
    </section>
    @include('komponen.footer')
@endsection

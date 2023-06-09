@extends('layout.app')
@section('konten')
    @include('komponen.navbar')
    <section class="container py-3 " data-scroll-section>
        <!-- Page Content Goes Here -->

        <h1 class="display-3 mb-5" data-scroll data-scroll-speed="6" data-scroll-position="top">About Me</h1>

        <div class="row g-8">
            <!-- Profile Image-->
            <div class="col-12 col-md-5" data-scroll data-scroll-speed="6" data-scroll-position="top">
                <picture>
                    <img class="img-fluid" src="{{ asset('./assets/images/luthfi2.jpg') }}"
                        alt="HTML Bootstrap Template by Pixel Rocket">
                </picture>
            </div>
            <!-- / Profile Image-->

            <!-- / Bio & CV Link-->
            <div class="col-12 col-md-7">
                <div class="row g-5 g-xl-8">
                    <div class="col-12 col-xl-7" data-scroll data-scroll-speed="4" data-scroll-position="top">
                        <p class="lead">I'm Luthfi Novalino Pratama, a student from SMKN 1 Katapang from Bandung</p>

                        <p>I really like new things, I usually like to set the appearance of a website and build a website
                            creatively

                        <p>
                            As a Beginner Developer I usually focus on the front end and have little control over the back
                            end, I create websites with an interactive and simple appearance</p>
                    </div>
                    <div class="col-12 col-xl-5" data-scroll data-scroll-speed="2" data-scroll-position="top">
                        <a href="#" class="btn btn-dark w-100 d-flex align-items-center justify-content-center"><i
                                class="ri-file-download-line ri-lg me-2"></i> Download My CV</a>
                        <h5 class="fw-medium mt-6 mb-3">Find Me Online</h5>
                        <ul class="list-unstyled">
                            <li class="d-flex align-items-center mb-2"><i class="ri-github-line me-3 ri-lg"></i> <a
                                    class="link-body" href="https://github.com/luthfimeteor">Github</a></li>
                            <li class="d-flex align-items-center mb-2"><i class="ri-facebook-line me-3 ri-lg"></i> <a
                                    class="link-body" href="https://www.facebook.com/jajang.asi.7">Facebook</a></li>
                            <li class="d-flex align-items-center mb-2"><i class="ri-instagram-line me-3 ri-lg   "></i> <a
                                    class="link-body" href="https://www.instagram.com/lthf.vite/">Instagram</a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <!-- / Bio & CV Link-->
        </div>

        <!-- / Skills-->
        <!-- Skills Section-->
        <div class="pt-2 pb-6 skills" data-scroll>
            <h2 class="display-6 border-bottom pb-5 mb-5 fade-in-up" data-scroll data-scroll-position="bottom">Skills</h2>
            <div class="row gx-10 gy-5">
                <!-- Single Skill-->
                <div class="col-12 col-lg-6 fade-in-up" data-scroll data-scroll-position="bottom">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex justify-content-end">
                            <p class="mb-0 fw-bolder">40%</p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0 small lh-1">Javascript</p>
                        </div>
                        <div class="col-8">
                            <div class="progress f-h-1">
                                <div class="progress-bar" role="progressbar" style="width: 40%" aria-valuenow="40"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Single Skill -->
                <!-- Single Skill-->
                <div class="col-12 col-lg-6 fade-in-up" data-scroll data-scroll-position="bottom">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex justify-content-end">
                            <p class="mb-0 fw-bolder">80%</p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0 small lh-1">PHP</p>
                        </div>
                        <div class="col-8">
                            <div class="progress f-h-1">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Single Skill -->
                <!-- Single Skill-->
                <div class="col-12 col-lg-6 fade-in-up" data-scroll data-scroll-position="bottom">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex justify-content-end">
                            <p class="mb-0 fw-bolder">90%</p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0 small lh-1">HTML</p>
                        </div>
                        <div class="col-8">
                            <div class="progress f-h-1">
                                <div class="progress-bar" role="progressbar" style="width: 90%" aria-valuenow="90"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Single Skill -->
                <!-- Single Skill-->
                <div class="col-12 col-lg-6 fade-in-up" data-scroll data-scroll-position="bottom">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex justify-content-end">
                            <p class="mb-0 fw-bolder">70%</p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0 small lh-1">CSS</p>
                        </div>
                        <div class="col-8">
                            <div class="progress f-h-1">
                                <div class="progress-bar" role="progressbar" style="width: 70%" aria-valuenow="70"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Single Skill -->
                <!-- Single Skill-->
                <div class="col-12 col-lg-6 fade-in-up" data-scroll data-scroll-position="bottom">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex justify-content-end">
                            <p class="mb-0 fw-bolder">80%</p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0 small lh-1">Bootstrap</p>
                        </div>
                        <div class="col-8">
                            <div class="progress f-h-1">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Single Skill -->
                <!-- Single Skill-->
                <div class="col-12 col-lg-6 fade-in-up" data-scroll data-scroll-position="bottom">
                    <div class="row align-items-center">
                        <div class="col-12 d-flex justify-content-end">
                            <p class="mb-0 fw-bolder">80%</p>
                        </div>
                        <div class="col-4">
                            <p class="mb-0 small lh-1">Laravel</p>
                        </div>
                        <div class="col-8">
                            <div class="progress f-h-1">
                                <div class="progress-bar" role="progressbar" style="width: 80%" aria-valuenow="80"
                                    aria-valuemin="0" aria-valuemax="100"></div>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- / Single Skill -->
            </div>
        </div>
        <!-- /Skills Section-->
        <!-- / Skills-->

        <!-- /Page Content -->
    </section>

    @include('komponen.footer')
@endsection

@extends('layout.app')
@section('konten')
    @include('komponen.navbar')
    <section class="container py-3 " data-scroll-section>
        <!-- Page Content Goes Here -->

        <div class="position-relative ps-xl-7">
            <div class="tracking-wide text-vertical mt-4 small d-none d-xl-block"><a class="text-vertical-link me-3"
                    href="#">Facebook</a>
                &middot; <a class="text-vertical-link mx-3" href="">Instagram</a> &middot; <a
                    class="text-vertical-link ms-3" href="https://github.com/luthfimeteor">Github</a></div>

            <h1 class="display-3 col-xxl-8 mb-8">Send Me The
                Message</h1>

            <h4 class="subtitle-sm mb-3">Email me</h4>
            <a class="link-body" href="#">xoneskyone@gmail.com</a>

            <h4 class="subtitle-sm mt-8 mb-4">Send Me A Message</h4>

            <!-- Contact Form-->
            <form method="POST" action="{{ url('contact') }}">
                @csrf
                <div class="row g-5">

                    <div class="col-12 col-xl-7">
                        <div class="row g-5">
                            <!-- Name-->
                            <div class="col-12 col-md-6">
                                <label class="form-label">Your Name</label>
                                <input type="text" class="form-control" name="name" placeholder="Luthfi">
                            </div>
                            <!-- / Name-->

                            <!-- Email-->
                            <div class="col-12 col-md-6">
                                <label class="form-label">Your Email Adress</label>
                                <input type="email" class="form-control" name="email" placeholder="luthfi@luthfi.xyz">
                            </div>
                            <!-- / Email-->
                            <!-- Telephone-->
                            <div class="col-12 col-md-12">
                                <label class="form-label">Your Telephone</label>
                                <input type="text" class="form-control" name="phone"
                                    placeholder="+62 123123123">
                            </div>
                            <!-- / Telephone-->

                            <!-- Project Information-->
                            <div class="col-12">
                                <label class="form-label">Tell Me what do you want to say</label>
                                <textarea name="pesan" class="form-control" cols="30" rows="12"
                                    placeholder="Hi Luthfi, I would like to talk about the design and build of a custom Ecommerce platform that uses the laravel API and React.js frontend"></textarea>
                            </div>
                            <!-- / Project Information-->

                            <!-- Submit btn-->
                            <div class="col-12 justify-content-end d-flex">
                                <button class="btn btn-primary" type="submit">Send Message</button>
                            </div>
                            <!-- / Submit Btn-->
                        </div>
                    </div>


                </div>
            </form>
            <!-- / Contact Form-->
        </div>

        <!-- /Page Content -->
    </section>
    @include('komponen.footer')
@endsection

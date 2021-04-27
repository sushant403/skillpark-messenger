@extends('layouts.master')

@section('content')
<!-- ========== MAIN ========== -->
<main id="content" role="main">
    <!-- Form -->
    <div class="d-flex align-items-center position-relative vh-lg-100">
        <div class="col-lg-5 col-xl-4 d-none d-lg-flex align-items-center bg-dark vh-lg-100 px-0"
            style="background-image: url(/images/svg/components/abstract-shapes-20.svg);">
            <div class="w-100 p-5">
                <!-- SVG Quote -->
                <figure class="text-center mb-5 mx-auto">
                    <svg xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink" x="0px" y="0px"
                        width="40px" height="40px" viewBox="0 0 8 8" style="enable-background:new 0 0 8 8;"
                        xml:space="preserve">
                        <path fill="#fff" d="M3,1.3C2,1.7,1.2,2.7,1.2,3.6c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5
            C1.4,6.9,1,6.6,0.7,6.1C0.4,5.6,0.3,4.9,0.3,4.5c0-1.6,0.8-2.9,2.5-3.7L3,1.3z M7.1,1.3c-1,0.4-1.8,1.4-1.8,2.3
            c0,0.2,0,0.4,0.1,0.5c0.2-0.2,0.5-0.3,0.9-0.3c0.8,0,1.5,0.6,1.5,1.5c0,0.9-0.7,1.5-1.5,1.5c-0.7,0-1.1-0.3-1.4-0.8
            C4.4,5.6,4.4,4.9,4.4,4.5c0-1.6,0.8-2.9,2.5-3.7L7.1,1.3z" />
                    </svg>
                </figure>
                <!-- End SVG Quote -->

                <!-- Testimonials Carousel Main -->
                <div id="testimonialsNavMain" class="js-slick-carousel slick mb-4" data-hs-slick-carousel-options='{
             "autoplay": true,
             "autoplaySpeed": 5000,
             "fade": true,
             "infinite": true,
             "asNavFor": "#testimonialsNavPagination"
           }'>
                    <div class="js-slide">
                        <!-- Testimonials -->
                        <div class="w-md-80 w-lg-60 text-center mx-auto">
                            <blockquote class="h3 text-white font-weight-normal mb-4">Skillpark Messaging Service
                                helps connect to the selected Freelancer securely.</blockquote>
                            <span class="d-block text-white-70">Sushant Poudel, Founder/CEO</span>
                        </div>
                        <!-- End Testimonials -->
                    </div>

                    <div class="js-slide">
                        <!-- Testimonials -->
                        <div class="w-md-80 w-lg-60 text-center mx-auto">
                            <blockquote class="h3 text-white font-weight-normal mb-4">Easy and Interactive User
                                Interface with Real Time messaging service is a plus!</blockquote>
                            <span class="d-block text-white-70">Nitika Bhatta, CTO</span>
                        </div>
                        <!-- End Testimonials -->
                    </div>

                    <div class="js-slide">
                        <!-- Testimonials -->
                        <div class="w-md-80 w-lg-60 text-center mx-auto">
                            <blockquote class="h3 text-white font-weight-normal mb-4">With added attachements features
                                to submit the report and the work. Happy Freelancing!</blockquote>
                            <span class="d-block text-white-70">Divesh Thapa, MD</span>
                        </div>
                        <!-- End Testimonials -->
                    </div>
                </div>
                <!-- End Testimonials Carousel Main -->

                <!-- Testimonials Carousel Pagination -->
                <div id="testimonialsNavPagination"
                    class="js-slick-carousel slick slick-transform-off slick-pagination-modern mx-auto"
                    data-hs-slick-carousel-options='{
             "infinite": true,
             "slidesToShow": 3,
             "centerMode": true,
             "isThumbs": true,
             "asNavFor": "#testimonialsNavMain"
           }'>
                    <div class="js-slide">
                        <div class="avatar avatar-circle mx-auto">
                            <img class="avatar-img" src="/images/team/sushant.jpg" style="border-radius: 7%"
                                alt="Sushant Poudel">
                        </div>
                    </div>

                    <div class="js-slide">
                        <div class="avatar avatar-circle mx-auto">
                            <img class="avatar-img" src="/images/team/nitika.jpg" style="border-radius: 7%"
                                alt="Nitika Bhatta">
                        </div>
                    </div>

                    <div class="js-slide">
                        <div class="avatar avatar-circle mx-auto">
                            <img class="avatar-img" src="/images/team/divesh.jpg" style="border-radius: 7%"
                                alt="Divesh Thapa">
                        </div>
                    </div>
                </div>
                <!-- End Testimonials Carousel Pagination -->

            </div>
        </div>

        <div class="container">
            <div class="row no-gutters">
                <div class="col-md-8 col-lg-7 col-xl-6 offset-md-2 offset-lg-2 offset-xl-3 space-top-3 space-lg-0">
                    @include('components.message')
                    <!-- Form -->
                    <form method="POST" action="{{ route('login') }}" class="js-validate">
                        @csrf
                        <!-- Title -->
                        <div class="mb-5 mb-md-7">
                            <h1 class="h2">Welcome back</h1>
                            <p>Please use your Skillpark Inc. Login Credentials to Access the Messaging Service.</p>
                        </div>
                        <!-- End Title -->

                        <!-- Form Group -->
                        <div class="js-form-message form-group">
                            <label class="input-label" for="signinSrEmail">Email address</label>

                            @error('email')
                            <span class="invalid" style="color:red; font-size:14px" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <input type="email" class="form-control @error('email') is-invalid @enderror" name="email"
                                value="{{ old('email') }}" id="signinSrEmail" tabindex="1" placeholder="Email address"
                                aria-label="Email address" required data-msg="Please enter a valid email address.">
                        </div>
                        <!-- End Form Group -->

                        <!-- Form Group -->
                        <div class="js-form-message form-group">
                            <label class="input-label" for="signinSrPassword" tabindex="0">
                                <span class="d-flex justify-content-between align-items-center">
                                    Password
                                    <a class="link-underline text-capitalize font-weight-normal"
                                        href="http://skillpark.herokuapp.com/password/reset">Forgot Password?</a>
                                </span>
                            </label>

                            @error('password')
                            <span class="invalid" style="color:red; font-size:14px" role="alert">
                                <strong>{{ $message }}</strong>
                            </span>
                            @enderror
                            <input type="password" class="form-control @error('email') is-invalid @enderror"
                                name="password" id="signinSrPassword" tabindex="2" placeholder="********"
                                aria-label="********" required data-msg="Your password is invalid. Please try again.">
                        </div>
                        <!-- End Form Group -->

                        <!-- Button -->
                        <div class="row align-items-center mb-5">
                            <div class="col-sm-7 mb-3 mb-sm-0">
                                <span class="font-size-1 text-muted">Log back <a class="font-size-1 font-weight-bold"
                                        href="http://skillpark.herokuapp.com/login">here</a> for a freelacing
                                    start.</span>

                            </div>

                            <div class="col-sm-5 text-sm-right">
                                <button type="submit" class="btn btn-primary transition-3d-hover">Get Started!</button>
                            </div>
                        </div>
                        <!-- End Button -->
                    </form>
                    <!-- End Form -->
                    <div class="border-top text-center mt-4 pt-4">

                        <a class="btn btn-sm btn-ghost-secondary btn-block"
                            href="{{ route('social.oauth', 'google') }}">
                            <span class="d-flex justify-content-center align-items-center">
                                <i class="fab fa-google mr-2"></i>Sign In with Google
                            </span>
                        </a>
                        <a class="btn btn-sm btn-ghost-secondary btn-block"
                            href="{{ route('social.oauth', 'github') }}">
                            <span class="d-flex justify-content-center align-items-center">
                                <i class="fab fa-github mr-2"></i>Sign In with Github
                            </span>
                        </a>

                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- End Form -->
</main>
<!-- ========== END MAIN ========== -->
@endsection
@extends('layouts.app')

@section('content')
<section class="banner">
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-11 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12 copywriting">
                        <p class="story">
                            LEARN FROM EXPERT
                        </p>
                        <h1 class="header">
                            Start Your <span class="text-purple">Developer <br> Journey</span> Today
                        </h1>
                        <p class="support">
                            Our bootcamp is helping junior developers who <br> are really passionate in the programming.
                        </p>
                        <p class="cta">
                            <a href="#" class="btn btn-master btn-primary">
                                Get Started
                            </a>
                        </p>
                    </div>
                    <div class="col-lg-6 col-12 text-center">
                        <a href="#">
                            <img src="{{ asset('images/banner.png') }}" class="img-fluid" alt="">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        <div class="row brands">
            <div class="col-lg-12 col-12 text-center">
                <img src="{{ asset('images/brands.png') }}" alt="">
            </div>
        </div>
    </div>
</section>


<section class="benefits">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    OUR SUPER BENEFITS
                </p>
                <h2 class="primary-header">
                    Learn Faster & Better
                </h2>
            </div>
        </div>
        <div class="row">
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('images/ic_globe.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Diversity
                    </h3>
                    <p class="support">
                        Learn from anyone around the <br> world and get a new skills
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('images/ic_globe-1.png') }}" class="icon" alt="">
                    <h3 class="title">
                        A.I Guideline
                    </h3>
                    <p class="support">
                        Lara will help you to choose <br> which path that suitable for you
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('images/ic_globe-2.png') }}" class="icon" alt="">
                    <h3 class="title">
                        1-1 Mentoring
                    </h3>
                    <p class="support">
                        We will ensure that you will get <br> what you really do need
                    </p>
                </div>
            </div>
            <div class="col-lg-3 col-12">
                <div class="item-benefit">
                    <img src="{{ asset('images/ic_globe-3.png') }}" class="icon" alt="">
                    <h3 class="title">
                        Future Job
                    </h3>
                    <p class="support">
                        Get your dream job in your dream <br> company together with us
                    </p>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="steps">
    <div class="container">
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('images/step1.png') }}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    BETTER CAREER
                </p>
                <h2 class="primary-header">
                    Prepare The Journey
                </h2>
                <p class="support">
                    Learn from anyone around the <br> world and get a new skills
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        Learn More
                    </a>
                </p>
            </div>
        </div>
        <div class="row item-step pb-70">
            <div class="col-lg-6 col-12 text-left copywriting pl-150">
                <p class="story">
                    STUDY HARDER
                </p>
                <h2 class="primary-header">
                    Finish The Project
                </h2>
                <p class="support">
                    Each of you will be joining the private group and also <br> working together with team members on project
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        View Demo
                    </a>
                </p>
            </div>
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('images/step2.png') }}" class="cover" alt="">
            </div>

        </div>
        <div class="row item-step">
            <div class="col-lg-6 col-12 text-center">
                <img src="{{ asset('images/step3.png') }}" class="cover" alt="">
            </div>
            <div class="col-lg-6 col-12 text-left copywriting">
                <p class="story">
                    END GAME
                </p>
                <h2 class="primary-header">
                    Big Demo Day
                </h2>
                <p class="support">
                    Learn how to speaking in public to demonstrate your <br> final project and receive the important feedbacks
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-secondary me-3">
                        Showcase
                    </a>
                </p>
            </div>
        </div>
    </div>
</section>

<section class="pricing">
    <div class="container">
        <div class="row pb-70">
            <div class="col-lg-5 col-12 header-wrap copywriting">
                <p class="story">
                    GOOD INVESTMENT
                </p>
                <h2 class="primary-header text-white">
                    Start Your Journey
                </h2>
                <p class="support">
                    Learn how to speaking in public to demonstrate your <br> final project and receive the important feedbacks
                </p>
                <p class="mt-5">
                    <a href="#" class="btn btn-master btn-thirdty me-3">
                        View Syllabus
                    </a>
                </p>
            </div>
            <div class="col-lg-7 col-12">
                <div class="row">
                    <div class="col-lg-6 col-12">
                        <div class="table-pricing paket-gila">
                            <p class="story text-center">
                                Expert Class
                            </p>
                            <h1 class="price text-center">
                                Rp.280K
                            </h1>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{ asset('images/ic_check.svg') }}" alt="">
                                <p>
                                    Pro Techstack Kit
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    iMac Pro 2021 & Display
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    1-1 Mentoring Program
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    Final Project Certificate
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    Offline Course Videos
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    Future Job Opportinity
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    Premium Design Kit
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    Website Builder
                                </p>
                                <div class="clear"></div>
                            </div>
                            <p>
                                <a href="{{ route('checkout.create', 'gila-belajar') }}" class="btn btn-master btn-primary w-100 mt-3">
                                    Take This Plan
                                </a>
                            </p>
                        </div>
                    </div>
                    <div class="col-lg-6 col-12">
                        <div class="table-pricing paket-biasa">
                            <p class="story text-center">
                                Beginner Class
                            </p>
                            <h1 class="price text-center">
                                Rp.140K
                            </h1>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    1-1 Mentoring Program
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    Final Project Certificate
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing mb-4">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    Offline Course Videos
                                </p>
                                <div class="clear"></div>
                                <div class="divider"></div>
                            </div>
                            <div class="item-benefit-pricing">
                                <img src="{{asset('images/ic_check.svg')}}" alt="">
                                <p>
                                    Future Job Opportinity
                                </p>
                                <div class="clear"></div>
                            </div>
                            <p>
                                <a href="{{ route('checkout.create', 'baru-mulai') }}" class="btn btn-master btn-secondary w-100 mt-3">
                                    Start With This Plan
                                </a>
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="row pb-70">
            <div class="col-lg-12 col-12 text-center">
                <img src="{{ asset('images/brands.png') }}" height="30" alt="">
            </div>
        </div>
    </div>
</section>

<section class="testimonials">
    <div class="container">
        <div class="row text-center pb-70">
            <div class="col-lg-12 col-12 header-wrap">
                <p class="story">
                    SUCCESS STUDENTS
                </p>
                <h2 class="primary-header">
                    We Really Love Laracamp
                </h2>
            </div>
        </div>
        <div class="row justify-content-center">
            <div class="col-lg-10 col-12">
                <div class="row">
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{ asset('images/stars.svg') }}" alt="">
                            <p class="message">
                                I was not really into code but after they teach me how to train my logic then I was really fall in love with code
                            </p>
                            <div class="user">
                                <img src="{{ asset('images/fanny_photo.png') }}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Fanny
                                    </h4>
                                    <p class="role">
                                        Developer at Google
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{ asset('images/stars.svg') }}" alt="">
                            <p class="message">
                                Code is really important if we want to build a company and strike to the win, so keep code everytimes
                            </p>
                            <div class="user">
                                <img src="{{ asset('images/setiawan.png') }}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Setiawan
                                    </h4>
                                    <p class="role">
                                        CEO SCodeKu
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-12">
                        <div class="item-review">
                            <img src="{{ asset('images/stars.svg') }}" alt="">
                            <p class="message">
                                My background is design and art but I do really love how to make my design working in the development phase
                            </p>
                            <div class="user">
                                <img src="{{ asset('images/beatrice.png') }}" class="photo" alt="">
                                <div class="info">
                                    <h4 class="name">
                                        Beatrice
                                    </h4>
                                    <p class="role">
                                        QA at Facebook
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="row copyright">
                    <div class="col-lg-12 col-12">
                        <p>
                            All Rights Reserved. Copyright E-Course By Setiawan007
                        </p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

@endsection
@extends('front.include.app')
@section('title') ACTING ACADEMY @endsection
@section('app')
    <main>
        <section class="homeSection01" id="homeSection01">
            <div class="container-fluid">
                <div class="row">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3 p-0 m-auto">
                        <div class="mainBannerCard" data-aos="fade-up-right">
                            <h1><span>Start</span> Learning Today!</h1>
                            <p>Classes are Limited - Contact Us for More Information and To Reserve Your Spot</p>
                            <form action="javascript:void(0)">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter your email"
                                           aria-label="Enter your email" aria-describedby="basic-addon2">
                                    <span class="input-group-text" type="submit" id="basic-addon2"><i
                                            class="fas fa-chevron-right"></i></span>
                                </div>
                            </form>
                        </div>
                        <div class="downButton">
                            <a href="#homeSection02"><i class="fas fa-chevron-down"></i></a>
                        </div>
                    </div>
                    <div class="col-lg-6 m-auto me-0 position-relative">
                        <img class="w-100" data-aos="fade-up-left" src="{{ asset('assets/front/') }}/Images/homePage/homePageImg01.png"
                             alt="Assets/Images/homePage/homePageImg01.png">

                        <div class="col-lg-4">
                            <div class="card floatingCards card01 shadow">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-10">
                                            <h5 class="mb-0">ACTING ACADEMY</h5>
                                            <p class="mb-0">Learn acting for film and television!</p>
                                        </div>
                                        <div class="col-2">
                                            <img class="w-100 flotingCardImg" src="{{ asset('assets/front/') }}/Images/homePage/check.png"
                                                 alt="Assets/Images/homePage/check.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card floatingCards card02 shadow">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-10">
                                            <h5 class="mb-0">FILMMAKER ACADEMY</h5>
                                            <p class="mb-0">Everything you need to know to make movies!</p>
                                        </div>
                                        <div class="col-2">
                                            <img class="w-100 flotingCardImg" src="{{ asset('assets/front/') }}/Images/homePage/check.png"
                                                 alt="Assets/Images/homePage/check.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="col-lg-4">
                            <div class="card floatingCards card04 shadow">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-10">
                                            <h5 class="mb-0">CRYPTOCURRENCY and NFT’s for CREATIVES</h5>
                                            <p class="mb-0">Learn how to use the blockchain to monetize and control your
                                                art.</p>
                                        </div>
                                        <div class="col-2">
                                            <img class="w-100 flotingCardImg" src="{{ asset('assets/front/') }}/Images/homePage/check.png"
                                                 alt="Assets/Images/homePage/check.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="col-lg-4">
                            <div class="card floatingCards card03 shadow">
                                <div class="card-body">
                                    <div class="row">
                                        <div class="col-10">
                                            <h5 class="mb-0">DIGITAL MARKETING WORKSHOPS</h5>
                                            <p class="mb-0">Small workshops to help you market your business, products,
                                                and services.</p>
                                        </div>
                                        <div class="col-2">
                                            <img class="w-100 flotingCardImg" src="{{ asset('assets/front/') }}/Images/homePage/check.png"
                                                 alt="Assets/Images/homePage/check.png">
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="container">
                <div class="col-2">
                </div>
            </div>
        </section>

        <section class="homeSection02" id="homeSection02">
            <div class="container">
                <div class="col-lg-4">
                    <div class="homeSection02Card" data-aos="fade-right">
                        <h2>Practical Learning For <span>Real-World Results</span></h2>
                    </div>
                </div>
                <div class="row mt-5">
                    <div class="col-lg-1"></div>
                    <div class="col-lg-3 m-auto">
                        <div class="card card-blue pt-5 pb-5" data-aos="flip-up">
                            <div class="card-body">
                                <div class="col-lg-2 col-2">
                                    <img class="w-100 mb-3" src="{{ asset('assets/front/') }}/Images/homePage/icon/icon01.png" alt="">
                                </div>
                                <div class="col-lg-12">
                                    <p>
                                        Convenient evening and weekend class schedules.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-auto">
                        <div class="card card-orange pt-5 pb-5" data-aos="flip-down">
                            <div class="card-body">
                                <div class="col-lg-2 col-2">
                                    <img class="w-100 mb-3" src="{{ asset('assets/front/') }}/Images/homePage/icon/icon02.png" alt="">
                                </div>
                                <div class="col-lg-12">
                                    <p>
                                        Written materials and video links provided for better understanding.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-3 m-auto">
                        <div class="card card-pink pt-5 pb-5" data-aos="flip-up">
                            <div class="card-body">
                                <div class="col-lg-2 col-2">
                                    <img class="w-100 mb-3" src="{{ asset('assets/front/') }}/Images/homePage/icon/icon03.png" alt="">
                                </div>
                                <div class="col-lg-12">
                                    <p>
                                        We also offer online classes at a discount.
                                    </p>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-1"></div>
                </div>
            </div>
        </section>

        <section class="homeSection03" id="homeSection03">
            <div class="container">
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-4">
                        <div class="homeSection02Card" data-aos="fade-left">
                            <h2>Choose Different <span>Categories Of Courses</span></h2>
                        </div>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-6"></div>
                    <div class="col-lg-6">
                        <div class="row mt-3 mb-3">
                            <div class="col-lg-6">
                                <div class="card ChooseDifferentCategories" data-aos="zoom-in-up">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-2">
                                                <img class="w-100" src="{{ asset('assets/front/') }}/Images/homePage/icon/icon05.png"
                                                     alt="Assets/Images/homePage/icon/icon05.png">
                                            </div>
                                            <div class="col-lg-9 col-10 m-auto">
                                                <h6 class="mb-0">Acting Academy</h6>
                                            </div>
                                        </div>
                                        <p>Learn everything you need to build a portfolio, audition successfully and win
                                            jobs to advance your acting career.</p>
                                        <a href="{{route('pricing')}}">Join a class today <i
                                                class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card ChooseDifferentCategories" data-aos="zoom-in-up">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-2">
                                                <img class="w-100" src="{{ asset('assets/front/') }}/Images/homePage/icon/icon05.png"
                                                     alt="Assets/Images/homePage/icon/icon05.png">
                                            </div>
                                            <div class="col-lg-9 col-10 m-auto">
                                                <h6 class="mb-0">Filmmaker Academy</h6>
                                            </div>
                                        </div>
                                        <p>Learn more about our pre-production, production, and post-production
                                            mini-courses. </p>
                                        <a href="{{route('pricing')}}">Join a class today <i
                                                class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card ChooseDifferentCategories" data-aos="zoom-in-up">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-2">
                                                <img class="w-100" src="{{ asset('assets/front/') }}/Images/homePage/icon/icon05.png"
                                                     alt="Assets/Images/homePage/icon/icon05.png">
                                            </div>
                                            <div class="col-lg-9 col-10 m-auto">
                                                <h6 class="mb-0">Cryptocurrency Class</h6>
                                            </div>
                                        </div>
                                        <p>Cryptocurrency is redefining the business of art.
                                            Learn what you need to know to stay ahead of the curve and make better
                                            decisions to secure your financial future! </p>
                                        <a href="{{route('pricing')}}">Join a class today <i
                                                class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-lg-6">
                                <div class="card ChooseDifferentCategories" data-aos="zoom-in-up">
                                    <div class="card-body">
                                        <div class="row">
                                            <div class="col-lg-3 col-2">
                                                <img class="w-100" src="{{ asset('assets/front/') }}/Images/homePage/icon/icon05.png"
                                                     alt="Assets/Images/homePage/icon/icon05.png">
                                            </div>
                                            <div class="col-lg-9 col-10 m-auto">
                                                <h6 class="mb-0">Mobile Digital Marketing Class</h6>
                                            </div>
                                        </div>
                                        <p>Our digital marketing courses are designed for small businesses owners who
                                            want to take control of their online marketing, branding,
                                            and social media presence! </p>
                                        <a href="{{route('pricing')}}">Join a class today <i
                                                class="fas fa-chevron-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <a class="viewAll" href="{{route('pricing')}}">View All</a>
                    </div>
                </div>
            </div>
            </div>
        </section>

        <section class="homeSection04" id="homeSection04">
            <div class="container">
                <div class="col-lg-3 text-center m-auto">
                    <div class="homeSection04Card" data-aos="fade-right">
                        <h2>Join Our Training <span>Classes</span></h2>
                    </div>
                </div>
                <div class="row mb-5 pt-4 pb-4">
                    <div class="col-lg-4 mb-5">
                        <div class="card homeSection04Card shadow" data-aos="zoom-in-up" data-aos="zoom-in-up">
                            <div class="card-body">
                                <img class="w-100" src="{{ asset('assets/front/') }}/Images/homePage/homeSection04CardImg01.jpg"
                                     alt="Assets/Images/homePage/homeSection04CardImg01.jpg">
                                <div class="col-lg-12 m-auto mt-4 text-center">
                                    <div class="homeSection04Card">
                                        <h6>Film <span>Making</span></h6>
                                    </div>
                                </div>
                                <p>
                                    Filmmaking is an art. Your camera is a tool. Learn the basics of framing, how to
                                    capture amazing shots and how to work with
                                    natural lighting, shutter speeds, exposure, lenses, and more!
                                </p>
                                <a class="homeSection04CardBtn" href="{{route('pricing')}}">Join Now <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card homeSection04Card shadow" data-aos="zoom-in-up">
                            <div class="card-body">
                                <img class="w-100" src="{{ asset('assets/front/') }}/Images/homePage/homeSection04CardImg02.jpg"
                                     alt="Assets/Images/homePage/homeSection04CardImg02.jpg">
                                <div class="col-lg-6 m-auto mt-4 text-center">
                                    <div class="homeSection04Card">
                                        <h6>Basic <span>Editing</span></h6>
                                    </div>
                                </div>
                                <p>
                                    Learn everything you need to make your videos stand out using only phone apps and
                                    basic editing software.
                                </p>
                                <a class="homeSection04CardBtn" href="{{route('pricing')}}">Join Now <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card homeSection04Card shadow" data-aos="zoom-in-up">
                            <div class="card-body">
                                <img class="w-100" src="{{ asset('assets/front/') }}/Images/homePage/homeSection04CardImg03.jpg"
                                     alt="Assets/Images/homePage/homeSection04CardImg03.jpg">
                                <div class="col-lg-12 m-auto mt-4 text-center">
                                    <div class="homeSection04Card">
                                        <h6>Mobile Digital <span>Marketing</span></h6>
                                    </div>
                                </div>
                                <p>
                                    This 4-hour workshop will teach you to market your creative business via social
                                    media using your smartphone and a few apps to help you
                                    create great content!
                                </p>
                                <a class="homeSection04CardBtn" href="{{route('pricing')}}">Join Now <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card homeSection04Card shadow" data-aos="zoom-in-up">
                            <div class="card-body">
                                <img class="w-100" src="{{ asset('assets/front/') }}/Images/homePage/homeSection04CardImg04.jpg"
                                     alt="Assets/Images/homePage/homeSection04CardImg04.jpg">
                                <div class="col-lg-12 m-auto mt-4 text-center">
                                    <div class="homeSection04Card">
                                        <h6>Google Suite For <span>Business</span></h6>
                                    </div>
                                </div>
                                <p>
                                    This 4-hour workshop will help you understand how to use Google Suite to manage
                                    day-to-day operations and make your creative business
                                    more productive
                                </p>
                                <a class="homeSection04CardBtn" href="{{route('pricing')}}">Join Now <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card homeSection04Card shadow" data-aos="zoom-in-up">
                            <div class="card-body">
                                <img class="w-100" src="{{ asset('assets/front/') }}/Images/homePage/homeSection04CardImg05.jpg"
                                     alt="Assets/Images/homePage/homeSection04CardImg05.jpg">
                                <div class="col-lg-12 m-auto mt-4 text-center">
                                    <div class="homeSection04Card">
                                        <h6>What’s <span>Cryptocurrency?</span></h6>
                                    </div>
                                </div>
                                <p>
                                    This 3-hour course will help you understand cryptocurrency, open a Coinbase account
                                    or other cryptocurrency applications,
                                    and have a better understanding of what cryptocurrency is offering and how it is
                                    shaping our financial future.
                                </p>
                                <a class="homeSection04CardBtn" href="{{route('pricing')}}">Join Now <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card homeSection04Card shadow" data-aos="zoom-in-up">
                            <div class="card-body">
                                <img class="w-100" src="{{ asset('assets/front/') }}/Images/homePage/homeSection04CardImg06.jpg"
                                     alt="Assets/Images/homePage/homeSection04CardImg06.jpg">
                                <div class="col-lg-12 m-auto mt-4 text-center">
                                    <div class="homeSection04Card">
                                        <h6>Acting For <span>Film And Television</span></h6>
                                    </div>
                                </div>
                                <p>
                                    Our acting course will prepare you for casting calls, auditions and how to become a
                                    working paid actor.
                                </p>
                                <a class="homeSection04CardBtn" href="{{route('pricing')}}">Join Now <i
                                        class="fas fa-chevron-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-5 mt-5 m-auto">
                    <a class="viewAll" href="{{route('pricing')}}">View All</a>
                </div>
            </div>
        </section>

        <section class="homeSection05" id="homeSection05">
            <div class="container pt-5 pb-4">
                <div class="col-lg-6 text-center m-auto ps-2 pe-2">
                    <div class="homeSection04Card" data-aos="fade-right">
                        <h2>Have Questions? <span>Send us an email!</span></h2>
                        <div class="col-lg-7 m-auto">
                            <form action="{{route('pricing')}}">
                                <div class="input-group mb-3">
                                    <input type="text" class="form-control" placeholder="Enter your email"
                                           aria-label="Enter your email" aria-describedby="basic-addon2">
                                    <span class="input-group-text" type="submit" id="basic-addon2"><i
                                            class="fas fa-chevron-right"></i></span>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </main>
@endsection

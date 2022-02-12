@extends('front.include.app')
@section('title') Acting Academy @endsection
@section('app')
<main>
    <section class="aboutUsSection01" id="aboutUsSection01">
        <div class="container">
            <div class="col-lg-6 text-center m-auto pt-5 mt-5 mb-5">
                <div class="mainBannerCard" data-aos="fade-up-right">
                    <h1>Acting Academy</h1>
                    <nav class="breadcrumbNav" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark" href="{{ route('home') }}">Home</a></li>
                            <li class="breadcrumb-item activeLink">Acting Academy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutUsSection02" id="aboutUsSection02">
        <div class="container">
            <div class="homeSection04Card text-center" data-aos="fade-right">
                <h2><span>Acting Academy</span></h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-5 m-auto">
                    <img class="w-100 shadow rounded" src="{{asset('assets/front/Images/actingAcademy/sec1.jfif')}}" alt="{{asset('Images/actingAcademy/sec1.jfif')}}">
                </div>
                <div class="col-lg-7 m-auto">
                    <h4 class="">1,800$ for 6 Week Program Overview</h4>
                    <h6 class="text-muted">At Washington Digital Media we offer full-service video production</h6>
                    <strong>Convenient Classes</strong>
                    <p class="text-muted">
                        Weekends and Nights
                    </p>
                    <p>
                        Join our MeetUp group to see times and dates for classes.
                    </p>
                    <div class="text-start">
                        <a class="viewAll m-0" href="{{ route('price',['id' => 'acting-academy'] )}}">Register</a>
                    </div>

                </div>
                <div class="col-lg-7 m-auto">
                    <p>
                        DC, Maryland, and Virginia is becoming a film production town and the demand for well-trained actors for film and television is growing.
                    </p>
                    <p>
                        DC Media Academy and Bello Talent have created a series of acting courses to meet the increasing demand for well-trained actors. Our acting program will provide
                        students with the necessary techniques to become a <b>working film and television actors.</b>
                    </p>
                    <p>
                        Our <b>6-week program</b> is a “one-stop-shop” approach to career development and we keep our classes small to maximize learning. The class meets twice per week,
                        running concurrently with the film academy for students who are enrolled in both programs.
                    </p>
                </div>
                <div class="col-lg-5 m-auto">
                    <img class="w-100 shadow rounded" src="{{ asset('assets/front/') }}/Images/actingAcademy/actingAcademyImg01.jpeg" alt="Assets/Images/actingAcademy/actingAcademyImg01.jpeg">
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="dcmaUl">
                        <h4>How does DCMA give you the competitive edge at casting auditions?</h4>
                        <ul>
                            <li>
                                Your classroom is a real production studio that uses state-of-the-art professional equipment
                            </li>
                            <li>
                                You will have many opportunities for on-camera practice, which you can use to build your portfolio
                            </li>
                            <li>
                                We provide a friendly, supportive environment where we encourage students to learn from each other as well as from the instructor
                            </li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="dcmaUl">
                        <h4>What does DCMA provide that other acting schools don’t? </h4>
                        <ul>
                            <li>
                                You will have first priority to audition all media projects, TV shows, and Films that Washington Digital Media and Whitfield Studios Produces
                            </li>
                            <li>
                                You will be offered representation by Bello Talent Management, a talent agency with a track record of finding excellent opportunities for
                                talent locally, nationally and worldwide
                            </li>
                            <li>
                                You will receive a professional headshot, comp cards, video and voiceover demo reels, and a professional website at no extra cost to make
                                you immediately marketable in the industry.
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="col-lg-5 mt-4 m-auto">
                <a class="viewAll" href="javascript:void(0)">SIGN UP NOW</a>
            </div>
        </div>
    </section>

    <section class="homeSection06" id="homeSection06">
        <div class="container">
            <div class="col-lg-3 text-center m-auto mt-4 mb-4">
                <div class="homeSection04Card" data-aos="fade-right">
                    <h2>What You'll <span>Learn</span></h2>
                </div>
            </div>
            <div class="container">
                <div class="row mt-4">
                    <div class="col-lg-4 mb-5">
                        <div class="card ourTeam shadow" data-aos="fade-right">
                            <div class="card-body">
                                <h5>1st week</h5>
                                <p class="text-muted mb-0">
                                    Auditioning, Cold Reads, Memorization, Marketing your acting career
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card ourTeam shadow" data-aos="fade">
                            <div class="card-body">
                                <h5>2nd week</h5>
                                <p class="text-muted mb-0">
                                    Improvisation, Script Analysis, Character Development
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card ourTeam shadow" data-aos="fade-left">
                            <div class="card-body">
                                <h5>3rd week</h5>
                                <p class="text-muted mb-0">
                                    Teleprompter and Ear Prompter
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card ourTeam shadow" data-aos="fade-right">
                            <div class="card-body">
                                <h5>4th week</h5>
                                <p class="text-muted mb-0">
                                    On-Camera Commercials Spokesperson (Video Recorded for Students copy)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card ourTeam shadow" data-aos="fade">
                            <div class="card-body">
                                <h5>5th week</h5>
                                <p class="text-muted mb-0">
                                    On Camera Industrials (Video Recorded for Students copy)
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card ourTeam shadow" data-aos="fade-left">
                            <div class="card-body">
                                <h5>6th week</h5>
                                <p class="text-muted mb-0">
                                    Monologues (Video Recorded for Students copy)
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>

@endsection
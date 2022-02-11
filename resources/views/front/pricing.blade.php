@extends('front.include.app')
@section('title') Pricing @endsection
@section('app')
<section class="aboutUsSection01" id="aboutUsSection01">
   <div class="container">
      <div class="col-lg-6 text-center m-auto pt-5 mt-5 mb-5">
         <div class="mainBannerCard aos-init aos-animate" data-aos="fade-up-right">
            <h1>Pricing</h1>
            <nav class="breadcrumbNav" aria-label="breadcrumb">
               <ol class="breadcrumb">
                  <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
                  <li class="breadcrumb-item activeLink">Pricing</li>
               </ol>
            </nav>
         </div>
      </div>
   </div>
</section>
<section class="aboutUsSection02 pb-3" id="aboutUsSection02">
   <div class="container">
      <div class="homeSection04Card text-center aos-init aos-animate mt-5" data-aos="fade-right">
         <h2 class=""><span>Pricing</span></h2>
      </div>
      <div class="row mt-3 our-pricing">
         <div class="col-lg-4 mb-5 m-auto mt-0 membership">
            <div class="card shadow">
               <div class="card-header">
                  <p class="text-orange mb-0">
                     Membership
                     <span class=" bg-orange text-light rounded-pill text-center p-2  bonus-pill float-end d-none">
                        50% off for signup now
                     </span>
                  </p>
               </div>
               <ul class="list-group list-group-flush">
                  <li>
                     Space Rental for Photoshoot, Video Production, and workshops or training
                  </li>
                  <li>
                     $45 per hour
                  </li>
                  <div class="ps-4 bg-orange p-1 text-light">
                     <h6 class="mb-0">
                        Podcast Room
                     </h6>
                     <p class="mb-0 font-size-12">
                        <strong>Set Up for ongoing show</strong>
                     </p>
                  </div>
                  <li>
                     $500 (logo, color scheme, online connection, etc)
                  </li>
                  <li>
                     Sound Recording Only:
                  </li>
                  <li>$99! hour or less</li>
                  <li>$150 2 hours</li>
                  <li>$200 3 hours</li>
                  <li> Video recording and podcast or live stream; </li>
                  <li>$150 for 1 hour </li>
                  <li>$250 2 hours</li>
                  <li>$300 3 Hours</li>


                  <li>
                     Our common area is also open for meetings and a small gathering at no cost
                  </li>
                  <li>
                     Coming soon:

                  </li>
                  <li>
                     Equipment Rental while working at the studio only available to Members
                  </li>
                  <li>
                     Video Editing Station
                  </li>
               </ul>
            </div>
            <!-- <div href="#" class="button btn btn-primary bg-orange w-100 shadow-lg border-0">Order Now 1,644 $</div> -->
            <!-- <button type="button" href="{{route('register')}}" class="button btn btn-primary bg-orange w-100 shadow-lg border-0">Order Now 1,644 $</button> -->
            <a href="{{ route('price',['id' => 'membership-benefits'] )}}" class="button btn btn-primary bg-orange w-100 shadow-lg border-0">Order Now 1,644 $</a>
         </div>
      </div>
      <div class="row our-pricing">
         <div class="col-lg-4 m-auto mt-0">
            <div class="card shadow">
               <p class="card-header text-orange">Non Member</p>
               <ul class="list-group list-group-flush">
                  <li>
                     Space Rental for Photoshoot, Video Production and workshops or training
                  </li>
                  <li>
                     $90 per hour
                  </li>
                  <div class="ps-4 bg-orange p-1 text-light">
                     <h6 class="mb-0">
                        Podcast Room Rental
                     </h6>
                     <p class="mb-0 font-size-12">
                        <strong>Sound Recording Only</strong>
                     </p>
                  </div>
                  <li>$199! hour or less</li>
                  <li>$250 2 hours </li>
                  <li>$400 3 hours </li>
                  <li>
                     Video recording and podcast or live stream;
                  </li>
                  <li>$250 for 1 hour </li>
                  <li>$350 2 hours</li>
                  <li>$400 3 Hours</li>
               </ul>
            </div>
            <a href="{{ route('price',['id' => 'non-member'] )}}" class="button btn btn-primary bg-orange w-100 shadow-lg border-0">Order Now 1,939 $</a>
         </div>
      </div>
   </div>
</section>
<section class="classesSection02" id="classesSection02">
   <div class="container">
      <div class="col-lg-3 text-center mt-5 pt-4 m-auto">
         <div class="homeSection04Card" data-aos="fade-right">
            <h2>Join Our Training <span>Classes</span></h2>
         </div>
      </div>
      <div class="row mb-5 pt-4 pb-4">
         <div class="col-lg-3 mb-5">
            <div class="card homeSection04Card shadow" data-aos="zoom-in-up" data-aos="zoom-in-up">
               <div class="card-body">
                  <img class="w-100" src="{{ asset('assets/front/') }}/Images/pricing/banner.jpg" alt="{{ asset('assets/front/') }}/Images/pricing/banner.jpg">
                  <div class="col-lg-12 m-auto mt-4 text-center">
                     <div class="homeSection04Card">
                        <h6>BASIC <span>EDITING</span></h6>
                     </div>
                  </div>
                  <p>
                     The video production course is designed to teach you about post-production workflow, technical standards, and various editing styles and theories. This course also covers Windows Movie Maker, Final Cut Pro X, Adobe Premiere Pro, iMovie Studio, Avid Media Composer, Soundtrack Pro, and After Effects. We'll cover the following topics: - Getting Started with Video Editing - Grey Area Principles - Editing Styles - Lights, Action! Action! Action! - Composition Rules-Using Scopes-Using the Timeline-Organising Content - Colour Theory & Stylising Techniques - Audio Editing & Mixing-Microphones-Levels
                  </p>
                  <a class="homeSection04CardBtn" href="pricing.php">Join Now <i class="fas fa-chevron-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 mb-5">
            <div class="card homeSection04Card shadow" data-aos="zoom-in-up">
               <div class="card-body">
                  <img class="w-100" src="{{ asset('assets/front/') }}/Images/homePage/homeSection04CardImg02.jpg" alt="{{ asset('assets/front/') }}/Images/homePage/homeSection04CardImg02.jpg">
                  <div class="col-lg-6 m-auto mt-4 text-center">
                     <div class="homeSection04Card">
                        <h6>DIGITAL CINEMA <span>PRODUCTION</span></h6>
                     </div>
                  </div>
                  <p>
                     If you've ever dreamt of running your own production company, this course is for you. It covers the set up and operation of the camera, including proper assembly of the body, matte box, lenses, and follow focus for both tripod and handheld configurations. We'll also demonstrate best practices for shooting a digital cinema production and introduce students to the Sony a7 production workflow.
                  </p>
                  <a class="homeSection04CardBtn" href="pricing.php">Join Now <i class="fas fa-chevron-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 mb-5">
            <div class="card homeSection04Card shadow" data-aos="zoom-in-up">
               <div class="card-body">
                  <img class="w-100" src="{{ asset('assets/front/') }}/Images/homePage/homeSection04CardImg03.jpg" alt="{{ asset('assets/front/') }}/Images/homePage/homeSection04CardImg03.jpg">
                  <div class="col-lg-12 m-auto mt-4 text-center">
                     <div class="homeSection04Card">
                        <h6>Mobile Video <span>Production</span></h6>
                     </div>
                  </div>
                  <p>
                     Learn to shoot and edit impactful videos for your business or organization using just your smart phone, iPad, or tablet computer. This two-week (6 hours) course will teach participants to create polished videos quickly, even on a tight budget. Get hands-on with equipment selection and placement, lighting, audio, editing and working with talent. Production planning, choosing the right equipment and software, shot composition, lighting, audio are among the topics covered in this fast-paced workshop.
                  </p>
                  <a class="homeSection04CardBtn" href="pricing.php">Join Now <i class="fas fa-chevron-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 mb-5">
            <div class="card homeSection04Card shadow" data-aos="zoom-in-up">
               <div class="card-body">
                  <img class="w-100" src="{{ asset('assets/front/') }}/Images/homePage/homeSection04CardImg04.jpg" alt="{{ asset('assets/front/') }}/Images/homePage/homeSection04CardImg04.jpg">
                  <div class="col-lg-12 m-auto mt-4 text-center">
                     <div class="homeSection04Card">
                        <h6>Social Media <span>Basics</span></h6>
                     </div>
                  </div>
                  <p>
                     No matter what your age, one thing is clear- social media is fast expanding into the world of older adults. While getting used to new technology can be intimidating, this two-week class will help participants develop a safe and secure online presence. We'll cover how to use Facebook, Twitter, LinkedIn, Google+, Pinterest, Instagram and other popular social media platforms, as well as blogs and other web-based services. Participants will also create their own social networking pages that are password protected and protected from prying eyes.
                  </p>
                  <a class="homeSection04CardBtn" href="pricing.php">Join Now <i class="fas fa-chevron-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 mb-5">
            <div class="card homeSection04Card shadow" data-aos="zoom-in-up">
               <div class="card-body">
                  <img class="w-100" src="{{ asset('assets/front/') }}/Images/homePage/homeSection04CardImg05.jpg" alt="{{ asset('assets/front/') }}/Images/homePage/homeSection04CardImg05.jpg">
                  <div class="col-lg-12 m-auto mt-4 text-center">
                     <div class="homeSection04Card">
                        <h6>Crypto <span>Basics</span></h6>
                     </div>
                  </div>
                  <p>
                     This course explains how Bitcoin works, exploring basic cryptography concepts. We then discuss the history of Bitcoin and its progress over the past year. Next, we discuss mining, its economics and altcoins; this is followed by a short description of what altcoins do and how they fit into the Bitcoin ecosystem for everyone interested in collecting them. Finally, we talk about investment strategies like arbitrage and two-way markets before wrapping up with some personal financial goals to achieve.
                  </p>
                  <a class="homeSection04CardBtn" href="pricing.php">Join Now <i class="fas fa-chevron-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 mb-5">
            <div class="card homeSection04Card shadow" data-aos="zoom-in-up">
               <div class="card-body">
                  <img class="w-100" src="{{ asset('assets/front/') }}/Images/homePage/homeSection04CardImg06.jpg" alt="{{ asset('assets/front/') }}/Images/homePage/homeSection04CardImg06.jpg">
                  <div class="col-lg-12 m-auto mt-4 text-center">
                     <div class="homeSection04Card">
                        <h6>Marketing <span>Basics</span></h6>
                     </div>
                  </div>
                  <p>
                     Mastery of promotion that promotes — that’s the marketing class. Whether you have an idea for a project that doesn’t have a home or want to find out what it would take to promote the piece you just finished, this six-hour workshop is an essential step in the creative process. If you are considering making your work available on public display, through venues such as exhibitions or commercial galleries, or if you have completed a project but lack confidence in finding an audience, join us for this one-day, comprehensive workshop to learn crucial skills needed to communicate effectively with others about your projects. Short on time
                  </p>
                  <a class="homeSection04CardBtn" href="pricing.php">Join Now <i class="fas fa-chevron-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 mb-5">
            <div class="card homeSection04Card shadow" data-aos="zoom-in-up">
               <div class="card-body">
                  <img class="w-100" src="{{ asset('assets/front/') }}/Images/classesPages/classesPageImg07.webp" alt="{{ asset('assets/front/') }}/Images/classesPages/classesPageImg07.webp">
                  <div class="col-lg-12 m-auto mt-4 text-center">
                     <div class="homeSection04Card">
                        <h6>Acting <span>Basics</span></h6>
                     </div>
                  </div>
                  <p>
                     Students will: Receive instruction on how to breath life into their characters and learn techniques for projecting emotion and character traits in a cast film or television setting. Learn more about all aspects of film and television, including audition piece placement, script analysis, scene study, monologue construction, cold reading techniques and much more. Learn more about the business of acting and agent evaluations.
                  </p>
                  <a class="homeSection04CardBtn" href="pricing.php">Join Now <i class="fas fa-chevron-right"></i></a>
               </div>
            </div>
         </div>
         <div class="col-lg-3 mb-5">
            <div class="card homeSection04Card shadow" data-aos="zoom-in-up">
               <div class="card-body">
                  <img class="w-100" src="{{ asset('assets/front/') }}/Images/classesPages/classesPageImg08.webp" alt="{{ asset('assets/front/') }}/Images/classesPages/classesPageImg08.webp">
                  <div class="col-lg-12 m-auto mt-4 text-center">
                     <div class="homeSection04Card">
                        <h6>Still <span>Photography</span></h6>
                     </div>
                  </div>
                  <p>
                     Photography class is designed for people who want to take great photographs but fear the frustration of setting up and manipulating a camera. The workshop will teach you how to think more like a photographer and improve your ability to make better decisions about exposure, composition, and critical thinking. You'll cover the fundamentals of white balance and exposure settings, as well as manual controls on many cameras. Online assignments and an on-site critique round out lesson plan and show you the best picture taking practices you'll use for the rest of your life.
                  </p>
                  <a class="homeSection04CardBtn" href="pricing.php">Join Now <i class="fas fa-chevron-right"></i></a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
@endsection
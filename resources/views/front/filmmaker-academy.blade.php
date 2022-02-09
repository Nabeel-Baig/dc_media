@extends('front.include.header')

<main>
    <section class="aboutUsSection01" id="aboutUsSection01">
        <div class="container">
            <div class="col-lg-6 text-center m-auto pt-5 mt-5 mb-5">
                <div class="mainBannerCard" data-aos="fade-up-right">
                    <h1>Filmmaker Academy</h1>
                    <nav class="breadcrumbNav" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
                            <li class="breadcrumb-item activeLink">Filmmaker Academy</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="aboutUsSection02" id="aboutUsSection02">
        <div class="container">
            <div class="homeSection04Card text-center" data-aos="fade-right">
                <h2><span>Filmmaker Academy</span></h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-7 m-auto">
                    <p>
                        Do you learn best by doing? The DC Film Academy’s hands-on approach to filmmaking is designed for you!  Experienced film professionals will guide you through the
                        basics of camera operation and setup, best practices for shooting, and introduce you to the film production workflow using the latest technology.
                    </p>
                </div>
                <div class="col-lg-5 m-auto">
                    <img class="w-100 shadow rounded" src="Assets/Images/filmmakerAcademy/filmmakerAcademyImg01.jpeg" alt="Assets/Images/filmmakerAcademy/filmmakerAcademyImg01.jpeg">
                </div>
                <div class="col-lg-6 m-auto">
                    <div class="dcmaUl">
                        <p>
                            The 8-week course also teaches the pre-and post-production aspects of filmmaking, including video editing basics, editing styles, composition rules, color theory,
                            audio editing, and mixing. You’ll be trained using industry-standard editing tools. To reinforce lessons outside of class, instructors will provide video
                            links and supplemental pdfs. The class meets twice per week, running concurrently with the acting academy for students who are enrolled in both programs.
                        </p>
                    </div>
                </div>
                <div class="col-lg-6 mt-5">
                    <div class="dcmaUl">
                        <h4>What Makes DC Film Academy Unique?</h4>
                        <ul>
                            <li>
                                We are dedicated to both serving young creatives from the District of Columbia’s underserved areas and growing the city’s entertainment industry through film
                            </li>
                            <li>
                                DC Media Academy is located on the site of the former BET studios, with access to nearly 100,000 square feet of production and event space
                            </li>
                            <li>
                                We provide wrap-around services to each student, who will receive social service referrals and other resources when necessary
                            </li>
                            <li>
                                Through its partnership with Washington Digital Media, DCMA graduates will have access to professional development, networking and job opportunities
                            </li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <?php include 'CommonFile/studentReviews.php'; ?>

</main>

@extends('front.include.footer')

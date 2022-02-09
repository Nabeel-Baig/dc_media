@extends('front.include.header')

<main>
    <section class="contactUsSection01" id="contactUsSection01">
        <div class="container">
            <div class="col-lg-6 text-center m-auto pt-5 mt-5 mb-5">
                <div class="mainBannerCard" data-aos="fade-up-right">
                    <h1>Contact Us</h1>
                    <nav class="breadcrumbNav" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
                            <li class="breadcrumb-item activeLink">Contact Us</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>

    <section class="homeSection06" id="homeSection06">
        <div class="container">
            <div class="col-lg-3 text-center m-auto mt-4 mb-4">
                <div class="homeSection04Card" data-aos="fade-right">
                    <h2>Let's talk about <span>everything!</span></h2>
                </div>
            </div>
            <div class="content">
                <div class="container">
                    <div class="row mt-5">
                        <div class="col-md-6 m-auto">
                            <div class="form">
                                <h4>Send us a message</h4>
                                <form class="mb-5 mt-4" method="post" id="contactForm" name="contactForm">
                                    <div class="row">
                                        <div class="col-md-6 form-group mb-5">
                                            <label for="" class="col-form-label">Name <span class="text-danger">*</label>
                                            <input type="text" class="form-control" name="name" id="name" placeholder="Your name">
                                        </div>
                                        <div class="col-md-6 form-group mb-5">
                                            <label for="" class="col-form-label">Email <span class="text-danger">*</label>
                                            <input type="text" class="form-control" name="email" id="email" placeholder="Your email">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-6 form-group mb-5">
                                            <label for="" class="col-form-label">Phone</label>
                                            <input type="text" class="form-control" name="phone" id="phone" placeholder="Phone #">
                                        </div>
                                        <div class="col-md-6 form-group mb-5">
                                            <label for="" class="col-form-label">Company</label>
                                            <input type="text" class="form-control" name="company" id="company" placeholder="Company  name">
                                        </div>
                                    </div>

                                    <div class="row">
                                        <div class="col-md-12 form-group mb-5">
                                            <label for="message" class="col-form-label">Message <span class="text-danger">*</label>
                                            <textarea class="form-control" name="message" id="message" cols="30" rows="4" placeholder="Write your message"></textarea>
                                        </div>
                                    </div>
                                    <div class="row">
                                        <div class="col-md-12 form-group">
                                            <button class="viewAll">Send Message </button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="contact-info">
                                <a href="https://www.google.com/maps">
                                    <img class="w-100" src="Assets/Images/contact-us/mapBg.webp" alt="Assets/Images/contact-us/mapBg.webp">
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

</main>

@extends('front.include.footer')

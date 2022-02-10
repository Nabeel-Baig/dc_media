<header>
    <nav class="navbar navbar-expand-lg navbar-light bg-transparent fixed-top">
        <div class="container">
            <a class="navbar-brand" href="{{ route('home') }}">
                <img src="{{ asset('assets/front/') }}/Images/header/mainHeader.png" alt="">
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo01"
                    aria-controls="navbarTogglerDemo01" aria-expanded="false" aria-label="Toggle navigation">
          <span class="">
            <i class="fas fa-bars"></i>
          </span>
            </button>
            <div class="collapse navbar-collapse" id="navbarTogglerDemo01">
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('home') }}">Home</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('acting') }}">Acting Academy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('filmmaker') }}">Filmmaker Academy</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('digital') }}">Digital Marketing</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('crypto') }}">Crypto & NFTs</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="{{ route('about') }}">About Us</a>
                    </li>
                </ul>
                <ul class="navbar-nav m-auto mb-2 mb-lg-0">
                    <li class="nav-link position-relative">
                        <div class="circle"></div>
                        <div class="phoneHeader">
                            <h6 class="mb-0">Call Us Now</h6>
                            <a href="tel:2027447436">202-744-7436</a>
                        </div>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</header>

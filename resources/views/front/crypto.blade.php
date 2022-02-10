@extends('front.include.app')
@section('title') About Us @endsection
@section('app')
<main>
    <section class="aboutUsSection01" id="aboutUsSection01">
        <div class="container">
            <div class="col-lg-6 text-center m-auto pt-5 mt-5 mb-5">
                <div class="mainBannerCard" data-aos="fade-up-right">
                    <h1>Crypto & NFTs</h1>
                    <nav class="breadcrumbNav" aria-label="breadcrumb">
                        <ol class="breadcrumb">
                            <li class="breadcrumb-item"><a class="text-dark" href="index.php">Home</a></li>
                            <li class="breadcrumb-item activeLink">Crypto & NFTs</li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </section>
    
    <section class="aboutUsSection02" id="aboutUsSection02">
        <div class="container">
            <div class="homeSection04Card text-center" data-aos="fade-right">
                <h2><span>Crypto & NFTs</span></h2>
            </div>
            <div class="row mt-5">
                <div class="col-lg-7 m-auto">
                    <h4>Learn how to secure your digital  assets online with industry experts</h4>
                    <p>
                        Cryptocurrency classes explore the mechanics of blockchain technology and how the blockchain acts like a trusted third party. At its core, 
                        cryptocurrency is typically decentralized digital money designed to be used over the internet.
                    </p>
                </div>
                <div class="col-lg-5 m-auto">
                    <img class="w-100 shadow rounded" src="{{ asset('assets/front/') }}/Images/cryptoAndNfts/cryptoAndNftsImg01.jpeg" alt="{{ asset('assets/front/') }}/Images/cryptoAndNfts/cryptoAndNftsImg01.jpeg">
                </div>
            </div>
        </div>
    </section>
    
    <section class="homeSection06" id="homeSection06">
        <div class="container">
            <div class="col-lg-4 text-center m-auto">
                <div class="homeSection04Card" data-aos="fade-right">
                    <h2>In this course<span> we will cover</span></h2>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-4 mb-5">
                        <div class="card ourTeam shadow" data-aos="fade-right">
                            <div class="card-body">
                                <h5>Creating a Wallet</h5>
                                <p class="text-muted mb-0">
                                    Crypto wallets store your private keys, keeping your crypto safe and accessible. They also allow you to send, receive, and spend cryptocurrencies
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card ourTeam shadow" data-aos="fade">
                            <div class="card-body">
                                <h5>Joining an Exchange</h5>
                                <p class="text-muted mb-0">
                                    A crypto exchange is a platform on which you can buy and sell cryptocurrency
                                </p>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 mb-5">
                        <div class="card ourTeam shadow" data-aos="fade-left">
                            <div class="card-body">
                                <h5>Trading Crypto</h5>
                                <p class="text-muted mb-0">
                                    learn about smart contracts and how you can implement minimal trust applications for almost any task imaginable
                                </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="homeSection06" id="homeSection06">
        <div class="container">
            <div class="col-lg-4 text-center m-auto">
                <div class="homeSection04Card" data-aos="fade-right">
                    <h2>What you will <span>learn</span></h2>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-6 m-auto">
                        <img class="w-100 shadow rounded" src="{{ asset('assets/front/') }}/Images/cryptoAndNfts/cryptoAndNftsImg02.jpeg" alt="{{ asset('assets/front/') }}/Images/cryptoAndNfts/cryptoAndNftsImg02.jpeg">
                    </div>
                    <div class="col-lg-6">
                        <div class="dcmaUl">
                            <ul>
                                <li>
                                    Upon completion of this course, students will be able to invest, mine, trade and thoroughly understand cryptocurrencies
                                </li>
                                <li>
                                    Understand what makes a great cryptocurrency as a great long term investment
                                </li>
                                <li>
                                    Understand what are the biggest mistakes new investors make in cryptocurrencies?
                                </li>
                                <li>
                                    Know how to watch out for scams and managing risk
                                </li>
                                <li>
                                    Learn tools to be able to identify the next great cryptocurrency (what to look for & watch out for)
                                </li>
                                <li>
                                    Learn how to read charts
                                </li>
                                <li>
                                    How to buy Bitcoin
                                </li>
                                <li>
                                    How to mine ETH
                                </li>
                                <li>
                                    Understand the pros and cons of Bitcoin
                                </li>
                                <li>
                                    How to buy Ethereum
                                </li>
                                <li>
                                    use USB Wallets (Trezor, Ledger Nano S, DigitalBitBox & KeepKey)
                                </li>
                                <li>
                                    How to get a Coinbase wallet + how to use it +how to transfer money out of this wallet
                                </li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    
    <section class="homeSection06" id="homeSection06">
        <div class="container">
            <div class="col-lg-4 text-center m-auto">
                <div class="homeSection04Card" data-aos="fade-right">
                    <h2>I want to join the webinar, <span>Sign me up!</span></h2>
                </div>
            </div>
            <div class="container">
                <div class="row mt-5">
                    <div class="col-lg-6 m-auto">
                        <div class="contactUs">
                            <div class="row">
                                <form>
                                    <div class="row">
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="firstName" class="form-label">First Name</label>
                                                <input type="text" class="form-control" id="firstName" name="firstName">
                                            </div>
                                        </div>
                                        <div class="col-lg-6">
                                            <div class="mb-3">
                                                <label for="lastName" class="form-label">Last Name</label>
                                                <input type="text" class="form-control" id="lastName" name="lastName">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="mb-3">
                                                <label for="email" class="form-label">Email</label>
                                                <input type="email" class="form-control" id="email" name="email">
                                            </div>
                                        </div>
                                        <div class="col-lg-12">
                                            <div class="form-floating mb-3">
                                              <label for="Message">Message</label>
                                              <textarea class="form-control" id="Message" style="height: 100px"></textarea>
                                            </div>
                                        </div>
                                    </div>
                                  <button type="submit" class="btn btn-primary w-100">Submit</button>
                                </form>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-6 mt-5">
                        <img class="w-100 shadow rounded" src="{{ asset('assets/front/') }}/Images/digitalMarketing/digitalMarketingImg03.jpeg" alt="{{ asset('assets/front/') }}/Images/digitalMarketing/digitalMarketingImg03.jpeg">
                    </div>
                </div>
            </div>
        </div>
    </section>
</main>
@endsection

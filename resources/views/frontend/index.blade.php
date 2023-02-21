@extends('frontend.main_master')
@section('main')
    <!-- banner-area -->
    <section class="banner">
    <div class="container custom-container">
    <div class="row align-items-center justify-content-center justify-content-lg-between">
    <div class="col-lg-6 order-0 order-lg-2">
    <div class="banner__img text-center text-xxl-end">
    <img  class="rounded-full" src="https://images.unsplash.com/photo-1624953901718-e24ee7200b85?crop=entropy&cs=tinysrgb&fit=crop&fm=jpg&h=1024&ixid=MnwxfDB8MXxyYW5kb218MHx8bW9uZXl8fHx8fHwxNjc2ODg4MTE2&ixlib=rb-4.0.3&q=80&utm_campaign=api-credit&utm_medium=referral&utm_source=unsplash_source&w=760" alt="">
    </div>
    </div>
    <div class="col-xl-5 col-lg-6">
    <div class="banner__content">
    <h2 class="title wow fadeInUp" data-wow-delay=".2s"><span>M30 Investment</span> <br> Platform to make money online.</h2>
    <p class="wow fadeInUp" data-wow-delay=".4s">We have considered our solutions to support every stage of your growth and get the potential service.</p>
    {{-- <a href="about.html" class="btn banner__btn wow fadeInUp" data-wow-delay=".6s">more about me</a> --}}
    </div>
    </div>
    </div>
    </div>
    {{-- <div class="scroll__down">
    <a href="#aboutSection" class="scroll__link">Scroll down</a>
    </div>
    <div class="banner__video">
    <a href="https://www.youtube.com/watch?v=XHOmBV4js_E" class="popup-video"><i class="fas fa-play"></i></a> --}}

    </section>


    <!-- services-area -->
    <section class="services">
    <div class="container">
    <div class="services__title__wrap">
    <div class="row align-items-center justify-content-between">
    <div class="col-xl-5 col-lg-6 col-md-8">
    <div class="section__title">
    <span class="sub-title">OUR INVESTMENT PLANS</span>
    <h2 class="title">Types of Investments and How They Work</h2>
    </div>
    </div>
    <div class="col-xl-5 col-lg-6 col-md-4">
    <div class="services__arrow"></div>
    </div>
    </div>
    </div>
    <div class="row gx-0 services__active">
    <div class="col-xl-3">
    <div class="services__item">
    <div class="services__thumb">
    <a href="services-details.html"><img src="assets/img/images/services_img01.jpg" alt=""></a>
    </div>
    <div class="services__content">
    <div class="services__icon">
    <img class="light" src="assets/img/icons/services_light_icon01.png" alt="">
    <img class="dark" src="assets/img/icons/services_icon01.png" alt="">
    </div>
    <h3 class="title"><a href="services-details.html">Standard Plan</a></h3>
    <p>Weekly 48%</p>
    <ul class="services__list">
    <li>Investment ₱500-₱10000</li>
    <li>Return Type Per Period </li>
    <li>Number of Period 10times</li>
    <li>Anytime Profit Withdraw</li>
    </ul>
    <a href="/login" class="btn border-btn">Invest Now</a>
    </div>
    </div>
    </div>
    <div class="col-xl-3">
    <div class="services__item">
    <div class="services__thumb">
    <a href="services-details.html"><img src="assets/img/images/services_img02.jpg" alt=""></a>
    </div>
    <div class="services__content">
    <div class="services__icon">
    <img class="light" src="assets/img/icons/services_light_icon02.png" alt="">
    <img class="dark" src="assets/img/icons/services_icon02.png" alt="">
    </div>
    <h3 class="title"><a href="services-details.html">Advanced Plan</a></h3>
    <p>Hour $10</p>
    <ul class="services__list">
        <li>Investment  ₱5000-₱20000</li>
        <li>Return Type Per Period </li>
        <li>Number of Period 20times</li>
        <li>Anytime Profit Withdraw</li>
    </ul>
    <a href="/login" class="btn border-btn">Invest Now</a>
    </div>
    </div>
    </div>
    <div class="col-xl-3">
    <div class="services__item">
    <div class="services__thumb">
    <a href="/login"><img src="assets/img/images/services_img03.jpg" alt=""></a>
    </div>
    <div class="services__content">
    <div class="services__icon">
    <img class="light" src="assets/img/icons/services_light_icon03.png" alt="">
    <img class="dark" src="assets/img/icons/services_icon03.png" alt="">
    </div>
    <h3 class="title"><a href="services-details.html">Pro Plan</a></h3>
    <p>Daily $10</p>
    <ul class="services__list">
        <li>Investment ₱10000-₱50000</li>
        <li>Return Type Per Lifetime </li>
        <li>Number of Period Unlimited Times</li>
        <li>Anytime Profit Withdraw</li>
    </ul>
    <a href="/login" class="btn border-btn disabled:opacity-75">Invest Now</a>
    </div>
    </div>
    </div>
    <div class="col-xl-3">
    <div class="services__item">
    <div class="services__thumb">
    <a href="services-details.html"><img src="assets/img/images/services_img04.jpg" alt=""></a>
    </div>
    <div class="services__content">
    <div class="services__icon">
    <img class="light" src="assets/img/icons/services_light_icon04.png" alt="">
    <img class="dark" src="assets/img/icons/services_icon04.png" alt="">
    </div>
    <h3 class="title"><a href="services-details.html">Super Pro Plan</a></h3>
    <p>Soon</p>
    <ul class="services__list">
    <li>Coming Soon</li>
    <li>Coming Soon</li>
    <li>Coming Soon</li>
    <li>Coming Soon</li>
    
    </ul>
    <button type="button" class="btn border-btn px-8 py-3 rounded focus:outline-none disabled:opacity-75"
  disabled>Unavailable</button>
    </div>
    </div>
    </div>
    <div class="col-xl-3">
    <div class="services__item">
    <div class="services__thumb">
    <a href="services-details.html"><img src="assets/img/images/services_img03.jpg" alt=""></a>
    </div>
    <div class="services__content">
    <div class="services__icon">
    <img class="light" src="assets/img/icons/services_light_icon02.png" alt="">
    <img class="dark" src="assets/img/icons/services_icon02.png" alt="">
    </div>
    <h3 class="title"><a href="services-details.html">Super Advance Pro Plan</a></h3>
    <p>Soon</p>
    <ul class="services__list">
        <li>Coming Soon</li>
        <li>Coming Soon</li>
        <li>Coming Soon</li>
    {{-- <li>Information Architecture</li> --}}
    </ul>
    <button type="button" class="btn border-btn px-8 py-3 rounded focus:outline-none disabled:opacity-75"
  disabled>Unavailable</button>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- services-area-end -->

    <!-- work-process-area -->
    <section class="work__process">
    <div class="container">
    <div class="row justify-content-center">
    <div class="col-xl-6 col-lg-8">
    <div class="section__title text-center">
    <span class="sub-title">HOW IT WORKS</span>
    <h2 class="title">The steps are describe how the application works and what's inside</h2>
    </div>
    </div>
    </div>
    <div class="row work__process__wrap">
    <div class="col">
    <div class="work__process__item">
    <span class="work__process_step">Step - 01</span>
    <div class="work__process__icon">
    <img class="light" src="assets/img/icons/wp_light_icon01.png" alt="">
    <img class="dark" src="assets/img/icons/wp_icon01.png" alt="">
    </div>
    <div class="work__process__content">
    <h4 class="title">Register Account</h4>
    <p>By Registering the website you will able to start your operation.</p>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="work__process__item">
    <span class="work__process_step">Step - 02</span>
    <div class="work__process__icon">
    <img class="light" src="assets/img/icons/wp_light_icon02.png" alt="">
    <img class="dark" src="assets/img/icons/wp_icon02.png" alt="">
    </div>
    <div class="work__process__content">
    <h4 class="title">Verify Email</h4>
    <p>After creating the account user need to verify the email for account purpose.</p>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="work__process__item">
    <span class="work__process_step">Step - 03</span>
    <div class="work__process__icon">
    <img class="light" src="assets/img/icons/wp_light_icon03.png" alt="">
    <img class="dark" src="assets/img/icons/wp_icon03.png" alt="">
    </div>
    <div class="work__process__content">
    <h4 class="title">Deposit Money</h4>
    <p>Users can deposit using any automatic or manual gateways.</p>
    </div>
    </div>
    </div>
    <div class="col">
    <div class="work__process__item">
    <span class="work__process_step">Step - 04</span>
    <div class="work__process__icon">
    <img class="light" src="assets/img/icons/wp_light_icon04.png" alt="">
    <img class="dark" src="assets/img/icons/wp_icon04.png" alt="">
    </div>
    <div class="work__process__content">
    <h4 class="title">Withdraw and Enjoy</h4>
    <p>Withdraw can be performed in the main wallet and it will take a few time to complete</p>
    </div>
    </div>
    </div>
    </div>
    </div>
    </section>
    <!-- work-process-area-end -->

   
    

@endsection
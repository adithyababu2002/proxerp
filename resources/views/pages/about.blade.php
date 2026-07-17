@extends('layouts.app')
@section('content')
    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">About Us</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active text-primary">About</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

  <!-- About Start -->
<div class="container-fluid about py-5">
    <div class="container py-5">

        <!-- MAIN HEADING -->
        <div class="text-center mb-5 wow fadeInUp">
            <h4 class="text-primary">About Us – PROX ERP</h4>
            <h1 class="display-5 mb-3">Empowering Businesses with Smarter ERP Solutions</h1>
            <p class="mx-auto" style="max-width: 900px;">
                At PROX ERP, we transform complex business operations into simple, actionable processes.
                Our platform integrates finance, inventory, sales, and HR into a single system.
            </p>
        </div>

        <!-- WHO WE ARE -->
        <div class="row align-items-center g-5 mb-5">
            <div class="col-lg-6 wow fadeInLeft">
                <img src="{{ asset('img/standard-quality-control-concept-m.jpg') }}" class="img-fluid rounded w-100" alt="Who We Are">
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="d-flex align-items-start">
                    <i class="fas fa-glass-cheers fa-3x text-primary me-3"></i>
                    <div>
                        <h3>Who We Are</h3>
                        <p>
                            PROX ERP was founded with a focused vision to simplify enterprise management and make it future-ready. Our team brings together ERP expertise, software innovation, cyber intelligence, and strong business insight. We design systems that are flexible, scalable, and reliable across industries. Every feature is purpose-built to reduce operational complexity, improve visibility, and help businesses concentrate on growth, performance, and confident decision-making.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- WHAT WE OFFER -->
        <div class="row align-items-center g-5 mb-5 flex-lg-row-reverse">
            <div class="col-lg-6 wow fadeInRight">
                <img src="{{ asset('img/123/standard-quality-control-concept-m (3).jpg') }}" class="img-fluid rounded w-100" alt="What We Offer">
            </div>
            <div class="col-lg-6 wow fadeInLeft">
                <div class="d-flex align-items-start">
                    <i class="fas fa-dot-circle fa-3x text-primary me-3"></i>
                    <div>
                        <h3>What We Offer</h3>
                        <p>PROX ERP delivers a unified ERP ecosystem that supports every critical business function. Finance and Accounting provide real-time control and clarity. Inventory and Supply Chain ensure smooth stock and logistics flow. Sales and Customer Management strengthen engagement and revenue outcomes. Human Resource Management simplifies payroll and performance tracking. All modules are fully customizable to your industry, scale, and operational needs.</p>
                        <ul class="list-unstyled">
                            <li>✔ Finance & Accounting</li>
                            <li>✔ Inventory & Supply Chain</li>
                            <li>✔ Sales & Customer Management</li>
                            <li>✔ Human Resource Management</li>
                            <li>✔ Customizable ERP Solutions</li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>

        <!-- WHY PROX ERP -->
        <div class="row align-items-center g-5 mb-5">
            <div class="col-lg-6 wow fadeInLeft">
                <img src="{{ asset('img/123/standard-quality-control-concept-m (4).jpg') }}" class="img-fluid rounded w-100" alt="Why Prox ERP">
            </div>
            <div class="col-lg-6 wow fadeInRight">
                <div class="d-flex align-items-start">
                    <i class="fas fa-hand-holding-usd fa-3x text-primary me-3"></i>
                    <div>
                        <h3>Why PROX ERP</h3>
                        <p>
                            Organizations choose PROX ERP for our balance of technology, simplicity, and dependability. Our intuitive dashboards offer actionable insights with minimal training effort. Enterprise-grade security protects business-critical data. The system is flexible and scalable, evolving with your growth. Backed by proven multi-industry experience, we deliver practical ERP solutions that align technology with business objectives and real operational results.
                        </p>
                    </div>
                </div>
            </div>
        </div>

        <!-- OUR VISION -->
        <div class="row align-items-center g-5 flex-lg-row-reverse">
            <div class="col-lg-6 wow fadeInRight">
                <img src="{{ asset('img/123/standard-quality-control-concept-m (7).jpg') }}" class="img-fluid rounded w-100" alt="Our Vision">
            </div>
            <div class="col-lg-6 wow fadeInLeft">
                <div class="d-flex align-items-start">
                    <i class="fas fa-lock fa-3x text-primary me-3"></i>
                    <div>
                        <h3>Our Vision</h3>
                       <p>Our vision is to make technology simple, intelligent, and empowering for every business. We strive to convert complex systems into actionable tools that support faster decisions and stronger operations. By combining innovation, automation, and insight, PROX ERP enables organizations to adapt confidently to change. We believe technology should work quietly in the background while businesses lead, grow, and succeed.</p>
                    </div>
                </div>
            </div>
        </div>

    </div>
</div>


                <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="position-relative rounded">
                        <div class="rounded" style="margin-top: 40px;">
                            <div class="row g-0">
                                <div class="col-lg-12">
                                    <!-- <div class="rounded mb-4">
                                        <img src="img/about.jpg" class="img-fluid rounded w-100" alt="">
                                    </div> -->
                                    <div class="row gx-4 gy-0">
                                        <div class="col-6">
                                            <!-- <div class="counter-item bg-primary rounded text-center p-4 h-100">
                                                <div class="counter-item-icon mx-auto mb-3">
                                                    <i class="fas fa-thumbs-up fa-3x text-white"></i>
                                                </div>
                                                <div class="counter-counting mb-3">
                                                    <span class="text-white fs-2 fw-bold"
                                                        data-toggle="counter-up">150</span>
                                                    <span class="h1 fw-bold text-white">K +</span>
                                                </div>
                                                <h5 class="text-white mb-0">Happy Visitors</h5>
                                            </div>
                                        </div> -->
                                        <div class="col-6">
                                            <!-- <div class="counter-item bg-dark rounded text-center p-4 h-100">
                                                <div class="counter-item-icon mx-auto mb-3">
                                                    <i class="fas fa-certificate fa-3x text-white"></i>
                                                </div> -->
                                                <!-- <div class="counter-counting mb-3">
                                                    <span class="text-white fs-2 fw-bold"
                                                        data-toggle="counter-up">122</span>
                                                    <span class="h1 fw-bold text-white"> +</span>
                                                </div>
                                                <h5 class="text-white mb-0">Awwards Winning</h5>
                                            </div> -->
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <!-- <div class="rounded bg-primary p-4 position-absolute d-flex justify-content-center"
                            style="width: 90%; height: 80px; top: -40px; left: 50%; transform: translateX(-50%);">
                            <h3 class="mb-0 text-white">20 Years Experiance</h3>
                        </div> -->
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->
    <!-- Feature Start -->
   <div class="container-fluid feature py-5">
    <div class="container py-5">

        <div class="feature-carousel owl-carousel">

            <!-- ITEM 1 -->
            <div class="feature-item">
                <img src="{{ asset('/img/pic/9.png') }}" class="img-fluid rounded w-100" alt="">
                <div class="feature-content p-4">
                    <h4 class="text-white">SOFTWARE THAT LEARNS HOW YOU WORK</h4>
                    <p class="text-white">
                       Every organization has its own rhythm, rules, and logic. PROX ERP is designed by first understanding your real-world operations—how decisions are made, how work flows, and where bottlenecks exist. Instead of forcing pre-defined templates, we architect the system around your business DNA, ensuring higher adoption, faster execution, and minimal resistance from teams.
                    </p>
                </div>
            </div>

            <!-- ITEM 2 -->
            <div class="feature-item">
                <img src="{{ asset('/img/pic/1.png') }}" class="img-fluid rounded w-100" alt="">
                <div class="feature-content p-4">
                    <h4 class="text-white">ENTERPRISE-GRADE, WITHOUT ENTERPRISE BURDEN</h4>
                    <p class="text-white">
                        Most ERP solutions make customization expensive, slow, and restrictive. PROX ERP breaks that barrier by offering deep functional customization at practical, transparent costs. You get exactly what your business needs—no bloated modules, no unnecessary licensing—just powerful software that delivers measurable value from day one.
                    </p>
                </div>
            </div>

            <!-- ITEM 3 -->
            <div class="feature-item">
                <img src="{{ asset('/img/pic/2.png') }}" class="img-fluid rounded w-100" alt="">
                <div class="feature-content p-4">
                    <h4 class="text-white">START SMALL. SCALE SMART.</h4>
                    <p class="text-white">
                        Business needs evolve—and your software should evolve with you. PROX ERP is built as a modular ecosystem where you can activate features as and when required. Begin with core operations and seamlessly expand into finance, HR, CRM, analytics, or compliance without system overhauls, data migration risks, or downtime.
                    </p>
                </div>
            </div>

            <!-- ITEM 4 -->
            <div class="feature-item">
                <img src="{{ asset('/img/pic/3.png') }}" class="img-fluid rounded w-100" alt="">
                <div class="feature-content p-4">
                    <h4 class="text-white">DESIGNED FOR PROCESSES, NOT INDUSTRY LABELS</h4>
                    <p class="text-white">
                        Instead of building rigid “industry-specific” versions, PROX ERP focuses on the underlying business processes that drive performance. This process-first approach allows us to serve finance companies, factories, institutions, service firms, and enterprises with the same robust core—customized precisely to their operational logic.
                    </p>
                </div>
            </div>


             <!-- ITEM 5 -->
            <div class="feature-item">
                <img src="{{ asset('/img/pic/4.png') }}" class="img-fluid rounded w-100" alt="">
                <div class="feature-content p-4">
                    <h4 class="text-white">BEYOND IMPLEMENTATION. BEYOND SUPPORT.</h4>
                    <p class="text-white">
                        For us, deployment is just the beginning. PROX ERP is backed by a long-term partnership mindset—continuous optimization, feature enhancements, and responsive support as your business scales. We don’t just deliver software; we evolve it alongside your growth, challenges, and ambitions.
                    </p>
                </div>
            </div>

        </div>
    </div>
</div><script>
$('.feature-carousel').owlCarousel({
    loop: true,
    margin: 30,
    nav: true,
    dots: false,
    autoplay: false,   // ❌ no automatic scrolling
    smartSpeed: 700,
    navText: [
        '<i class="fa fa-chevron-left"></i>',
        '<i class="fa fa-chevron-right"></i>'
    ],
    responsive:{
        0:{ items:1 },
        768:{ items:2 },
        992:{ items:3 }
    }
});
</script>
<style>.feature-carousel .owl-nav button {
    background: #0d6efd !important;
    color: #fff !important;
    width: 45px;
    height: 45px;
    border-radius: 50%;
    position: absolute;
    top: 45%;
}

.feature-carousel .owl-nav .owl-prev {
    left: -60px;
}

.feature-carousel .owl-nav .owl-next {
    right: -60px;
}
</style>
    <!-- Feature End -->

    <!-- Gallery Start -->
    <!-- <div class="container-fluid gallery pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Gallery</h4>
                <h1 class="display-5 mb-4">Captured Moments In Waterland</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt sint
                    dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div> -->
            <!-- <div class="row g-4">
                <div class="col-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="gallery-item">
                        <img src="img/gallery-1.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-1.jpg" class="btn btn-light btn-lg-square rounded-circle"
                                data-lightbox="Gallery-1"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div> -->
                <!-- </div>
                <div class="col-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="gallery-item">
                        <img src="img/gallery-2.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-2.jpg" class="btn btn-light btn-lg-square rounded-circle"
                                data-lightbox="Gallery-2"><i class="fas fa-search-plus"></i></a>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="col-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="gallery-item">
                        <img src="img/gallery-3.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-3.jpg" class="btn btn-light btn-lg-square rounded-circle"
                                data-lightbox="Gallery-3"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div> -->
                <!-- <div class="col-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="gallery-item">
                        <img src="img/gallery-4.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-4.jpg" class="btn btn-light btn-lg-square rounded-circle"
                                data-lightbox="Gallery-4"><i class="fas fa-search-plus"></i></a>
                        </div> -->
                    </div>
                </div>
                <!-- <div class="col-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="gallery-item">
                        <img src="img/gallery-5.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-5.jpg" class="btn btn-light btn-lg-square rounded-circle"
                                data-lightbox="Gallery-5"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="gallery-item">
                        <img src="img/gallery-6.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-6.jpg" class="btn btn-light btn-lg-square rounded-circle"
                                data-lightbox="Gallery-6"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div> -->
            </div>
        </div>
    </div>
    <!-- Gallery End -->

    <!-- Team Start -->
    <<style>
/* =========================
   TEAM IMAGE HOVER
========================= */

.team-image-wrapper {
    position: relative;
    width: 100px;
    height: 100px;
}

.team-img {
    position: absolute;
    inset: 0;
    width: 100px;
    height: 100px;
    object-fit: cover;
    transition: opacity 0.4s ease-in-out;
}

.team-img-1 { opacity: 1; }
.team-img-2 { opacity: 0; }

.team-image-wrapper:hover .team-img-1 {
    opacity: 0;
}

.team-image-wrapper:hover .team-img-2 {
    opacity: 1;
}


/* =========================
   SWIPER CAROUSEL
========================= */

.team-carousel {
    position: relative;
}

/* Arrow common */
.team-carousel .swiper-button-prev,
.team-carousel .swiper-button-next {
    width: 54px;
    height: 44px;
    background: #38bdf8;
    border-radius: 999px;
    color: #fff;
    transition: all 0.3s ease;
}

.team-carousel .swiper-button-prev::after,
.team-carousel .swiper-button-next::after {
    font-size: 18px;
    font-weight: bold;
}

/* Left arrow */
.team-carousel .swiper-button-prev {
    left: -70px;
}

/* Right arrow */
.team-carousel .swiper-button-next {
    right: -70px;
}

/* Hover */
.team-carousel .swiper-button-prev:hover,
.team-carousel .swiper-button-next:hover {
    background: #0ea5e9;
    transform: scale(1.1);
}

/* =========================
   RESPONSIVE
========================= */

@media (max-width: 992px) {
    .team-carousel .swiper-button-prev {
        left: -30px;
    }
    .team-carousel .swiper-button-next {
        right: -30px;
    }
}

@media (max-width: 576px) {
    .team-carousel .swiper-button-prev,
    .team-carousel .swiper-button-next {
        display: none;
    }
}
</style>

<script>
document.addEventListener("DOMContentLoaded", function () {
    new Swiper(".team-carousel", {
        loop: true,
        spaceBetween: 24,
        speed: 700,
        autoplay: {
            delay: 4000,
            disableOnInteraction: false,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            768: {
                slidesPerView: 2,
            },
            1200: {
                slidesPerView: 3,
            }
        }
    });
});
</script>

    <div class="container-fluid team pb-5">
    <div class="container pb-5">

        <!-- Heading -->
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h4 class="text-primary">Meet Our Team</h4>
            <p class="mb-0">
                Behind PROX ERP is a dedicated team of experts who combine
                technical mastery with business understanding.
            </p>
        </div>

        <!-- Swiper -->
        <div class="swiper team-carousel">
            <div class="swiper-wrapper">

                @foreach($teams as $team)
                    <div class="swiper-slide">
                        <div class="team-item p-4">
                            <div class="team-content">

                                <!-- Name + Image -->
                                <div class="d-flex justify-content-between border-bottom pb-4 align-items-center">

                                    <div class="text-start">
                                        <h4 class="mb-0">{{ $team->name }}</h4>
                                        <p class="mb-0">{{ $team->profession }}</p>
                                    </div>

                                    <div class="team-image-wrapper">
                                        <img src="{{ asset('storage/'.$team->image1) }}"
                                             class="team-img team-img-1 rounded"
                                             alt="{{ $team->name }}">

                                        @if($team->image2)
                                            <img src="{{ asset('storage/'.$team->image2) }}"
                                                 class="team-img team-img-2 rounded"
                                                 alt="{{ $team->name }}">
                                        @endif
                                    </div>
                                </div>

                                <!-- Social -->
                                @if($team->link)
                                    <div class="team-icon rounded-pill my-4 p-3 text-center">
                                        <a class="btn btn-primary btn-sm-square rounded-circle"
                                           href="{{ $team->link }}" target="_blank">
                                            <i class="fab fa-linkedin-in"></i>
                                        </a>
                                    </div>
                                @endif

                                <!-- Description -->
                                <p class="text-center mb-0">
                                    {{ $team->description }}
                                </p>

                            </div>
                        </div>
                    </div>
                @endforeach

            </div>

            <!-- Arrows -->
            <div class="swiper-button-prev"></div>
            <div class="swiper-button-next"></div>
        </div>

    </div>
</div>

    <!-- Team End -->
     <style>/* ===============================
   GLOBAL MOBILE SAFETY
================================ */
body {
    overflow-x: hidden;
}

/* ===============================
   HEADER / BREADCRUMB
================================ */
@media (max-width: 767px) {
    .bg-breadcrumb h4 {
        font-size: 26px;
    }

    .bg-breadcrumb .breadcrumb {
        font-size: 14px;
    }

    .bg-breadcrumb {
        padding-top: 40px;
        padding-bottom: 40px;
    }
}

/* ===============================
   ABOUT SECTION
================================ */
@media (max-width: 991px) {

    .about h1 {
        font-size: 30px;
        line-height: 1.3;
    }

    .about h3 {
        font-size: 22px;
    }

    .about p {
        font-size: 15px;
        line-height: 1.7;
    }

    .about ul li {
        font-size: 14px;
        margin-bottom: 6px;
    }

    .about img {
        margin-bottom: 20px;
    }

    .about .d-flex {
        flex-direction: column;
        align-items: flex-start;
    }

    .about .d-flex i {
        margin-bottom: 10px;
    }
}

@media (max-width: 575px) {

    .about h1 {
        font-size: 26px;
    }

    .about h3 {
        font-size: 20px;
    }

    .about p {
        font-size: 14px;
    }
}

/* ===============================
   FEATURE CAROUSEL
================================ */
@media (max-width: 991px) {

    .feature-content h4 {
        font-size: 18px;
    }

    .feature-content p {
        font-size: 14px;
        line-height: 1.6;
    }

    .feature-carousel .owl-nav .owl-prev {
        left: 5px;
    }

    .feature-carousel .owl-nav .owl-next {
        right: 5px;
    }
}

@media (max-width: 575px) {

    .feature-item img {
        height: 220px;
        object-fit: cover;
    }

    .feature-carousel .owl-nav button {
        width: 36px;
        height: 36px;
        font-size: 14px;
        top: 50%;
    }

    .feature-content {
        padding: 15px;
    }

    .feature-content h4 {
        font-size: 16px;
    }

    .feature-content p {
        font-size: 13px;
    }
}

/* ===============================
   TEAM SECTION
================================ */
@media (max-width: 991px) {

    .team-item {
        text-align: center;
    }

    .team-content .d-flex {
        flex-direction: column;
        align-items: center;
        text-align: center;
    }

    .team-content h4 {
        margin-top: 10px;
    }

    .team-image-wrapper {
        margin-top: 12px;
    }

    .team-carousel .swiper-button-prev {
        left: -25px;
    }

    .team-carousel .swiper-button-next {
        right: -25px;
    }
}

@media (max-width: 576px) {

    .team-content p {
        font-size: 14px;
        line-height: 1.6;
    }

    .team-image-wrapper {
        width: 90px;
        height: 90px;
    }

    .team-img {
        width: 90px;
        height: 90px;
    }

    /* Hide arrows on mobile (touch swipe enabled) */
    .team-carousel .swiper-button-prev,
    .team-carousel .swiper-button-next {
        display: none;
    }
}

/* ===============================
   GRID BALANCE FIX
================================ */
@media (max-width: 991px) {
    .col-xl-6,
    .col-lg-6 {
        margin-bottom: 25px;
    }
}</style>
@endsection
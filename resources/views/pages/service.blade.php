@extends('layouts.app')
@section('content')

    <!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our Software</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                 <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active text-primary">Service</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->

    <!-- Service Start -->
    <div class="container-fluid service py-5" style="margin-top: 100px;">
        <div class="container service-section py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Expertise</h4>
                <h1 class="display-5 text-white mb-4">Explore Our Software Solutions</h1>
                <p class="mb-0 text-white">We design and deliver intelligent software solutions tailored to real business needs. Each system is built to improve efficiency, enhance control, and support long-term growth through scalable, secure, and user-friendly technology.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>
                <div class="col-md-10 col-lg-8 col-xl-8 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-days p-4">
                        <div
                            class="py-2 border-bottom border-top d-flex align-items-center justify-content-between flex-wrap">
                            <h4 class="mb-0 pb-2 pb-sm-0">Monday - Saturday</h4>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>9:00 AM - 6:00 PM</p>
                        </div>
                        <!-- <div
                            class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap">
                            <h4 class="mb-0 pb-2 pb-sm-0">Saturday - Sunday</h4>
                            <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i>09:00 AM - 17:00 PM</p>
                        </div> -->
                        <div
                            class="py-2 border-bottom d-flex align-items-center justify-content-between flex-shrink-1 flex-wrap">
                            <h4 class="mb-0">Sunday</h4>
                            <p class="mb-0"><i class="fas text-primary me-2"></i>Holiday</p>
                        </div>
                    </div>
                </div>
                <div class="col-0 col-md-1 col-lg-2 col-xl-2"></div>

                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="service-item p-4">
                        <div class="service-content">
                            <div class="mb-4">
    <i class="fas fa-layer-group fa-4x"></i>
</div>
                            <a href="#" class="h4 d-inline-block mb-3">ProxERP Solutions For All</a>
                            <p class="mb-0">Integrated enterprise systems designed to manage operations, finance, people, and performance through one unified platform.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="service-item p-4">
                        <div class="service-content">
                            <div class="mb-4">
    <i class="fas fa-code fa-4x"></i>
</div>
                            <a href="#" class="h4 d-inline-block mb-3">Custom Business Software</a>
                            <p class="mb-0">Tailor-made applications built around your workflows, ensuring flexibility, accuracy, and seamless adoption across teams.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="service-item p-4">
                        <div class="service-content">
                           <div class="mb-4">
    <i class="fas fa-shield-alt fa-4x"></i>
</div>
                            <a href="#" class="h4 d-inline-block mb-3">Secure System Architecture</a>
                            <p class="mb-0">Robust frameworks with role-based access and data protection, ensuring reliability for mission-critical environments.
                            </p>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 col-lg-6 col-xl-3 wow fadeInUp" data-wow-delay="0.8s">
                    <div class="service-item p-4">
                        <div class="service-content">
                           <div class="mb-4">
    <i class="fas fa-chart-line fa-4x"></i>
</div>
                            <a href="#" class="h4 d-inline-block mb-3">Scalable Digital Platforms
</a>
                            <p class="mb-0">Future-ready systems that evolve with your business, allowing easy expansion without disrupting existing operations.
                            </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Service End -->

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

    <!-- Testimonial Start -->
    <!-- <div class="container-fluid testimonial py-5">
        <div class="container py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Testimonials</h4>
                <h1 class="display-5 text-white mb-4">Our Clients Riviews</h1>
                <p class="text-white mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci
                    facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="owl-carousel testimonial-carousel wow fadeInUp" data-wow-delay="0.2s">
                <div class="testimonial-item p-4">
                    <p class="text-white fs-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos mollitia
                        fugiat, nihil autem reprehenderit aperiam maxime minima consequatur, nam iste eius velit perferendis
                        voluptatem at atque neque soluta reiciendis doloremque.
                    </p>
                    <div class="testimonial-inner">
                        <div class="testimonial-img">
                            <img src="img/testimonial-1.jpg" class="img-fluid" alt="Image">
                            <div class="testimonial-quote btn-lg-square rounded-circle"><i
                                    class="fa fa-quote-right fa-2x"></i>
                            </div>
                        </div>
                        <div class="ms-4">
                            <h4>Person Name</h4>
                            <p class="text-start text-white">Profession</p>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4">
                    <p class="text-white fs-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos mollitia
                        fugiat, nihil autem reprehenderit aperiam maxime minima consequatur, nam iste eius velit perferendis
                        voluptatem at atque neque soluta reiciendis doloremque.
                    </p>
                    <div class="testimonial-inner">
                        <div class="testimonial-img">
                            <img src="img/testimonial-2.jpg" class="img-fluid" alt="Image">
                            <div class="testimonial-quote btn-lg-square rounded-circle"><i
                                    class="fa fa-quote-right fa-2x"></i>
                            </div>
                        </div>
                        <div class="ms-4">
                            <h4>Person Name</h4>
                            <p class="text-start text-white">Profession</p>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="testimonial-item p-4">
                    <p class="text-white fs-4 mb-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Quos mollitia
                        fugiat, nihil autem reprehenderit aperiam maxime minima consequatur, nam iste eius velit perferendis
                        voluptatem at atque neque soluta reiciendis doloremque.
                    </p>
                    <div class="testimonial-inner">
                        <div class="testimonial-img">
                            <img src="img/testimonial-3.jpg" class="img-fluid" alt="Image">
                            <div class="testimonial-quote btn-lg-square rounded-circle"><i
                                    class="fa fa-quote-right fa-2x"></i>
                            </div>
                        </div>
                        <div class="ms-4">
                            <h4>Person Name</h4>
                            <p class="text-start text-white">Profession</p>
                            <div class="d-flex text-primary">
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star"></i>
                                <i class="fas fa-star text-white"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>-->
</div>
   <style>/* =========================
   GLOBAL MOBILE FIXES
========================= */
@media (max-width: 767px) {

    /* Breadcrumb header */
    .bg-breadcrumb h4 {
        font-size: 26px;
    }

    .bg-breadcrumb .breadcrumb {
        font-size: 14px;
    }

    /* Section spacing */
    .service {
        margin-top: 40px !important;
        padding-top: 30px;
    }

    .service-section {
        padding: 20px 10px;
    }

    /* Section headings */
    .service-section h1 {
        font-size: 28px;
        line-height: 1.3;
    }

    .service-section p {
        font-size: 15px;
    }

    /* Service cards */
    .service-item {
        text-align: center;
    }

    .service-item .h4 {
        font-size: 18px;
    }

    .service-item p {
        font-size: 14px;
    }

    .service-item i {
        font-size: 42px;
    }

    /* Working days box */
    .service-days {
        margin-bottom: 30px;
    }

    .service-days h4 {
        font-size: 16px;
    }

    .service-days p {
        font-size: 14px;
    }
}

/* =========================
   FEATURE CAROUSEL FIXES
========================= */
@media (max-width: 991px) {

    .feature-content h4 {
        font-size: 18px;
    }

    .feature-content p {
        font-size: 14px;
    }

    /* Move arrows inside for tablets */
    .feature-carousel .owl-nav .owl-prev {
        left: 5px;
    }

    .feature-carousel .owl-nav .owl-next {
        right: 5px;
    }
}

@media (max-width: 575px) {

    /* Carousel arrows smaller */
    .feature-carousel .owl-nav button {
        width: 36px;
        height: 36px;
        font-size: 14px;
        top: 50%;
    }

    /* Image height consistency */
    .feature-item img {
        height: 220px;
        object-fit: cover;
    }

    .feature-content {
        padding: 15px;
    }

    .feature-content h4 {
        font-size: 16px;
    }

    .feature-content p {
        font-size: 13px;
        line-height: 1.6;
    }
}

/* =========================
   TABLET GRID BALANCE
========================= */
@media (max-width: 991px) {

    .col-xl-3 {
        margin-bottom: 20px;
    }
}

/* =========================
   REMOVE SIDE OVERFLOW
========================= */
body {
    overflow-x: hidden;
}</style>
@endsection
        
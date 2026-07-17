@extends('layouts.app')
@section('content')
<!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Features</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active text-primary">Features</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
<div class="container-fluid feature py-5">
            <div class="container py-5">
                <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                    <h4 class="text-primary">Our Features</h4>
                    <h1 class="display-5 mb-4">PROXERP</h1>
                    <p class="mb-0">At PROX ERP, we transform complex business operations into simple, actionable processes. Our platform integrates finance, inventory, sales, and HR into a single system.
                    </p>
                </div>
                  <div class="container-fluid feature py-5">
    <div class="container py-5">

        <div class="feature-carousel owl-carousel">

            <!-- ITEM 1 -->
            <div class="feature-item">
                <img src="img/feature-1.jpg" class="img-fluid rounded w-100" alt="">
                <div class="feature-content p-4">
                    <h4 class="text-white">SOFTWARE THAT LEARNS HOW YOU WORK</h4>
                    <p class="text-white">
                       Every organization has its own rhythm, rules, and logic. PROX ERP is designed by first understanding your real-world operations—how decisions are made, how work flows, and where bottlenecks exist. Instead of forcing pre-defined templates, we architect the system around your business DNA, ensuring higher adoption, faster execution, and minimal resistance from teams.
                    </p>
                </div>
            </div>

            <!-- ITEM 2 -->
            <div class="feature-item">
                <img src="img/feature-2.jpg" class="img-fluid rounded w-100" alt="">
                <div class="feature-content p-4">
                    <h4 class="text-white">ENTERPRISE-GRADE, WITHOUT ENTERPRISE BURDEN</h4>
                    <p class="text-white">
                        Most ERP solutions make customization expensive, slow, and restrictive. PROX ERP breaks that barrier by offering deep functional customization at practical, transparent costs. You get exactly what your business needs—no bloated modules, no unnecessary licensing—just powerful software that delivers measurable value from day one.
                    </p>
                </div>
            </div>

            <!-- ITEM 3 -->
            <div class="feature-item">
                <img src="img/feature-3.jpg" class="img-fluid rounded w-100" alt="">
                <div class="feature-content p-4">
                    <h4 class="text-white">START SMALL. SCALE SMART.</h4>
                    <p class="text-white">
                        Business needs evolve—and your software should evolve with you. PROX ERP is built as a modular ecosystem where you can activate features as and when required. Begin with core operations and seamlessly expand into finance, HR, CRM, analytics, or compliance without system overhauls, data migration risks, or downtime.
                    </p>
                </div>
            </div>

            <!-- ITEM 4 -->
            <div class="feature-item">
                <img src="img/feature-2.jpg" class="img-fluid rounded w-100" alt="">
                <div class="feature-content p-4">
                    <h4 class="text-white">DESIGNED FOR PROCESSES, NOT INDUSTRY LABELS</h4>
                    <p class="text-white">
                        Instead of building rigid “industry-specific” versions, PROX ERP focuses on the underlying business processes that drive performance. This process-first approach allows us to serve finance companies, factories, institutions, service firms, and enterprises with the same robust core—customized precisely to their operational logic.
                    </p>
                </div>
            </div>


             <!-- ITEM 5 -->
            <div class="feature-item">
                <img src="img/feature-2.jpg" class="img-fluid rounded w-100" alt="">
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

                    </div>
                </div>
            </div>
        </div>
@endsection <
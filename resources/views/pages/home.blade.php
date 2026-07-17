@extends('layouts.app')

@section('content')

 <!-- Carousel Start -->
  
   <div class="header-carousel owl-carousel">
 <!-- <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s"> -->
                        <!-- <div class="bg-light p-5 rounded h-100">
                            <h4 class="text-primary mb-4">Send Your Message</h4>
                            <form>
                                <div class="row g-4">
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="name" placeholder="Your Name">
                                            <label for="name">Your Name</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="email" class="form-control border-0" id="email" placeholder="Your Email">
                                            <label for="email">Your Email</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="phone" class="form-control border-0" id="phone" placeholder="Phone">
                                            <label for="phone">Your Phone</label>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-xl-6">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="project" placeholder="Project">
                                            <label for="project">Your Project</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <input type="text" class="form-control border-0" id="subject" placeholder="Subject">
                                            <label for="subject">Subject</label>
                                        </div>
                                    </div>
                                    <div class="col-12">
                                        <div class="form-floating">
                                            <textarea class="form-control border-0" placeholder="Leave a message here" id="message" style="height: 160px"></textarea>
                                            <label for="message">Message</label>
                                        </div>

                                    </div>
                                    <div class="col-12">
                                        <button class="btn btn-primary w-100 py-3">Send Message</button>
                                    </div>
                                </div>
                            </form> 
                        </div>
                    </div> --> 
    <!-- SLIDE 1 -->
    <div class="header-carousel-item">
        <img src="{{ asset('img/PROXERP - THE COMPLETE ENTERPRISE RESOURCE PLANNING SOLUTION.png') }}" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container py-4">
                <div class="row g-5 align-items-center text-center justify-content-center">
                    <div class="col-xl-7 fadeInCenter animated" style="animation-delay:1s;">
                        <h4 class="text-primary fw-bold mb-4">
                           PROXERP - THE COMPLETE ENTERPRISE RESOURCE PLANNING SOLUTION
                        </h4>
                        <p class="mb-4 fs-5">
                            One powerful platform to manage operations, finance, people, and performance.
ProxERP integrates every critical business function into a single, intelligent system—fully customizable to your industry, scalable to your growth.
                        </p>
                        <a class="btn btn-primary rounded-pill px-5 py-3" href="{{ route('service') }}">
                            Our Softwares
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SLIDE 2 -->
    <div class="header-carousel-item">
        <img src="{{asset('img/PROX ERP - TMS  TURN PLANS INTO PERFECT EXECUTION.png')  }}" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container py-4">
                <div class="row g-5 align-items-center text-center justify-content-center">
                    <div class="col-xl-7 fadeInCenter animated" style="animation-delay:5s;">
                        <h4 class="text-primary fw-bold mb-4">
                            PROX ERP - TMS : TURN PLANS INTO PERFECT EXECUTION
                        </h4>
                        <p class="mb-4 fs-5">
                          Assign, track, and manage tasks with absolute clarity.
Our Task Management System brings accountability, transparency, and real-time progress tracking to teams of any size—across any business vertical.
                        </p>
                        <a class="btn btn-primary rounded-pill px-5 py-3" href="{{ route('service') }}">
                            Our Softwares
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <!-- SLIDE 3 -->
    <div class="header-carousel-item">
        <img src="{{asset('img/PROX ERP - CRM  BUILD STRONGER CUSTOMER RELATIONSHIPS.png')  }}" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container py-4">
                <div class="row g-5 align-items-center text-center justify-content-center">
                    <div class="col-xl-7 fadeInCenter animated" style="animation-delay:5s;">
                        <h4 class="text-primary fw-bold mb-4">
PROX ERP - CRM : BUILD STRONGER CUSTOMER RELATIONSHIPS                        </h4>
                        <p class="mb-4 fs-5">
                            From first interaction to long-term loyalty.
Our CRM centralizes customer data, sales pipelines, follow-ups, and communication—helping businesses close faster and serve better.
                        </p>
                        <a class="btn btn-primary rounded-pill px-5 py-3" href="{{ route('service') }}">
                            Our Softwares
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


     <!-- SLIDE 4 -->
    <div class="header-carousel-item">
        <img src="{{asset('img/PROXERP - LTMS  SMART LEARNING. SEAMLESS TEACHING..png')  }}" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container py-4">
                 <div class="row g-5 align-items-center text-center justify-content-center">
                    <div class="col-xl-7 fadeInCenter animated" style="animation-delay:5s;">
                        <h4 class="text-primary fw-bold mb-4">
                            PROXERP - LTMS : SMART LEARNING. SEAMLESS TEACHING.
                        </h4>
                        <p class="mb-4 fs-5">
                          A complete digital ecosystem for institutions and training organizations.
Manage courses, content, students, assessments, and progress tracking—anytime, anywhere, on any device.
                        </p>
                        <a class="btn btn-primary rounded-pill px-5 py-3" href="{{ route('service') }}">
                            Our Softwares
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>






     <!-- SLIDE 5 -->
    <div class="header-carousel-item">
        <img src="{{asset('img/PROXERP - HRMS  EMPOWER YOUR WORKFORCE WITH INTELLIGENT HR.png')  }}" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container py-4">
                 <div class="row g-5 align-items-center text-center justify-content-center">
                    <div class="col-xl-7 fadeInCenter animated" style="animation-delay:5s;">
                        <h4 class="text-primary fw-bold mb-4">
                           PROXERP - HRMS : EMPOWER YOUR WORKFORCE WITH INTELLIGENT HR
                        </h4>
                        <p class="mb-4 fs-5">
                          Automate HR operations from hiring to retirement.
Attendance, payroll, leave, performance, and compliance—managed through a single, secure, and user-friendly platform.
                        </p>
                        <a class="btn btn-primary rounded-pill px-5 py-3" href="{{ route('service') }}">
                            Our Softwares
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- SLIDE 6 -->
    <div class="header-carousel-item">
        <img src="{{asset('img/PROXERP - EXAM MANAGEMENT SYSTEM  SECURE. STRUCTURED. STRESS-FREE EXAM MANAGEMENT.png')  }}" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container py-4">
                 <div class="row g-5 align-items-center text-center justify-content-center">
                    <div class="col-xl-7 fadeInCenter animated" style="animation-delay:5s;">
                        <h4 class="text-primary fw-bold mb-4">
                            PROXERP - EXAM MANAGEMENT SYSTEM : SECURE. STRUCTURED. STRESS-FREE EXAM MANAGEMENT
                        </h4>
                        <p class="mb-4 fs-5">
                          Designed for institutions that demand precision and control.
Create, schedule, monitor, and evaluate examinations with high security, audit trails, and seamless reporting.
                        </p>
                        <a class="btn btn-primary rounded-pill px-5 py-3" href="{{ route('service') }}">
                            Our Softwares
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- SLIDE 7 -->
    <div class="header-carousel-item">
        <img src="{{asset('img/PROXERP - FINANCE MANAGEMENT SYSTEM  INTELLIGENT FINANCIAL MANAGEMENT FOR MODERN FINANCE COMPANIES.png')  }}" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container py-4">
                 <div class="row g-5 align-items-center text-center justify-content-center">
                    <div class="col-xl-7 fadeInCenter animated" style="animation-delay:5s;">
                        <h4 class="text-primary fw-bold mb-4">
                           PROXERP - FINANCE MANAGEMENT SYSTEM : INTELLIGENT FINANCIAL MANAGEMENT FOR MODERN FINANCE COMPANIES
                        </h4>
                        <p class="mb-4 fs-5">
                          Designed exclusively for finance-focused organizations.
Manage fund flows, client accounts, investments, repayments, reporting, and compliance through a secure, centralized, and customizable platform—built to support accuracy, transparency, and scalable growth.
                        </p>
                        <a class="btn btn-primary rounded-pill px-5 py-3" href="{{ route('service') }}">
                            Our Softwares
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- SLIDE 8 -->
    <div class="header-carousel-item">
        <img src="{{asset('img/PROXERP FACTORY MANAGEMENT SYSTEM  SMART FACTORIES START WITH SMART SOFTWARE.png')  }}" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container py-4">
               <div class="row g-5 align-items-center text-center justify-content-center">
                    <div class="col-xl-7 fadeInCenter animated" style="animation-delay:5s;">
                        <h4 class="text-primary fw-bold mb-4">
                            PROXERP - FACTORY MANAGEMENT SYSTEM : SMART FACTORIES START WITH SMART SOFTWARE
                        </h4>
                        <p class="mb-4 fs-5">
                          Digitize your manufacturing operations.
From production planning and inventory to workforce and quality control—our Factory Management System drives efficiency and reduces operational losses.
                        </p>
                        <a class="btn btn-primary rounded-pill px-5 py-3" href="{{ route('service') }}">
                            Our Softwares
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- SLIDE 9 -->
    <div class="header-carousel-item">
        <img src="{{asset('img/PROXERP - CUSTOMISED SYSTEMS  SOFTWARE BUILT AROUND YOUR BUSINESS—NOT THE OTHER WAY AROUND.png')  }}" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container py-4">
               <div class="row g-5 align-items-center text-center justify-content-center">
                    <div class="col-xl-7 fadeInCenter animated" style="animation-delay:5s;">
                        <h4 class="text-primary fw-bold mb-4">
                            PROXERP - CUSTOMISED SYSTEMS : SOFTWARE BUILT AROUND YOUR BUSINESS—NOT THE OTHER WAY AROUND
                        </h4>
                        <p class="mb-4 fs-5">
                         Every business is unique. Your software should be too.
We design and deliver fully customized solutions tailored to your processes, scale, and goals—at surprisingly affordable costs.
                        </p>
                        <a class="btn btn-primary rounded-pill px-5 py-3" href="{{ route('service') }}">
                            Our Softwares
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>

     <!-- SLIDE 10-->
    <div class="header-carousel-item">
        <img src="{{asset('img/PROXERP - DIGITAL SOLUTIONS THAT GROW WITH YOU.png')  }}" class="img-fluid w-100" alt="Image">
        <div class="carousel-caption">
            <div class="container py-4">
                <div class="row g-5 align-items-center text-center justify-content-center">
                    <div class="col-xl-7 fadeInCenter animated" style="animation-delay:5s;">
                        <h4 class="text-primary fw-bold mb-4">
                            PROXERP - DIGITAL SOLUTIONS THAT GROW WITH YOU
                        </h4>
                        <p class="mb-4 fs-5">
                          Whether you’re a startup, institution, factory, or enterprise.
PROX delivers reliable, scalable, and future-ready software solutions that simplify operations and accelerate growth.
                        </p>
                        <a class="btn btn-primary rounded-pill px-5 py-3" href="{{ route('service') }}">
                            Our Softwares
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>


</div>

       

        <!-- <div class="header-carousel owl-carousel">
        <div class="header-carousel-item">
            <img src="img/carousel-1.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container align-items-center py-4">
                    <div class="row g-5 align-items-center">
                        <div class="col-xl-7 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s"
                            style="animation-delay: 1s;">
                            <div class="text-start">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">PROX ERP - CRM : BUILD STRONGER CUSTOMER RELATIONSHIPS</h4>
                                <h1 class="display-4 text-uppercase text-white mb-4">
                                </h1>
                                <p class="mb-4 fs-5">   From first interaction to long-term loyalty.
Our CRM centralizes customer data, sales pipelines, follow-ups, and communication—helping businesses close faster and serve better.
                                <div class="d-flex flex-shrink-0">
                                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="{{ route('service') }}">Our
                                        Softwares</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 fadeInRight animated" data-animation="fadeInRight" data-delay="2s"
                            style="animation-delay: 2s;">
                            <div class="ticket-form p-5">
                                <h2 class="text-dark text-uppercase mb-4">book your ticket</h2>
                                <form>
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <input type="text" class="form-control border-0 py-2" id="name"
                                                placeholder="Your Name">
                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <input type="email" class="form-control border-0 py-2" id="email"
                                                placeholder="Your Email">
                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <input type="phone" class="form-control border-0 py-2" id="phone"
                                                placeholder="Phone">
                                        </div>
                                        <div class="col-12">
                                            <select class="form-select border-0 py-2"
                                                aria-label="Default select example">
                                                <option selected>Select Packages</option>
                                                <option value="1">Family Packages</option>
                                                <option value="2">Basic Packages</option>
                                                <option value="3">Premium Packages</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <input class="form-control border-0 py-2" type="date">
                                        </div>
                                        <div class="col-12">
                                            <input type="number" class="form-control border-0 py-2" id="number"
                                                placeholder="Guest">
                                        </div>
                                        <div class="col-12">
                                            <button type="button" class="btn btn-primary w-100 py-2 px-5">Book
                                                Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div> -->
<!--<div class="header-carousel-item">
            <img src="img/carousel-2.jpg" class="img-fluid w-100" alt="Image">
            <div class="carousel-caption">
                <div class="container py-4">
                    <div class="row g-5 align-items-center">
                        <div class="col-xl-7 fadeInLeft animated" data-animation="fadeInLeft" data-delay="1s"
                            style="animation-delay: 1s;">
                            <div class="text-start">
                                <h4 class="text-primary text-uppercase fw-bold mb-4">Welcome To WaterLand</h4>
                                <h1 class="display-4 text-uppercase text-white mb-4">The Greatest Water and Amusement
                                    Park</h1>
                                <p class="mb-4 fs-5">Lorem Ipsum is simply dummy text of the printing and typesetting
                                    industry. Lorem Ipsum has been the industry's standard dummy...
                                </p>
                                <div class="d-flex flex-shrink-0">
                                    <a class="btn btn-primary rounded-pill text-white py-3 px-5" href="#">Our
                                        Packages</a>
                                </div>
                            </div>
                        </div>
                        <div class="col-xl-5 fadeInRight animated" data-animation="fadeInRight" data-delay="1s"
                            style="animation-delay: 1s;">
                            <div class="ticket-form p-5">
                                <h2 class="text-dark text-uppercase mb-4">book your ticket</h2>
                                <form>
                                    <div class="row g-4">
                                        <div class="col-12">
                                            <input type="text" class="form-control border-0 py-2" id="name"
                                                placeholder="Your Name">
                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <input type="email" class="form-control border-0 py-2" id="email"
                                                placeholder="Your Email">
                                        </div>
                                        <div class="col-12 col-xl-6">
                                            <input type="phone" class="form-control border-0 py-2" id="phone"
                                                placeholder="Phone">
                                        </div>
                                        <div class="col-12">
                                            <select class="form-select border-0 py-2"
                                                aria-label="Default select example">
                                                <option selected>Select Packages</option>
                                                <option value="1">Family Packages</option>
                                                <option value="2">Basic Packages</option>
                                                <option value="3">Premium Packages</option>
                                            </select>
                                        </div>
                                        <div class="col-12">
                                            <input class="form-control border-0 py-2" type="date">
                                        </div>
                                        <div class="col-12">
                                            <input type="number" class="form-control border-0 py-2" id="number"
                                                placeholder="Guest">
                                        </div>
                                        <div class="col-12">
                                            <button type="button" class="btn btn-primary w-100 py-2 px-5">Book
                                                Now</button>
                                        </div>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>-->
        </div>
    </div>
    <!-- Carousel End -->


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
</div>
<!-- Feature End -->

<script>
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
                        <p>
                            Our vision is to make technology simple, intelligent, and empowering for every business. We strive to convert complex systems into actionable tools that support faster decisions and stronger operations. By combining innovation, automation, and insight, PROX ERP enables organizations to adapt confidently to change. We believe technology should work quietly in the background while businesses lead, grow, and succeed.
                        </p>
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

    <!-- Service Start -->
     <div class="container-fluid service py-5" style="margin-top: 100px;">
        <div class="container service-section py-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Software</h4>
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


    <!-- Ticket Packages Start -->
    <!-- <div class="container-fluid py-5">
        <div class="container py-5">
            <div class="row g-5 align-items-center">
                <div class="col-lg-12 col-xl-4 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="packages-item h-100">
                        <h4 class="text-primary">Ticket Packages</h4>
                        <h1 class="display-5 mb-4">Choose The Best Packages For Your Family</h1>
                        <p class="mb-4">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci
                            facilis cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad
                            culpa deserunt sint dolorem autem obcaecati, ipsam mollitia hic.
                        </p>
                        <p><i class="fa fa-check text-primary me-2"></i>Best Waterpark in the world</p>
                        <p><i class="fa fa-check text-primary me-2"></i>Best Packages For Your Family</p>
                        <p><i class="fa fa-check text-primary me-2"></i>Enjoy Various Kinds of Water Park</p>
                        <p class="mb-5"><i class="fa fa-check text-primary me-2"></i>Win Up To 3 Free All Day Tickets
                        </p>
                        <a href="#" class="btn btn-primary rounded-pill py-3 px-5"> Book Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="pricing-item bg-dark rounded text-center p-5 h-100">
                        <div class="pb-4 border-bottom">
                            <h2 class="mb-4 text-primary">Family Packages</h2>
                            <p class="mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit. Possimus, dolorum!
                            </p>
                            <h2 class="mb-0 text-primary">$260,90<span class="text-body fs-5 fw-normal">/family</span>
                            </h2>
                        </div>
                        <div class="py-4">
                            <p class="mb-4"><i class="fa fa-check text-primary me-2"></i>All Access To Waterpark</p>
                            <p class="mb-4"><i class="fa fa-check text-primary me-2"></i>Get Two Gazebo</p>
                            <p class="mb-4"><i class="fa fa-check text-primary me-2"></i>Free Soft Drinks</p>
                            <p class="mb-4"><i class="fa fa-check text-primary me-2"></i>Get Four Lockers</p>
                            <p class="mb-4"><i class="fa fa-check text-primary me-2"></i>Free Four Towels</p>
                        </div>
                        <a href="#" class="btn btn-light rounded-pill py-3 px-5"> Book Now</a>
                    </div>
                </div>
                <div class="col-lg-6 col-xl-4 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="pricing-item bg-primary rounded text-center p-5 h-100">
                        <div class="pb-4 border-bottom">
                            <h2 class="text-dark mb-4">Basic Packages</h2>
                            <p class="text-white mb-4">Lorem ipsum dolor sit amet consectetur adipisicing elit.
                                Possimus, dolorum!</p>
                            <h2 class="text-dark mb-0">$60,90<span class="text-white fs-5 fw-normal">/person</span></h2>
                        </div>
                        <div class="text-white py-4">
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Get Small Gazebo</p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Free Soft Drink</p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Get One Locker</p>
                            <p class="mb-4"><i class="fa fa-check text-dark me-2"></i>Free Towel</p>
                        </div>
                        <a href="#" class="btn btn-dark rounded-pill py-3 px-5"> Book Now</a>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Ticket Packages End -->


    <!-- Attractions Start -->
   <!-- Attractions Start -->
<div class="container-fluid attractions py-5">
    <div class="container attractions-section py-5">

        <div class="text-center mx-auto pb-5 wow fadeInUp"
             data-wow-delay="0.2s"
             style="max-width: 800px;">

            <h4 class="text-primary">Attractions</h4>
            <h1 class="display-5 text-white mb-4">
                Trusted By Businesses Across Industries
            </h1>
            <h1 class="display-5 text-white mb-4">
                Brands We Deliver Solutions For
            </h1>

            <p class="text-white mb-0">
                We collaborate with businesses, institutions, and enterprises across diverse sectors,
                delivering customized software solutions tailored to their operational needs.
            </p>

            <p class="text-white mb-0">
                Our Different Brand Logos
            </p>
        </div>

        <!-- Carousel -->
        <div class="owl-carousel attractions-carousel wow fadeInUp"
             data-wow-delay="0.1s">

            @forelse($attractions as $attraction)
                <div class="attractions-item wow fadeInUp">

                    @if($attraction->image)
                        <img src="{{ asset('storage/'.$attraction->image) }}"
                             class="img-fluid rounded w-100"
                             alt="{{ $attraction->name }}">
                    @endif

                    <a href="#"
                       class="attractions-name">
                        {{ $attraction->name }}
                    </a>

                </div>
            @empty
                <div class="text-white text-center">
                    No attractions available.
                </div>
            @endforelse

        </div>
    </div>
</div>
<!-- Attractions End -->

    <!-- Attractions End -->
    <!-- Attractions End -->

    <!-- Gallery Start -->
    <!-- <div class="container-fluid gallery pb-5">
        <div class="container pb-5">
            <div class="text-center mx-auto pb-5 wow fadeInUp" data-wow-delay="0.2s" style="max-width: 800px;">
                <h4 class="text-primary">Our Gallery</h4>
                <h1 class="display-5 mb-4">Captured Moments In Waterland</h1>
                <p class="mb-0">Lorem ipsum dolor, sit amet consectetur adipisicing elit. Tenetur adipisci facilis
                    cupiditate recusandae aperiam temporibus corporis itaque quis facere, numquam, ad culpa deserunt
                    sint dolorem autem obcaecati, ipsam mollitia hic.
                </p>
            </div>
            <div class="row g-4">
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="gallery-item">
                        <img src="img/gallery-1.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-1.jpg" class="btn btn-light btn-lg-square rounded-circle"
                                data-lightbox="Gallery-1"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="gallery-item">
                        <img src="img/gallery-2.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-2.jpg" class="btn btn-light btn-lg-square rounded-circle"
                                data-lightbox="Gallery-2"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="gallery-item">
                        <img src="img/gallery-3.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-3.jpg" class="btn btn-light btn-lg-square rounded-circle"
                                data-lightbox="Gallery-3"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.2s">
                    <div class="gallery-item">
                        <img src="img/gallery-4.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-4.jpg" class="btn btn-light btn-lg-square rounded-circle"
                                data-lightbox="Gallery-4"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-3 wow fadeInUp" data-wow-delay="0.4s">
                    <div class="gallery-item">
                        <img src="img/gallery-5.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-5.jpg" class="btn btn-light btn-lg-square rounded-circle"
                                data-lightbox="Gallery-5"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-md-6 wow fadeInUp" data-wow-delay="0.6s">
                    <div class="gallery-item">
                        <img src="img/gallery-6.jpg" class="img-fluid rounded w-100 h-100" alt="">
                        <div class="search-icon">
                            <a href="img/gallery-6.jpg" class="btn btn-light btn-lg-square rounded-circle"
                                data-lightbox="Gallery-6"><i class="fas fa-search-plus"></i></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Gallery End -->

<!-- Blog Start -->

<div class="container-fluid blog py-5">
    <div class="container py-5">

        <!-- Title -->
        <div class="text-center mx-auto pb-5" style="max-width: 800px;">
            <h4 class="text-primary">Our Blog</h4>
            <h1 class="display-5 mb-4">Latest Blog & Articles</h1>
            <p class="mb-0">
                Behind every powerful module and seamless workflow is a passionate team driven by innovation and client success.
            </p>
        </div>

        <!-- Carousel -->
        <div id="blogCarousel" class="carousel slide" data-bs-ride="carousel">
            <div class="carousel-inner">

                @foreach($blogs as $index => $blog)
                <div class="carousel-item {{ $index == 0 ? 'active' : '' }}">
                    <div class="carousel-inner-row">

                        <div class="col-lg-4 col-md-6 px-3">
                            <div class="blog-item h-100">

                                <div class="blog-img">
                                    <img src="{{ asset('storage/'.$blog->image) }}"
                                         class="img-fluid w-100 rounded-top"
                                         alt="{{ $blog->title }}">

                                     


                                    <div class="blog-date">
                                        <i class="fas fa-clock me-2"></i>
                                        {{ $blog->created_at->format('M d, Y') }}
                                    </div>
                                </div>

                                <div class="blog-content p-4">
                                    <a href="{{ route('blogs.show', $blog->id) }}" class="h4 d-inline-block mb-3">
                                        {{ $blog->title }}
                                    </a>
                                        <!-- Author -->
<div class="d-flex align-items-center mb-3">
    <img src="{{ asset('storage/' . ($blog->author->image1 ?? 'default-user.png')) }}"
         alt="{{ $blog->author?->name }}"
         class="rounded-circle me-2"
         width="32"
         height="32"
         style="object-fit: cover;">

    <small class="text-muted">
        {{ $blog->author?->name ?? 'Admin' }}
    </small>
</div>


                                    <p class="mb-4">
                                        {{ Str::limit($blog->paragraph, 90) }}
                                    </p>

                                    <a href="{{ route('blog.read', $blog->id) }}"
                                       class="btn btn-primary rounded-pill py-2 px-4">
                                        Read More <i class="fas fa-arrow-right ms-2"></i>
                                    </a>
                                </div>

                            </div>
                        </div>

                    </div>
                </div>
                @endforeach

            </div>

            <!-- Controls -->
            <button class="carousel-control-prev" type="button" data-bs-target="#blogCarousel" data-bs-slide="prev">
                <span class="carousel-control-prev-icon"></span>
            </button>

            <button class="carousel-control-next" type="button" data-bs-target="#blogCarousel" data-bs-slide="next">
                <span class="carousel-control-next-icon"></span>
            </button>
        </div>

    </div>
</div>
<!-- Blog End -->
<style>
/* ===== CAROUSEL LAYOUT ===== */
#blogCarousel {
    overflow: hidden;
}

#blogCarousel .carousel-item {
    transition: transform 0.6s ease-in-out;
}

#blogCarousel .carousel-inner-row {
    display: flex;
}

#blogCarousel .carousel-inner-row > div {
    flex: 0 0 33.333%;
}

/* ===== BLOG CARD FIX ===== */
.blog-item {
    height: 100%;
    display: flex;
    flex-direction: column;
    background: #fff;
    border-radius: 8px;
    overflow: hidden;
}

/* FIX IMAGE SIZE */
.blog-img {
    position: relative;
    height: 220px;
    overflow: hidden;
}

.blog-img img {
    width: 100%;
    height: 100%;
    object-fit: cover;
}

/* DATE BADGE */
.blog-date {
    position: absolute;
    bottom: 10px;
    left: 10px;
    background: rgba(0,0,0,0.7);
    color: #fff;
    padding: 5px 10px;
    font-size: 13px;
    border-radius: 20px;
}

/* FIX CONTENT HEIGHT */
.blog-content {
    flex: 1;
    display: flex;
    flex-direction: column;
}

/* TITLE FIX */
.blog-content a.h4 {
    min-height: 60px;
    line-height: 1.3;
}

/* PARAGRAPH FIX */
.blog-content p {
    flex-grow: 1;
    overflow: hidden;
    display: -webkit-box;
    -webkit-line-clamp: 3;
    -webkit-box-orient: vertical;
}

/* BUTTON ALIGN BOTTOM */
.blog-content .btn {
    align-self: flex-start;
}

/* CONTROLS */
.carousel-control-prev,
.carousel-control-next {
    width: 5%;
}
/* ===== CUSTOM CAROUSEL ARROWS ===== */
#blogCarousel .carousel-control-prev,
#blogCarousel .carousel-control-next {
    width: 48px;
    height: 48px;
    top: 50%;
    transform: translateY(-50%);
    background: rgba(0, 0, 0, 0.6);
    border-radius: 50%;
    opacity: 1;
    transition: all 0.3s ease;
}

/* Positioning */
#blogCarousel .carousel-control-prev {
    left: 15px;
}

#blogCarousel .carousel-control-next {
    right: 15px;
}

/* Icon size */
#blogCarousel .carousel-control-prev-icon,
#blogCarousel .carousel-control-next-icon {
    width: 20px;
    height: 20px;
    background-size: 100% 100%;
    filter: brightness(0) invert(1);
}

/* Hover effect */
#blogCarousel .carousel-control-prev:hover,
#blogCarousel .carousel-control-next:hover {
    background: #0d6efd; /* Bootstrap primary */
    transform: translateY(-50%) scale(1.08);
}

/* Mobile */
@media (max-width: 768px) {
    #blogCarousel .carousel-control-prev,
    #blogCarousel .carousel-control-next {
        width: 42px;
        height: 42px;
    }
}

</style>

<script>
document.addEventListener('DOMContentLoaded', function () {

    const carousel = document.querySelector('#blogCarousel');
    const items = carousel.querySelectorAll('.carousel-item');

    items.forEach((el) => {
        let next = el.nextElementSibling;

        for (let i = 1; i < 3; i++) {
            if (!next) {
                next = items[0];
            }

            el.querySelector('.carousel-inner-row')
              .appendChild(
                  next.querySelector('.carousel-inner-row > div').cloneNode(true)
              );

            next = next.nextElementSibling;
        }
    });

});
</script>
<style>
/* =========================
   TEAM IMAGE HOVER
========================= */
/* =========================
   FIX DESCRIPTION HEIGHT
========================= */


/* =========================
   DESCRIPTION LINE BY LINE
========================= */

/* =========================
   FIX DESCRIPTION HEIGHT
========================= */

/* .team-content {
    display: flex;
    flex-direction: column;
    height: 100%;
} */

/* Fixed description area */
/* =========================
   TEAM DESCRIPTION FIX
========================= */

.team-description {
    margin-top: 10px;
}

/* Clamp text */
.team-text {
    white-space: pre-line;
    line-height: 1.7;
    font-size: 14px;

    max-height: 120px;
    overflow: hidden;

    display: -webkit-box;
    -webkit-line-clamp: 6;
    -webkit-box-orient: vertical;
}

/* Keep card heights equal */
.team-item {
    height: 100%;
}


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
                                <div class="team-description text-center">

    <p class="team-text mb-3">
        {{ $team->description }}
    </p>

    <a href="{{ route('ourteam.read', $team->id) }}"
       class="btn btn-outline-primary btn-sm rounded-pill px-3">
        View Profile
    </a>

</div>


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
    <!-- Team End -->


    <!-- Testimonial Start -->
       <div class="container-fluid testimonial py-5" style="margin-top: 100px;">
    <div class="container py-5">

        <div class="text-center mx-auto pb-5 wow fadeInUp"
             data-wow-delay="0.2s"
             style="max-width: 800px;">

            <h4 class="text-primary">Testimonials</h4>
            <h1 class="display-5 text-white mb-4">Our Clients Reviews</h1>

            <p class="text-white mb-0">
                Hear From Our Valued Clients.
                Discover how PROX ERP transforms businesses with efficiency,
                reliability, and innovation.
            </p>

            <p class="text-white mb-0">
                Businesses across industries trust PROX ERP for its flexibility,
                reliability, and deep customization. Here’s what our clients have to say.
            </p>
        </div>

        <div class="owl-carousel testimonial-carousel wow fadeInUp"
             data-wow-delay="0.2s">

            @foreach($reviews as $review)
                <div class="testimonial-item p-4">

                    <!-- Review message -->
                    <p class="text-white fs-4 mb-4">
                        {{ $review->message }}
                    </p>

                    <div class="testimonial-inner">

                        <!-- Image -->
                        <div class="testimonial-img">
                            <img
                                src="{{ $review->image 
                                    ? asset('storage/'.$review->image) 
                                    : asset('img/testimonial-default.jpg') }}"
                                class="img-fluid"
                                alt="{{ $review->name }}">

                            <div class="testimonial-quote btn-lg-square rounded-circle">
                                <i class="fa fa-quote-right fa-2x"></i>
                            </div>
                        </div>

                        <!-- Details -->
                        <div class="ms-4">
                            <h4>{{ $review->name }}</h4>

                            <p class="text-start text-white">
                                {{ $review->profession ?? 'Client' }}
                            </p>

                            <!-- Rating -->
                            <div class="d-flex text-primary">
                                @for ($i = 1; $i <= 5; $i++)
                                    <i class="fas fa-star {{ $i <= $review->rating ? '' : 'text-white' }}"></i>
                                @endfor
                            </div>
                        </div>

                    </div>
                </div>
            @endforeach

        </div>
    </div>
</div>

        
    <!-- Testimonial End -->
<style>
/* =====================================================
   ULTRA-COMPACT ERP MOBILE MODE
   Phones ≤ 576px
===================================================== */
@media (max-width: 576px) {

    /* -------- GLOBAL ERP DENSITY -------- */
    body {
        font-size: 13.5px;
        line-height: 1.55;
        overflow-x: hidden;
    }

    .container,
    .container-fluid {
        padding-left: 10px !important;
        padding-right: 10px !important;
    }

    .py-5 {
        padding-top: 26px !important;
        padding-bottom: 26px !important;
    }

    .mb-5 {
        margin-bottom: 20px !important;
    }

    /* -------- HEADERS -------- */
    h1 {
        font-size: 21px !important;
        line-height: 1.25;
        margin-bottom: 8px;
    }

    h3 {
        font-size: 17px;
    }

    h4 {
        font-size: 15px;
    }

    p,
    li {
        font-size: 13.2px;
    }

    /* -------- ABOUT SECTION -------- */
    .about img {
        margin-bottom: 12px;
        border-radius: 8px;
    }

    .about .d-flex {
        flex-direction: column;
        gap: 6px;
    }

    .about i {
        font-size: 26px;
    }

    /* -------- FEATURE CAROUSEL -------- */
    .feature-item img {
        height: 180px;
        object-fit: cover;
    }

    .feature-content {
        padding: 10px !important;
    }

    .feature-content h4 {
        font-size: 14.5px;
        margin-bottom: 6px;
    }

    .feature-content p {
        font-size: 12.8px;
    }

    /* SHOW ARROWS – ERP STYLE */
    .feature-carousel .owl-nav button {
        width: 32px !important;
        height: 32px !important;
        top: 50%;
        transform: translateY(-50%);
        background: #0d6efd !important;
        opacity: 0.9;
    }

    .feature-carousel .owl-nav .owl-prev {
        left: -8px;
    }

    .feature-carousel .owl-nav .owl-next {
        right: -8px;
    }

    .feature-carousel .owl-nav i {
        font-size: 12px;
    }

    /* -------- TEAM SECTION -------- */
    .team-item {
        padding: 14px !important;
        text-align: center;
    }

    .team-content .d-flex {
        flex-direction: column;
        align-items: center;
        gap: 6px;
    }

    .team-content h4 {
        font-size: 15px;
    }

    .team-content p {
        font-size: 13px;
    }

    .team-image-wrapper {
        width: 70px;
        height: 70px;
        margin-top: 6px;
    }

    .team-img {
        width: 70px;
        height: 70px;
    }

    /* Swiper arrows ENABLED */
    .team-carousel .swiper-button-prev,
    .team-carousel .swiper-button-next {
        width: 32px;
        height: 32px;
        background: #0d6efd;
        border-radius: 50%;
        top: 45%;
    }

    .team-carousel .swiper-button-prev::after,
    .team-carousel .swiper-button-next::after {
        font-size: 14px;
        color: #fff;
        font-weight: bold;
    }

    .team-carousel .swiper-button-prev {
        left: -10px;
    }

    .team-carousel .swiper-button-next {
        right: -10px;
    }
}</style>

<style>
    .blog-item {
    border-radius: 10px;
    background: #fff;
    overflow: hidden;
}

/* ===== CAROUSEL ===== */
#blogCarousel .carousel-item {
    padding: 0 15px;
}

.carousel-control-prev,
.carousel-control-next {
    width: 6%;
}
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
<style>/* ==============================
   BLOG CAROUSEL RESPONSIVE FIX
   ============================== */

/* Tablets (≤ 992px) */
@media (max-width: 992px) {
    #blogCarousel .carousel-inner-row > div {
        flex: 0 0 50%;
        max-width: 50%;
    }
}

/* Mobile (≤ 576px) */
@media (max-width: 576px) {

    /* Show ONE blog per slide */
    #blogCarousel .carousel-inner-row {
        justify-content: center;
    }

    #blogCarousel .carousel-inner-row > div {
        flex: 0 0 100%;
        max-width: 100%;
    }

    /* Reduce spacing */
    .blog-content {
        padding: 20px !important;
    }

    /* Smaller heading */
    .blog-content .h4 {
        font-size: 18px;
        line-height: 1.4;
    }

    /* Image height consistency */
    .blog-img img {
        height: 220px;
        object-fit: cover;
    }

    /* Carousel controls size */
    .carousel-control-prev,
    .carousel-control-next {
        width: 10%;
    }
}
</style>

    <!-- Footer Start -->
@endsection
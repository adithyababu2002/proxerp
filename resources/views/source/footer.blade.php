<style>
/* ===== FOOTER BASE ===== */
.footer {
    background: #0b0b0b;
}

.footer-item a {
    display: block;
    color: #ccc;
    margin-bottom: 8px;
    text-decoration: none;
    font-size: 14px;
}

.footer-item a:hover {
    color: #fff;
}

.footer-item p {
    font-size: 14px;
    line-height: 1.6;
}

/* Address icon alignment */
.address-icon {
    margin-top: 4px;
    font-size: 16px;
    flex-shrink: 0;
}

/* ===== TABLET VIEW (≤ 991px) ===== */
@media (max-width: 991px) {

    .footer {
        text-align: left;
    }

    .footer .row {
        row-gap: 40px;
    }

    .footer-item h4 {
        font-size: 18px;
    }

    .footer-item p,
    .footer-item a {
        font-size: 14px;
    }

    .footer-item img {
        max-height: 55px;
    }

    /* Address alignment */
    .footer-item .d-flex.align-items-start {
        gap: 10px;
    }
}

/* ===== MOBILE VIEW (≤ 576px) ===== */
@media (max-width: 576px) {

    .footer {
        padding: 40px 0;
    }

    .footer-item {
        text-align: center;
    }

    .footer-item img {
        margin: 0 auto 10px;
        display: block;
    }

    .footer-item p {
        font-size: 13.5px;
    }

    .footer-item a {
        font-size: 13.5px;
    }

    .footer-item h4 {
        font-size: 17px;
        margin-bottom: 15px;
    }

    /* Center address block */
    .footer-item .d-flex.align-items-start {
        flex-direction: column;
        align-items: center !important;
        text-align: center;
    }

    .address-icon {
        margin-bottom: 6px;
    }

    /* Email & phone */
    .footer-item .d-flex.align-items-center {
        justify-content: center;
        gap: 8px;
    }

    /* Opening hours */
    .opening-clock {
        text-align: center;
    }

    .opening-clock h6 {
        font-size: 14px;
    }

    .opening-clock p {
        font-size: 13px;
    }
}
</style>


<div class="container-fluid footer py-5 wow fadeIn" data-wow-delay="0.2s">
            <div class="container py-5">
                <div class="row g-5">
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                           <a href="{{ route('home') }}" class="navbar-brand p-0">
                    <!-- <h1 class="display-6 text-dark">test name</h1> -->
                    <img src="{{ asset('img/PR.png') }}" 
     class="img-fluid" 
     style="max-height: 60px;" 
     alt="Logo">


                </a>
                            <p class="mb-2">Empowering Businesses with Smarter ERP Solutions.</p>
                            <div class="d-flex align-items-start">
<i class="fas fa-map-marker-alt text-primary me-3 address-icon"></i>

    <p class="text-white mb-0">
        Project of HYZ Ventures Intl. Private Limited, GE, Padmanabham,
        Technopark Campus, Phase 1, Kazhakkoottam,
        Technopark, Trivandrum, Kerala - 695581.
    </p>
</div>

                            <div class="d-flex align-items-center">
                                <i class="fas fa-envelope text-primary me-3"></i>
                                <p class="text-white mb-0">proxerp@hyzventures.com</p>
                            </div>
                            <div class="d-flex align-items-center">
                                <i class="fa fa-phone-alt text-primary me-3"></i>
                                <p class="text-white mb-0">(+91)9048043336</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Quick Links</h4>
                            <a href="{{ route('about') }}"><i class="fas fa-angle-right me-2"></i> About Us</a>
                            <a href="{{ route('features') }}"><i class="fas fa-angle-right me-2"></i> Feature</a>
                            <a href="{{ route('blog') }}"><i class="fas fa-angle-right me-2"></i> Blogs</a>
                            <a href="{{ route('service') }}"><i class="fas fa-angle-right me-2"></i> Software</a>
                            
                            <a href="{{ route('ourteam') }}"><i class="fas fa-angle-right me-2"></i> Ourteam </a>
                            <a href="{{ route('testimonial') }}"><i class="fas fa-angle-right me-2"></i> Testimonial</a>
                            <a href="{{ route('contact') }}"><i class="fas fa-angle-right me-2"></i> Contact us</a>
                            
                        </div>
                    </div>
                    <!-- <div class="col-md-6 col-lg-6 col-xl-2">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Support</h4>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Privacy Policy</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Terms & Conditions</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Disclaimer</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Support</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> FAQ</a>
                            <a href="#"><i class="fas fa-angle-right me-2"></i> Help</a>
                        </div>
                    </div> -->
                    <div class="col-md-6 col-lg-6 col-xl-4">
                        <div class="footer-item">
                            <h4 class="text-white mb-4">Opening Hours</h4>
                            <div class="opening-date mb-3 pb-3">
                                <div class="opening-clock flex-shrink-0">
                                    <h6 class="text-white mb-0 me-auto">Monday - Saturday :</h6>
                                    <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> 9:00 AM - 6:00 PM</p>
                                </div>
                                <div class="opening-clock flex-shrink-0">
                                    <h6 class="text-white mb-0 me-auto">Sunday :</h6>
                                    <p class="mb-0"><i class="fas text-primary me-2"></i>Holiday</p>
                                </div>
                                <!-- <div class="opening-clock flex-shrink-0">
                                     <h6 class="text-white mb-0 me-auto">Saturday - Sunday:</h6> 
                                    < <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i></p>
                                </div> --> 
                                <!-- <div class="opening-clock flex-shrink-0">
                                    <h6 class="text-white mb-0 me-auto">Holiday</h6>
                                    <p class="mb-0"><i class="fas fa-clock text-primary me-2"></i> </p>
                                </div> -->
                                
                            </div>
                            <!-- <div>
                                <p class="text-white mb-2">Payment Accepted</p>
                                <img src="img/payment.png" class="img-fluid" alt="Image">
                            </div> -->
                        </div>
                    </div>
                </div>
            </div>
        </div>
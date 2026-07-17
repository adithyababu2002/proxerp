@extends('layouts.app')
@section('content')
<!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Contact</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active text-primary">Contact</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
  <!-- Contact Start -->
        <div class="container-fluid contact py-5">
            <div class="container py-5">
                <div class="row g-5"> 
                    <div class="col-12 col-xl-6 wow fadeInUp" data-wow-delay="0.2s">
                        <div>
                            <div class="pb-5">
                                <h4 class="text-primary">Get in Touch</h4>
                                <p class="mb-0"> At PROX ERP, we transform complex business operations into simple, actionable processes. Our platform integrates finance, inventory, sales, and HR into a single system<a class="text-primary fw-bold" href="https://htmlcodex.com/contact-form"></a>.</p>
                            </div>
                            <div class="row g-4">
                                <div class="col-lg-6">
                                    <div class="contact-add-item rounded bg-light p-4">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fas fa-map-marker-alt fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Address</h4>
                                            <p class="mb-0">Project of HYZ Ventures Intl. Private Limited, GE, Padmanabham, Technopark Campus, Phase 1, Kazhakkoottam, Technopark, Trivandrum, Kerala - 695581.</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-add-item rounded bg-light p-4">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fas fa-envelope fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Mail Us</h4>
                                            <p class="mb-0">
proxerp@hyzventures.com</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <div class="contact-add-item rounded bg-light p-4">
                                        <div class="contact-icon text-primary mb-4">
                                            <i class="fa fa-phone-alt fa-2x"></i>
                                        </div>
                                        <div>
                                            <h4>Telephone</h4>
                                            <p class="mb-0">(+91)9048043336</p>
                                        </div>
                                    </div>
                                </div>
                                <div class="col-lg-6">
                                    <!-- <div class="contact-add-item rounded bg-light p-4"> -->
                                        <!-- <div class="contact-icon text-primary mb-4"> -->
                                            <!-- <i class="fab fa-firefox-browser fa-2x"></i> -->
                                        <!-- </div> -->
                                        <!-- <div>
                                            <h4>Yoursite@ex.com</h4>
                                            <p class="mb-0">(+012) 3456 7890</p>
                                        </div> -->
                                    <!-- </div> -->
                                </div>
                                <div class="col-12">
                                    <div class="d-flex justify-content-around bg-light rounded p-4">
                                        <a class="btn btn-xl-square btn-primary rounded-circle" href="https://www.facebook.com/proxerp2"><i class="fab fa-facebook-f"></i></a>
                                        <!-- <a class="btn btn-xl-square btn-primary rounded-circle" href="#"><i class="fab fa-twitter"></i></a> -->
                                          <a class="btn btn-xl-square btn-primary rounded-circle" href="https://www.instagram.com/prox.erp"><i class="fab fa-instagram"></i></a>
                                        <a class="btn btn-xl-square btn-primary rounded-circle" href="https://www.youtube.com/@proxerp"><i class="fab fa-youtube"></i></a>
                                        <a class="btn btn-xl-square btn-primary rounded-circle" href="https://www.linkedin.com/company/prox-erp"><i class="fab fa-linkedin-in"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-xl-6 wow fadeInUp" data-wow-delay="0.4s">
                        <div class="bg-light p-5 rounded h-100">
                            @if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

                            <h4 class="text-primary mb-4">Send Your Message</h4>
                            <form action="{{ route('contact.send') }}" method="POST">
    @csrf

    <div class="row g-4">
        <div class="col-lg-12 col-xl-6">
            <div class="form-floating">
                <input type="text" name="name" class="form-control border-0" placeholder="Your Name" required>
                <label>Your Name</label>
            </div>
        </div>

        <div class="col-lg-12 col-xl-6">
            <div class="form-floating">
                <input type="email" name="email" class="form-control border-0" placeholder="Your Email" required>
                <label>Your Email</label>
            </div>
        </div>

        <div class="col-lg-12 col-xl-6">
            <div class="form-floating">
                <input type="text" name="phone" class="form-control border-0" placeholder="Phone" required>
                <label>Your Phone</label>
            </div>
        </div>

        <div class="col-lg-12 col-xl-6">
            <div class="form-floating">
                <input type="text" name="project" class="form-control border-0" placeholder="Project" required>
                <label>Your Project</label>
            </div>
        </div>

        <div class="col-12">
            <div class="form-floating">
                <input type="text" name="subject" class="form-control border-0" placeholder="Subject" required>
                <label>Subject</label>
            </div>
        </div>

        <div class="col-12">
            <div class="form-floating">
                <textarea name="message" class="form-control border-0" placeholder="Leave a message here" style="height: 160px" required></textarea>
                <label>Message</label>
            </div>
        </div>

        <div class="col-12">
            <button type="submit" class="btn btn-primary w-100 py-3">
                Send Message
            </button>
        </div>
    </div>
</form>

                        </div>
                    </div>
                    <div class="col-12 wow fadeInUp" data-wow-delay="0.2s">
                        <div class="rounded">
                            <a href="https://maps.app.goo.gl/DvWsx69tdmmj7QdQA" target="_blank">
  View Location on Google Maps
<iframe
  src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3945.390934399627!2d76.8747008!3d8.5583545!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05bf74e061d2d9%3A0x466c362cb16ce198!2sHYZ%20VENTURES%20INTL%20PRIVATE%20LIMITED!5e0!3m2!1sen!2sin!4v1768473635130!5m2!1sen!2sin"
  width="100%"
  height="450"
  style="border:0;"
  allowfullscreen
  loading="lazy"
  referrerpolicy="no-referrer-when-downgrade">
</iframe>
<!-- <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d3945.390934399627!2d76.8747008!3d8.5583545!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3b05bf74e061d2d9%3A0x466c362cb16ce198!2sHYZ%20VENTURES%20INTL%20PRIVATE%20LIMITED!5e0!3m2!1sen!2sin!4v1768473635130!5m2!1sen!2sin" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe> -->



                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Contact End -->
@endsection
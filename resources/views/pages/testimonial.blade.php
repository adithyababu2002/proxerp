@extends('layouts.app')
@section('content')
<!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Testimonial</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active text-primary">Testimonial</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
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

@endsection
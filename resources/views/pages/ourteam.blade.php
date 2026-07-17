@extends('layouts.app')
@section('content')

<!-- Header Start -->
    <div class="container-fluid bg-breadcrumb">
        <div class="container text-center py-5" style="max-width: 900px;">
            <h4 class="text-white display-4 mb-4 wow fadeInDown" data-wow-delay="0.1s">Our team</h4>
            <ol class="breadcrumb d-flex justify-content-center mb-0 wow fadeInDown" data-wow-delay="0.3s">
                <li class="breadcrumb-item"><a href="{{ route('home') }}">Home</a></li>
                <!-- <li class="breadcrumb-item"><a href="#">Pages</a></li> -->
                <li class="breadcrumb-item active text-primary">Our team</li>
            </ol>
        </div>
    </div>
    <!-- Header End -->
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
@endsection
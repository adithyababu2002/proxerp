@extends('layouts.app')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5" style="max-width: 900px;">
        <h4 class="text-white display-4 mb-4">Blogs</h4>
        <ol class="breadcrumb d-flex justify-content-center mb-0">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="breadcrumb-item active text-primary">Blogs</li>
        </ol>
    </div>
</div>
<!-- Header End -->

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
/* ===== MOBILE FIX ===== */
@media (max-width: 768px) {
    .carousel-control-prev,
    .carousel-control-next {
        width: 12%;
    }
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



@endsection

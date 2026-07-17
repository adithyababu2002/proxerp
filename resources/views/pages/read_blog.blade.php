@extends('layouts.app')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 blog-header">

        <h4 class="text-white display-5 mb-3 blog-title">
            {{ $blog->title }}
        </h4>

        <ol class="breadcrumb d-flex justify-content-center flex-wrap mb-0">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('blog') }}">Blogs</a>
            </li>
            <li class="breadcrumb-item active text-primary">
                {{ Str::limit($blog->title, 35) }}
            </li>
        </ol>

    </div>
</div>
<!-- Header End -->

<!-- Blog Details Start -->
<div class="container-fluid py-5">
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">

                <!-- Blog Image -->
                <div class="mb-4">
                    <img src="{{ asset('storage/'.$blog->image) }}"
                         class="img-fluid rounded-4 w-100 blog-image"
                         alt="{{ $blog->title }}">
                </div>

                <!-- Meta -->
                <div class="d-flex align-items-center text-muted mb-3 small">
                    <i class="fas fa-calendar-alt me-2"></i>
                    {{ $blog->created_at->format('F d, Y') }}
                </div>

                <!-- Heading -->
                <h2 class="fw-semibold mb-4 blog-heading">
                    {{ $blog->heading }}
                </h2>
                <!-- Author -->
<div class="d-flex align-items-center mb-4">
    <img src="{{ asset('storage/' . ($blog->author->image1 ?? 'default-user.png')) }}"
         alt="{{ $blog->author?->name }}"
         class="rounded-circle me-3 author-img">

    <div>
        <div class="fw-semibold">
            {{ $blog->author?->name ?? 'Admin' }}
        </div>
        <small class="text-muted">Author</small>
    </div>
</div>


                <!-- Content -->
                <div class="blog-body fs-5 text-muted">
                    {!! nl2br(e($blog->paragraph)) !!}
                </div>

                <!-- Back Button -->
                <div class="mt-5">
                    <a href="{{ route('blog') }}"
                       class="btn btn-outline-primary rounded-pill px-4 py-2">
                        ← Back to Blogs
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- Blog Details End -->
<style>
/* ===== HEADER FIX ===== */
.blog-header {
    max-width: 900px;
}

.blog-title {
    line-height: 1.25;
    word-wrap: break-word;
    overflow-wrap: break-word;
}
/* ===== AUTHOR ===== */
.author-img {
    width: 70px;
    height: 70px;
    object-fit: contain;
    border: 2px solid #f1f1f1;
}

/* ===== IMAGE FIX ===== */
.blog-image {
    max-height: 450px;
    object-fit: cover;
}

/* ===== CONTENT FIX ===== */
.blog-body {
    line-height: 1.9;
    word-break: break-word;
}

.blog-body p {
    margin-bottom: 1.2rem;
}

/* Prevent layout break from long words / URLs */
.blog-body * {
    overflow-wrap: break-word;
}

/* ===== MOBILE OPTIMIZATION ===== */
@media (max-width: 768px) {
    .blog-title {
        font-size: 1.8rem;
    }

    .blog-body {
        font-size: 1rem;
    }
}
</style>

@endsection

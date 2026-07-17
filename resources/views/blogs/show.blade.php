@extends('layouts.admin')
@section('title','show|blogs')

@section('content')
<div class="container-fluid py-3">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0 fw-semibold">View Blog</h4>

        <a href="{{ route('blogs.index') }}"
           class="btn btn-outline-dark rounded-pill px-4">
            ← Back to Blogs
        </a>
    </div>

    <!-- Blog Card -->
    <div class="row">
        <div class="col-xl-7 col-lg-8 col-md-10 mx-auto">

            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">

                    <!-- Title -->
                    <h3 class="fw-semibold mb-3">
                        {{ $blog->title }}
                    </h3>

                    <!-- Image -->
                    <div class="mb-4">
                        <img src="{{ asset('storage/'.$blog->image) }}"
                             class="rounded-4 w-100"
                             style="max-height:320px; object-fit:cover;"
                             alt="Blog Image">
                    </div>
<p class="text-muted lh-lg">
                        Author: <strong>{{ $blog->author?->name ?? 'No Author' }}</strong>

                    </p>
                    <!-- Heading -->
                    <h5 class="fw-semibold mb-2">
                        {{ $blog->heading }}
                    </h5>

                    <!-- Paragraph -->
                    <p class="text-muted lh-lg">
                        {{ $blog->paragraph }}
                    </p>

                    <!-- Actions -->
                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <a href="{{ route('blogs.edit', $blog->id) }}"
                           class="btn btn-outline-primary rounded-pill px-4">
                            Edit
                        </a>

                        <a href="{{ route('blogs.index') }}"
                           class="btn btn-dark rounded-pill px-4">
                            Back
                        </a>
                    </div>

                </div>
            </div>

        </div>
    </div>
</div>
@endsection

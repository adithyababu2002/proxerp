@extends('layouts.admin')
@section('title','show|reviews')

@section('content')
<div class="container-fluid py-3">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0 fw-semibold">View Review</h4>

        <a href="{{ route('reviews.index') }}"
           class="btn btn-outline-dark rounded-pill px-4">
            ← Back to Reviews
        </a>
    </div>

    <!-- Review Card -->
    <div class="row">
        <div class="col-xl-7 col-lg-8 col-md-10 mx-auto">

            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4 text-center">

                    <!-- Profile Image -->
                    @if($review->image)
                        <div class="mb-3">
                            <img src="{{ asset('storage/'.$review->image) }}"
                                 class="rounded-circle"
                                 width="110" height="110"
                                 style="object-fit:cover;"
                                 alt="Profile Image">
                        </div>
                    @endif

                    <!-- Name -->
                    <h4 class="fw-semibold mb-1">
                        {{ $review->name }}
                    </h4>

                    <!-- Profession -->
                    @if($review->profession)
                        <p class="text-muted mb-2">
                            {{ $review->profession }}
                        </p>
                    @endif

                    <!-- Rating -->
                    <div class="mb-3">
                        @for($i = 1; $i <= 5; $i++)
                            <i class="fas fa-star {{ $i <= $review->rating ? 'text-warning' : 'text-muted' }}"></i>
                        @endfor
                    </div>

                    <!-- Review Message -->
                    <p class="text-muted lh-lg px-md-4">
                        “{{ $review->message }}”
                    </p>

                    <!-- Status -->
                    <div class="mt-3">
                        @if($review->status)
                            <span class="badge bg-success rounded-pill px-3 py-2">
                                Active
                            </span>
                        @else
                            <span class="badge bg-secondary rounded-pill px-3 py-2">
                                Inactive
                            </span>
                        @endif
                    </div>

                    <!-- Actions -->
                    <div class="d-flex justify-content-center gap-2 mt-4">
                        <a href="{{ route('reviews.edit', $review->id) }}"
                           class="btn btn-outline-primary rounded-pill px-4">
                            Edit
                        </a>

                        <a href="{{ route('reviews.index') }}"
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

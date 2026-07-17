@extends('layouts.admin')
@section('title','show|attractions')

@section('content')
<div class="container-fluid py-3">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0 fw-semibold">View Attraction</h4>

        <a href="{{ route('attractions.index') }}"
           class="btn btn-outline-dark rounded-pill px-4">
            ← Back to Attractions
        </a>
    </div>

    <!-- Attraction Card -->
    <div class="row">
        <div class="col-xl-7 col-lg-8 col-md-10 mx-auto">

            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4 text-center">

                    <!-- Attraction Image -->
                    @if($attraction->image)
                        <div class="mb-3">
                            <img src="{{ asset('storage/'.$attraction->image) }}"
                                 class="rounded-3 border"
                                 width="220"
                                 style="object-fit:cover;"
                                 alt="Attraction Image">
                        </div>
                    @endif

                    <!-- Name -->
                    <h4 class="fw-semibold mb-3">
                        {{ $attraction->name }}
                    </h4>

                    <!-- Status -->
                    <div class="mt-2">
                        @if($attraction->status)
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
                        <a href="{{ route('attractions.edit', $attraction->id) }}"
                           class="btn btn-outline-primary rounded-pill px-4">
                            Edit
                        </a>

                        <a href="{{ route('attractions.index') }}"
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

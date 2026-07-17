@extends('layouts.admin')
@section('title','show|solutions')

@section('content')
<div class="container-fluid py-3">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0 fw-semibold">View Solution</h4>

        <a href="{{ route('solutions.index') }}"
           class="btn btn-outline-dark rounded-pill px-4">
            ← Back to Solutions
        </a>
    </div>

    <!-- Solution Card -->
    <div class="row">
        <div class="col-xl-7 col-lg-8 col-md-10 mx-auto">

            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">

                    <!-- Icon + Heading -->
                    <div class="d-flex align-items-center mb-3">
                        <div class="icon-box me-3">
                            <i class="bi {{ $solution->icon }}"></i>
                        </div>

                        <h3 class="fw-semibold mb-0">
                            {{ $solution->heading }}
                        </h3>
                    </div>

                    <!-- Paragraph -->
                    <p class="text-muted lh-lg mb-4">
                        {{ $solution->paragraph }}
                    </p>

                    <!-- Link -->
                    <div class="mb-4">
                        <span class="fw-semibold">Solution Link:</span>
                        <a href="{{ $solution->link }}"
                           target="_blank"
                           class="text-decoration-none ms-1">
                            {{ $solution->link }}
                        </a>
                    </div>

                    <!-- Actions -->
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('solutions.edit', $solution->id) }}"
                           class="btn btn-outline-primary rounded-pill px-4">
                            Edit
                        </a>

                        <a href="{{ route('solutions.index') }}"
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

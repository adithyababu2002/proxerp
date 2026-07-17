@extends('layouts.admin')
@section('title','index|solutions')

@section('content')
<div class="container-fluid px-4 py-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-semibold mb-0">Solutions</h4>

        <a href="{{ route('solutions.create') }}"
           class="btn btn-primary rounded-pill px-4">
            + Add Solution
        </a>
    </div>

    <!-- Success Alert -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Solution Cards -->
    <div class="row g-4">

        @forelse($solutions as $solution)
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-4">

                    <div class="card-body d-flex flex-column">

                        <!-- Icon + Heading -->
                        <div class="d-flex align-items-center mb-2">
                            <div class="icon-box me-3">
                                <i class="bi {{ $solution->icon }}"></i>
                            </div>

                            <h5 class="fw-semibold mb-0">
                                {{ $solution->heading }}
                            </h5>
                        </div>

                        <!-- Paragraph -->
                        <p class="text-muted small flex-grow-1">
                            {{ \Illuminate\Support\Str::limit($solution->paragraph, 110) }}
                        </p>

                        <!-- Link -->
                        <small class="mb-3">
                            <strong>Link:</strong>
                            <a href="{{ $solution->link }}"
                               target="_blank"
                               class="text-decoration-none">
                                {{ \Illuminate\Support\Str::limit($solution->link, 30) }}
                            </a>
                        </small>

                        <!-- Actions -->
                        <div class="d-flex gap-2 mt-auto">

                            <!-- Show -->
                            <a href="{{ route('solutions.show', $solution->id) }}"
                               class="btn btn-outline-secondary btn-sm rounded-pill w-100">
                                View
                            </a>

                            <!-- Edit -->
                            <a href="{{ route('solutions.edit', $solution->id) }}"
                               class="btn btn-outline-primary btn-sm rounded-pill w-100">
                                Edit
                            </a>

                            <!-- Delete -->
                            <form action="{{ route('solutions.destroy', $solution->id) }}"
                                  method="POST"
                                  class="w-100">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-outline-danger btn-sm rounded-pill w-100"
                                        onclick="return confirm('Are you sure you want to delete this solution?')">
                                    Delete
                                </button>
                            </form>

                        </div>

                    </div>
                </div>
            </div>
        @empty
            <div class="col-12">
                <div class="text-center text-muted py-5">
                    No solutions available.
                </div>
            </div>
        @endforelse

    </div>
</div>
@endsection

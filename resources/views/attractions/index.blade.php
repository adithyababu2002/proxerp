@extends('layouts.admin')
@section('title','index|attractions')

@section('content')

<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />

<div class="container-fluid px-4 py-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-semibold mb-0">Attractions</h4>

        <a href="{{ route('attractions.create') }}"
           class="btn btn-primary rounded-pill px-4">
            + Add Attraction
        </a>
    </div>

    <!-- Success Alert -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Attraction Cards -->
    <div class="row g-4">

        @forelse($attractions as $attraction)
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden text-center">

                    <!-- Attraction Image -->
                    @if($attraction->image)
                        <div class="pt-4">
                            <img src="{{ asset('storage/'.$attraction->image) }}"
                                 class="rounded-3"
                                 width="160"
                                 height="110"
                                 style="object-fit:cover;"
                                 alt="Attraction Image">
                        </div>
                    @endif

                    <!-- Body -->
                    <div class="card-body d-flex flex-column">

                        <h5 class="fw-semibold mb-3">
                            {{ $attraction->name }}
                        </h5>

                        <!-- Status -->
                        <div class="mb-3">
                            @if($attraction->status)
                                <span class="badge bg-success rounded-pill px-3">
                                    Active
                                </span>
                            @else
                                <span class="badge bg-secondary rounded-pill px-3">
                                    Inactive
                                </span>
                            @endif
                        </div>

                        <!-- Actions -->
                        <div class="d-flex gap-2 mt-auto">

                            <!-- Show -->
                            <a href="{{ route('attractions.show', $attraction->id) }}"
                               class="btn btn-outline-secondary btn-sm rounded-pill w-100">
                                View
                            </a>

                            <!-- Edit -->
                            <a href="{{ route('attractions.edit', $attraction->id) }}"
                               class="btn btn-outline-primary btn-sm rounded-pill w-100">
                                Edit
                            </a>

                            <!-- Delete -->
                            <form action="{{ route('attractions.destroy', $attraction->id) }}"
                                  method="POST"
                                  class="w-100">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-outline-danger btn-sm rounded-pill w-100"
                                        onclick="return confirm('Are you sure you want to delete this attraction?')">
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
                    No attractions available.
                </div>
            </div>
        @endforelse

    </div>
</div>
@endsection

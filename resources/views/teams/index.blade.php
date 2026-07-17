@extends('layouts.admin')
@section('title','index|teams')

@section('content')

<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4GZ0eXzD5iZ8tF+X0U1Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />

<div class="container-fluid px-4 py-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-semibold mb-0">Team Members</h4>

        <a href="{{ route('teams.create') }}" class="btn btn-primary rounded-pill px-4">
            + Add Team Member
        </a>
    </div>

    <!-- Success Alert -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Team Cards -->
    <div class="row g-4">

        @forelse($teams as $team)
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden text-center">

                    <!-- Profile Image -->
                    @if($team->image1)
                        <div class="pt-4">
                            <img src="{{ asset('storage/'.$team->image1) }}"
                                 class="rounded-circle"
                                 width="90" height="90"
                                 style="object-fit:cover;"
                                 alt="Profile Image">
                        </div>
                    @endif

                    <!-- Body -->
                    <div class="card-body d-flex flex-column">

                        <h5 class="fw-semibold mb-1">{{ $team->name }}</h5>

                        @if($team->profession)
                            <span class="text-muted small mb-2">
                                {{ $team->profession }}
                            </span>
                        @endif

                        <!-- Description -->
                        <p class="text-muted small flex-grow-1">
                            {{ \Illuminate\Support\Str::limit($team->description, 100) }}
                        </p>

                        <!-- Profile Link -->
                        @if($team->link)
                            <a href="{{ $team->link }}"
                               target="_blank"
                               class="btn btn-outline-primary btn-sm rounded-pill mb-2">
                                View Profile
                            </a>
                        @endif

                        <!-- Secondary Image -->
                        @if($team->image2)
                            <div class="mt-2">
                                <img src="{{ asset('storage/'.$team->image2) }}"
                                     class="rounded-3 shadow-sm"
                                     width="100"
                                     alt="Secondary Image">
                            </div>
                        @endif

                        <!-- Status -->
                        <div class="mb-3 mt-2">
                            @if($team->status)
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
                        <div class="d-flex gap-2 mt-auto flex-column">

                            <!-- Show -->
                            <a href="{{ route('teams.show', $team->id) }}"
                               class="btn btn-outline-secondary btn-sm rounded-pill w-100">
                                View
                            </a>

                            <!-- Edit -->
                            <a href="{{ route('teams.edit', $team->id) }}"
                               class="btn btn-outline-primary btn-sm rounded-pill w-100">
                                Edit
                            </a>

                            <!-- Delete -->
                            <form action="{{ route('teams.destroy', $team->id) }}"
                                  method="POST"
                                  class="w-100">
                                @csrf
                                @method('DELETE')

                                <button type="submit"
                                        class="btn btn-outline-danger btn-sm rounded-pill w-100"
                                        onclick="return confirm('Are you sure you want to delete this team member?')">
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
                    No team members available.
                </div>
            </div>
        @endforelse

    </div>
</div>
@endsection

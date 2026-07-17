@extends('layouts.admin')
@section('title','index|users')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="container-fluid px-4 py-4">

            <!-- Header -->
            <div class="d-flex justify-content-between align-items-center mb-4">
                <h4 class="fw-semibold mb-0">Users</h4>

                <a href="{{ route('users.create') }}"
                   class="btn btn-primary rounded-pill px-4">
                    + Add User
                </a>
            </div>

            <!-- Success Alert -->
            @if(session('success'))
                <div class="alert alert-success alert-dismissible fade show" role="alert">
                    {{ session('success') }}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                </div>
            @endif

            <!-- User Cards -->
            <div class="row g-4">

                @forelse($users as $user)
                    <div class="col-xl-4 col-lg-6 col-md-6">
                        <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">

                            <!-- Card Body -->
                            <div class="card-body d-flex flex-column">

                                <!-- Name -->
                                <h5 class="fw-semibold mb-1">
                                    {{ $user->name }}
                                </h5>

                                <!-- Email -->
                                <span class="text-muted small mb-2">
                                    {{ $user->email }}
                                </span>

                                <!-- Joined -->
                                <p class="text-muted small flex-grow-1">
                                    Joined on {{ $user->created_at->format('d M Y') }}
                                </p>

                                <!-- Actions -->
                                <div class="d-flex gap-2 mt-3">

                                    <!-- View -->
                                    <a href="{{ route('users.show', $user->id) }}"
                                       class="btn btn-outline-secondary btn-sm rounded-pill w-100">
                                        View
                                    </a>

                                    <!-- Edit -->
                                    <a href="{{ route('users.edit', $user->id) }}"
                                       class="btn btn-outline-primary btn-sm rounded-pill w-100">
                                        Edit
                                    </a>

                                    <!-- Delete -->
                                    <form action="{{ route('users.destroy', $user->id) }}"
                                          method="POST"
                                          class="w-100">
                                        @csrf
                                        @method('DELETE')

                                        <button type="submit"
                                                class="btn btn-outline-danger btn-sm rounded-pill w-100"
                                                onclick="return confirm('Are you sure you want to delete this user?')">
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
                            No users available.
                        </div>
                    </div>
                @endforelse

            </div>

        </div>
    </div>
</div>
@endsection

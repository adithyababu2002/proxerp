@extends('layouts.admin')
@section('title','show|users')

@section('content')
<div class="container-fluid py-3">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0 fw-semibold">View User</h4>

        <a href="{{ route('users.index') }}"
           class="btn btn-outline-dark rounded-pill px-4">
            ← Back to Users
        </a>
    </div>

    <!-- User Card -->
    <div class="row">
        <div class="col-xl-7 col-lg-8 col-md-10 mx-auto">

            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4">

                    <!-- Name -->
                    <h3 class="fw-semibold mb-3">
                        {{ $user->name }}
                    </h3>

                    <!-- Email -->
                    <p class="text-muted fs-6 mb-2">
                        <strong>Email:</strong> {{ $user->email }}
                    </p>

                    <!-- Created Date -->
                    <p class="text-muted fs-6 mb-2">
                        <strong>Joined:</strong>
                        {{ $user->created_at->format('d M Y') }}
                    </p>

                    <!-- Updated Date -->
                    <p class="text-muted fs-6 mb-4">
                        <strong>Last Updated:</strong>
                        {{ $user->updated_at->format('d M Y') }}
                    </p>

                    <!-- Actions -->
                    <div class="d-flex justify-content-end gap-2 mt-4">
                        <a href="{{ route('users.edit', $user->id) }}"
                           class="btn btn-outline-primary rounded-pill px-4">
                            Edit
                        </a>

                        <a href="{{ route('users.index') }}"
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

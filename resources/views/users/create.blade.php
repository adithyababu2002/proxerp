@extends('layouts.admin')
@section('title','create|users')

@section('content')
<style>
    .form-control {
        border: 2px solid #212529 !important;
        border-radius: 0.75rem;
    }

    .form-control:focus {
        border-color: #000 !important;
        box-shadow: none;
    }
</style>

<div class="container-fluid py-3">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0 fw-semibold">Add User</h4>

        <a href="{{ route('users.index') }}"
           class="btn btn-outline-dark rounded-pill px-4">
            ← Back to Users
        </a>
    </div>

    <!-- Form Card -->
    <div class="row">
        <div class="col-xl-7 col-lg-8 col-md-10 mx-auto">

            <form method="POST"
                  action="{{ route('users.store') }}"
                  class="card shadow-sm border-0 rounded-4">

                @csrf

                <div class="card-body p-4">

                    <!-- Name -->
                    <div class="form-floating mb-3">
                        <input type="text"
                               class="form-control"
                               id="name"
                               name="name"
                               placeholder="Full Name"
                               required>
                        <label for="name">Full Name</label>
                    </div>

                    <!-- Email -->
                    <div class="form-floating mb-3">
                        <input type="email"
                               class="form-control"
                               id="email"
                               name="email"
                               placeholder="Email Address"
                               required>
                        <label for="email">Email Address</label>
                    </div>

                    <!-- Password -->
                    <div class="form-floating mb-4">
                        <input type="password"
                               class="form-control"
                               id="password"
                               name="password"
                               placeholder="Password"
                               required>
                        <label for="password">Password</label>
                    </div>

                    <!-- Actions -->
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('users.index') }}"
                           class="btn btn-light rounded-pill px-4">
                            Cancel
                        </a>

                        <button type="submit"
                                class="btn btn-dark rounded-pill px-5">
                            Create User
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection

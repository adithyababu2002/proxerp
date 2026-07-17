@extends('layouts.admin')
@section('title','create|attractions')

@section('content')
<style>
    .form-control {
        border: 2px solid #212529 !important; /* dark border */
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
        <h4 class="mb-0 fw-semibold">Add Attraction</h4>

        <a href="{{ route('attractions.index') }}"
           class="btn btn-outline-dark rounded-pill px-4">
            ← Back to Attractions
        </a>
    </div>

    <!-- Form Card -->
    <div class="row">
        <div class="col-xl-6 col-lg-7 col-md-9 mx-auto">

            <form method="POST"
                  enctype="multipart/form-data"
                  action="{{ route('attractions.store') }}"
                  class="card shadow-sm border-0 rounded-4">

                @csrf

                <div class="card-body p-4">

                    <!-- Name -->
                    <div class="form-floating mb-3">
                        <input type="text"
                               class="form-control"
                               id="name"
                               name="name"
                               placeholder="Attraction Name"
                               required>
                        <label for="name">Attraction Name</label>
                    </div>

                    <!-- Image -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Attraction Image</label>
                        <input type="file"
                               class="form-control"
                               name="image">
                        <small class="text-muted">JPG, PNG (Max: 10MB)</small>
                    </div>

                    <!-- Status -->
                    <div class="form-check mb-4">
                        <input class="form-check-input"
                               type="checkbox"
                               value="1"
                               name="status"
                               id="status"
                               checked>
                        <label class="form-check-label" for="status">
                            Active
                        </label>
                    </div>

                    <!-- Actions -->
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('attractions.index') }}"
                           class="btn btn-light rounded-pill px-4">
                            Cancel
                        </a>

                        <button type="submit"
                                class="btn btn-dark rounded-pill px-5">
                            Add Attraction
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection

@extends('layouts.admin')
@section('title','create|reviews')

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
        <h4 class="mb-0 fw-semibold">Add Review</h4>

        <a href="{{ route('reviews.index') }}"
           class="btn btn-outline-dark rounded-pill px-4">
            ← Back to Reviews
        </a>
    </div>

    <!-- Form Card -->
    <div class="row">
        <div class="col-xl-7 col-lg-8 col-md-10 mx-auto">

            <form method="POST"
                  enctype="multipart/form-data"
                  action="{{ route('reviews.store') }}"
                  class="card shadow-sm border-0 rounded-4">

                @csrf

                <div class="card-body p-4">

                    <!-- Name -->
                    <div class="form-floating mb-3">
                        <input type="text"
                               class="form-control"
                               id="name"
                               name="name"
                               placeholder="Name"
                               required>
                        <label for="name">Name</label>
                    </div>

                    <!-- Profession -->
                    <div class="form-floating mb-3">
                        <input type="text"
                               class="form-control"
                               id="profession"
                               name="profession"
                               placeholder="Profession">
                        <label for="profession">Profession (Optional)</label>
                    </div>

                    <!-- Review Message -->
                    <div class="form-floating mb-3">
                        <textarea class="form-control"
                                  id="message"
                                  name="message"
                                  placeholder="Write review"
                                  style="height: 120px"
                                  required></textarea>
                        <label for="message">Review Message</label>
                    </div>

                    <!-- Rating -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Rating</label>
                        <select class="form-select" name="rating" required>
                            <option value="5" selected>5 Stars</option>
                            <option value="4">4 Stars</option>
                            <option value="3">3 Stars</option>
                            <option value="2">2 Stars</option>
                            <option value="1">1 Star</option>
                        </select>
                    </div>

                    <!-- Image -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Profile Image</label>
                        <input type="file"
                               class="form-control"
                               name="image">
                        <small class="text-muted">JPG, PNG (Max: 10MB)</small>
                    </div>

                    <!-- Status -->
                    <div class="form-check mb-4">
                        <input class="form-check-input" type="checkbox" value="1" name="status" id="status" checked>
                        <label class="form-check-label" for="status">
                            Active
                        </label>
                    </div>

                    <!-- Actions -->
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('reviews.index') }}"
                           class="btn btn-light rounded-pill px-4">
                            Cancel
                        </a>

                        <button type="submit"
                                class="btn btn-dark rounded-pill px-5">
                            Add Review
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection

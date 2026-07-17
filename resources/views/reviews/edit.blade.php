@extends('layouts.admin')
@section('title','edit|reviews')

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
        <h4 class="mb-0 fw-semibold">Edit Review</h4>

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
                  action="{{ route('reviews.update', $review->id) }}"
                  class="card shadow-sm border-0 rounded-4">

                @csrf
                @method('PUT')

                <div class="card-body p-4">

                    <!-- Name -->
                    <div class="form-floating mb-3">
                        <input type="text"
                               class="form-control"
                               id="name"
                               name="name"
                               value="{{ old('name', $review->name) }}"
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
                               value="{{ old('profession', $review->profession) }}"
                               placeholder="Profession">
                        <label for="profession">Profession (Optional)</label>
                    </div>

                    <!-- Review Message -->
                    <div class="form-floating mb-3">
                        <textarea class="form-control"
                                  id="message"
                                  name="message"
                                  style="height: 120px"
                                  required>{{ old('message', $review->message) }}</textarea>
                        <label for="message">Review Message</label>
                    </div>

                    <!-- Rating -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Rating</label>
                        <select class="form-select" name="rating" required>
                            @for($i = 5; $i >= 1; $i--)
                                <option value="{{ $i }}"
                                    {{ old('rating', $review->rating) == $i ? 'selected' : '' }}>
                                    {{ $i }} Star{{ $i > 1 ? 's' : '' }}
                                </option>
                            @endfor
                        </select>
                    </div>

                    <!-- Current Image -->
                    @if($review->image)
                        <div class="mb-3">
                            <label class="form-label fw-semibold">Current Image</label><br>
                            <img src="{{ asset('storage/'.$review->image) }}"
                                 class="rounded-circle mb-2"
                                 width="80" height="80"
                                 style="object-fit:cover;">
                        </div>
                    @endif

                    <!-- Image -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Change Image</label>
                        <input type="file"
                               class="form-control"
                               name="image">
                        <small class="text-muted">Leave empty to keep current image</small>
                    </div>

                    <!-- Status -->
                    <div class="form-check mb-4">
                        <input class="form-check-input"
                               type="checkbox"
                               value="1"
                               name="status"
                               id="status"
                               {{ old('status', $review->status) ? 'checked' : '' }}>
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
                            Update Review
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection

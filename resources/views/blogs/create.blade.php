@extends('layouts.admin')
@section('title','create|blogs')

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
        <h4 class="mb-0 fw-semibold">Add Blog</h4>

        <a href="{{ route('blogs.index') }}"
           class="btn btn-outline-dark rounded-pill px-4">
            ← Back to Blogs
        </a>
    </div>

    <!-- Form Card -->
    <div class="row">
        <div class="col-xl-7 col-lg-8 col-md-10 mx-auto">

            <form method="POST"
                  enctype="multipart/form-data"
                  action="{{ route('blogs.store') }}"
                  class="card shadow-sm border-0 rounded-4">

                @csrf

                <div class="card-body p-4">

                    <!-- Title -->
                    <div class="form-floating mb-3">
                        <input type="text"
                               class="form-control"
                               id="title"
                               name="title"
                               placeholder="Blog Title"
                               required>
                        <label for="title">Blog Title</label>
                        <p>@error('title') @enderror</p>
                    </div>

                    <!-- Image -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Blog Image</label>
                        <input type="file"
                               class="form-control"
                               name="image"
                               required>
                        <small class="text-muted">JPG, PNG (Max: 10MB)</small>
                        <p>@error('image') @enderror</p>
                    </div>


                    <!-- Author -->
<div class="form-floating mb-3">
    <select class="form-select form-control"
            id="author_id"
            name="author_id"
            required>
        <option value="" selected disabled>Select Author</option>

        @foreach($teams as $team)
            <option value="{{ $team->id }}"
                {{ old('author_id') == $team->id ? 'selected' : '' }}>
                {{ $team->name }}
            </option>
        @endforeach
    </select>

    <label for="author_id">Author</label>
    @error('author_id')
        <small class="text-danger">{{ $message }}</small>
    @enderror
</div>

                    <!-- Heading -->
                    <div class="form-floating mb-3">
                        <input type="text"
                               class="form-control"
                               id="heading"
                               name="heading"
                               placeholder="Blog Heading"
                               required>
                        <label for="heading">Blog Heading</label>
                        <p>@error('image') @enderror</p>
                    </div>

                    <!-- Paragraph -->
                    <div class="form-floating mb-4">
                        <textarea class="form-control"
                                  id="paragraph"
                                  name="paragraph"
                                  placeholder="Write blog content"
                                  style="height: 160px"
                                  required></textarea>
                        <label for="paragraph">Blog Content</label>
                        <p>@error('image') @enderror</p>
                    </div>

                    <!-- Actions -->
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('blogs.index') }}"
                           class="btn btn-light rounded-pill px-4">
                            Cancel
                        </a>

                        <button type="submit"
                                class="btn btn-dark rounded-pill px-5">
                            Publish Blog
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection

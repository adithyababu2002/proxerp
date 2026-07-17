@extends('layouts.admin')
@section('title','edit|blogs')

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
        <h4 class="mb-0 fw-semibold">Edit Blog</h4>

        <a href="{{ route('blogs.index') }}"
           class="btn btn-outline-dark rounded-pill px-4">
            ← Back to Blogs
        </a>
    </div>

    <!-- Form -->
    <div class="row">
        <div class="col-xl-7 col-lg-8 col-md-10 mx-auto">

            <form method="POST"
                  enctype="multipart/form-data"
                  action="{{ route('blogs.update', $blog->id) }}"
                  class="card shadow-sm border-0 rounded-4">

                @csrf
                @method('PUT')

                <div class="card-body p-4">

                    <!-- Title -->
                    <div class="form-floating mb-3">
                        <input type="text"
                               class="form-control"
                               name="title"
                               value="{{ old('title', $blog->title) }}"
                               placeholder="Blog Title"
                               required>
                        <label>Blog Title</label>
                    </div>

                    <!-- Current Image -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold d-block">Current Image</label>
                        <img src="{{ asset('storage/'.$blog->image) }}"
                             class="rounded-3 mb-2 border"
                             style="height:130px;width:100%;object-fit:cover;"
                             alt="Blog Image">
                    </div>

                    <!-- Image Upload -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Change Image</label>
                        <input type="file" class="form-control" name="image">
                        <small class="text-muted">Leave empty to keep current image</small>
                    </div>

                    <!-- Author -->
<div class="form-floating mb-3">
    <select class="form-select form-control"
            name="author_id"
            id="author_id"
            required>

        @foreach($teams as $team)
            <option value="{{ $team->id }}"
                {{ $blog->author_id == $team->id ? 'selected' : '' }}>
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
                               name="heading"
                               value="{{ old('heading', $blog->heading) }}"
                               placeholder="Blog Heading"
                               required>
                        <label>Blog Heading</label>
                    </div>

                    <!-- Paragraph -->
                    <div class="form-floating mb-4">
                        <textarea class="form-control"
                                  name="paragraph"
                                  style="height:160px"
                                  placeholder="Write blog content"
                                  required>{{ old('paragraph', $blog->paragraph) }}</textarea>
                        <label>Blog Content</label>
                    </div>

                    <!-- Actions -->
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('blogs.index') }}"
                           class="btn btn-light rounded-pill px-4">
                            Cancel
                        </a>

                        <button type="submit"
                                class="btn btn-dark rounded-pill px-5">
                            Update Blog
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection

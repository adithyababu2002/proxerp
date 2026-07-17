@extends('layouts.admin')
@section('title','index|blogs')

@section('content')
<div class="container">
    <div class="row justify-content-center">
<div class="container-fluid px-4 py-4">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="fw-semibold mb-0">Blogs</h4>

        <a href="{{ route('blogs.create') }}" class="btn btn-primary rounded-pill px-4">
            + Add Blog
        </a>
    </div>

    <!-- Success Alert -->
    @if(session('success'))
        <div class="alert alert-success alert-dismissible fade show" role="alert">
            {{ session('success') }}
            <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
        </div>
    @endif

    <!-- Blog Cards -->
    <div class="row g-4">

        @forelse($blogs as $blog)
            <div class="col-xl-4 col-lg-6 col-md-6">
                <div class="card h-100 border-0 shadow-sm rounded-4 overflow-hidden">

                    <!-- Image -->
                    <img 
                        src="{{ asset('storage/'.$blog->image) }}" 
                        alt="Blog Image"
                        class="w-100"
                        style="height:200px; object-fit:cover;"
                    >

                    <!-- Body -->
                    <div class="card-body d-flex flex-column">

                        <h5 class="fw-semibold mb-1">{{ $blog->title }}</h5>

                                                <h6 class=" mb-1">
    {{ optional($blog->author)->name ?? 'No Author' }}
</h6>

                        <span class="text-muted small mb-2">{{ $blog->heading }}</span>

                        <p class="text-muted small flex-grow-1">
                            {{ \Illuminate\Support\Str::limit($blog->paragraph, 100) }}
                        </p>

                        <!-- Actions -->
                       <div class="d-flex gap-2 mt-3">

    <!-- Show -->
    <a href="{{ route('blogs.show', $blog->id) }}"
       class="btn btn-outline-secondary btn-sm rounded-pill w-100">
        View
    </a>

    <!-- Edit -->
    <a href="{{ route('blogs.edit', $blog->id) }}"
       class="btn btn-outline-primary btn-sm rounded-pill w-100">
        Edit
    </a>

    <!-- Delete -->
    <form action="{{ route('blogs.destroy', $blog->id) }}"
          method="POST"
          class="w-100">
        @csrf
        @method('DELETE')

        <button type="submit"
                class="btn btn-outline-danger btn-sm rounded-pill w-100"
                onclick="return confirm('Are you sure you want to delete this blog?')">
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
                    No blogs available.
                </div>
            </div>
        @endforelse

    </div>
</div>
    </div>
    </div>
@endsection

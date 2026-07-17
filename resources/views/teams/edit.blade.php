@extends('layouts.admin')
@section('title','edit|teams')

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
        <h4 class="mb-0 fw-semibold">Edit Team Member</h4>

        <a href="{{ route('teams.index') }}"
           class="btn btn-outline-dark rounded-pill px-4">
            ← Back to Team
        </a>
    </div>

    <!-- Form Card -->
    <div class="row">
        <div class="col-xl-7 col-lg-8 col-md-10 mx-auto">

            <form method="POST"
                  enctype="multipart/form-data"
                  action="{{ route('teams.update', $team->id) }}"
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
                               value="{{ old('name', $team->name) }}"
                               placeholder="Name"
                               required>
                        <label for="name">Full Name</label>
                    </div>

                    <!-- Profession -->
                    <div class="form-floating mb-3">
                        <input type="text"
                               class="form-control"
                               id="profession"
                               name="profession"
                               value="{{ old('profession', $team->profession) }}"
                               placeholder="Profession">
                        <label for="profession">Role / Designation</label>
                    </div>

                    <!-- Description -->
                    <div class="form-floating mb-3">
                        <textarea class="form-control"
                                  id="description"
                                  name="description"
                                  placeholder="Description"
                                  style="height: 120px"
                                  required>{{ old('description', $team->description) }}</textarea>
                        <label for="description">About Team Member</label>
                    </div>

                    <!-- Profile Link -->
                    <div class="form-floating mb-3">
                        <input type="url"
                               class="form-control"
                               id="link"
                               name="link"
                               value="{{ old('link', $team->link) }}"
                               placeholder="Profile Link">
                        <label for="link">Profile Link</label>
                    </div>

                    <!-- Profile Image -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Profile Image</label>
                        <input type="file"
                               class="form-control"
                               name="image1">

                        @if($team->image1)
                            <div class="mt-2">
                                <img src="{{ asset('storage/teams/'.$team->image1) }}"
                                     class="rounded"
                                     width="80">
                            </div>
                        @endif
                    </div>

                    <!-- Secondary Image -->
                    <div class="mb-3">
                        <label class="form-label fw-semibold">Secondary Image</label>
                        <input type="file"
                               class="form-control"
                               name="image2">

                        @if($team->image2)
                            <div class="mt-2">
                                <img src="{{ asset('storage/teams/'.$team->image2) }}"
                                     class="rounded"
                                     width="80">
                            </div>
                        @endif
                    </div>

                    <!-- Status -->
                    <div class="form-check mb-4">
                        <input class="form-check-input"
                               type="checkbox"
                               value="1"
                               name="status"
                               id="status"
                               {{ $team->status ? 'checked' : '' }}>
                        <label class="form-check-label" for="status">
                            Active
                        </label>
                    </div>

                    <!-- Actions -->
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('teams.index') }}"
                           class="btn btn-light rounded-pill px-4">
                            Cancel
                        </a>

                        <button type="submit"
                                class="btn btn-dark rounded-pill px-5">
                            Update Team Member
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection

@extends('layouts.admin')
@section('title','show|teams')

@section('content')
<div class="container-fluid py-3">

    <!-- Header -->
    <div class="d-flex justify-content-between align-items-center mb-4">
        <h4 class="mb-0 fw-semibold">View Team Member</h4>

        <a href="{{ route('teams.index') }}"
           class="btn btn-outline-dark rounded-pill px-4">
            ← Back to Team
        </a>
    </div>

    <!-- Team Card -->
    <div class="row">
        <div class="col-xl-7 col-lg-8 col-md-10 mx-auto">

            <div class="card shadow-sm border-0 rounded-4">
                <div class="card-body p-4 text-center">

                    <!-- Profile Image -->
                    @if($team->image1)
                        <div class="mb-3">
                            <img src="{{ asset('storage/'.$team->image1) }}"
                                 class="rounded-circle"
                                 width="120" height="120"
                                 style="object-fit:cover;"
                                 alt="Team Member">
                        </div>
                    @endif

                    <!-- Name -->
                    <h4 class="fw-semibold mb-1">
                        {{ $team->name }}
                    </h4>

                    <!-- Profession -->
                    @if($team->profession)
                        <p class="text-muted mb-2">
                            {{ $team->profession }}
                        </p>
                    @endif

                    <!-- Description -->
                    <p class="text-muted lh-lg px-md-4">
                        {{ $team->description }}
                    </p>

                    <!-- Profile Link -->
                    @if($team->link)
                        <div class="mt-2">
                            <a href="{{ $team->link }}"
                               target="_blank"
                               class="btn btn-sm btn-outline-primary rounded-pill px-4">
                                View Profile
                            </a>
                        </div>
                    @endif

                    <!-- Secondary Image -->
                    @if($team->image2)
                        <div class="mt-4">
                            <img src="{{ asset('storage/'.$team->image2) }}"
                                 class="rounded-3 shadow-sm"
                                 width="200"
                                 alt="Secondary Image">
                        </div>
                    @endif

                    <!-- Status -->
                    <div class="mt-4">
                        @if($team->status)
                            <span class="badge bg-success rounded-pill px-3 py-2">
                                Active
                            </span>
                        @else
                            <span class="badge bg-secondary rounded-pill px-3 py-2">
                                Inactive
                            </span>
                        @endif
                    </div>

                    <!-- Actions -->
                    <div class="d-flex justify-content-center gap-2 mt-4">
                        <a href="{{ route('teams.edit', $team->id) }}"
                           class="btn btn-outline-primary rounded-pill px-4">
                            Edit
                        </a>

                        <a href="{{ route('teams.index') }}"
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

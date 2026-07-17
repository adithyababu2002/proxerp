@extends('layouts.app')

@section('content')

<!-- Header Start -->
<div class="container-fluid bg-breadcrumb">
    <div class="container text-center py-5 team-header">

        <h4 class="text-white display-5 mb-2 team-name">
            {{ $team->name }}
        </h4>

        <p class="text-white-50 mb-3 team-role">
            {{ $team->profession }}
        </p>

        <ol class="breadcrumb d-flex justify-content-center flex-wrap mb-0">
            <li class="breadcrumb-item">
                <a href="{{ route('home') }}">Home</a>
            </li>
            <li class="breadcrumb-item">
                <a href="{{ route('ourteam') }}">Team</a>
            </li>
            <li class="breadcrumb-item active text-primary">
                {{ $team->name }}
            </li>
        </ol>

    </div>
</div>
<!-- Header End -->

<!-- Team Details Start -->
<div class="container-fluid py-5">
    <div class="container py-5">

        <div class="row justify-content-center">
            <div class="col-lg-8 col-xl-7">

                <!-- Team Image -->
                <div class="mb-4 text-center">
                    <img src="{{ asset('storage/'.$team->image1) }}"
                         class="img-fluid rounded-circle team-image"
                         alt="{{ $team->name }}">
                </div>

                <!-- Social -->
                @if($team->link)
                <div class="text-center mb-4">
                    <a href="{{ $team->link }}"
                       target="_blank"
                       class="btn btn-primary btn-sm rounded-circle">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                </div>
                @endif

                <!-- About Heading -->
                <h2 class="fw-semibold mb-4 text-center team-heading">
                    About {{ $team->name }}
                </h2>

                <!-- Description -->
                <div class="team-body fs-5 text-muted text-center">
                    {!! nl2br(e($team->description)) !!}
                </div>

                <!-- Back Button -->
                <div class="mt-5 text-center">
                    <a href="{{ route('ourteam') }}"
                       class="btn btn-outline-primary rounded-pill px-4 py-2">
                        ← Back to Team
                    </a>
                </div>

            </div>
        </div>

    </div>
</div>
<!-- Team Details End -->

<style>
/* ===== HEADER ===== */
.team-header {
    max-width: 900px;
}

.team-name {
    line-height: 1.2;
    word-break: break-word;
}

.team-role {
    font-size: 1.1rem;
}

/* ===== IMAGE ===== */
.team-image {
    width: 220px;
    height: 220px;
    object-fit: cover;
}

/* ===== CONTENT ===== */
.team-body {
    line-height: 1.9;
    word-break: break-word;
}

.team-body p {
    margin-bottom: 1.2rem;
}

/* ===== MOBILE ===== */
@media (max-width: 768px) {
    .team-name {
        font-size: 1.8rem;
    }

    .team-body {
        font-size: 1rem;
    }

    .team-image {
        width: 170px;
        height: 170px;
    }
}
</style>

@endsection

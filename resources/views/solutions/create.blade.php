@extends('layouts.admin')
@section('title','create|solutions')

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
        <h4 class="mb-0 fw-semibold">Add Solution</h4>

        <a href="{{ route('solutions.index') }}"
           class="btn btn-outline-dark rounded-pill px-4">
            ← Back to Solutions
        </a>
    </div>

    <!-- Form Card -->
    <div class="row">
        <div class="col-xl-7 col-lg-8 col-md-10 mx-auto">

            <form method="POST"
                  action="{{ route('solutions.store') }}"
                  class="card shadow-sm border-0 rounded-4">

                @csrf

                <div class="card-body p-4">

                    <!-- Icon -->
                    <div class="form-floating mb-3">
                        <select class="form-select"
                                id="icon"
                                name="icon"
                                required>
                            <option value="">Select Icon</option>
                            <option value="bi-gear">⚙ Enterprise</option>
                            <option value="bi-cloud">☁ Cloud</option>
                            <option value="bi-bar-chart">📊 Analytics</option>
                            <option value="bi-shield-check">🛡 Security</option>
                            <option value="bi-people">👥 Consulting</option>
                            <option value="bi-code-slash">💻 Development</option>
                        </select>
                        <label for="icon">Solution Icon</label>
                    </div>

                    <!-- Heading -->
                    <div class="form-floating mb-3">
                        <input type="text"
                               class="form-control"
                               id="heading"
                               name="heading"
                               placeholder="Solution Heading"
                               required>
                        <label for="heading">Solution Heading</label>
                    </div>

                    <!-- Paragraph -->
                    <div class="form-floating mb-3">
                        <textarea class="form-control"
                                  id="paragraph"
                                  name="paragraph"
                                  placeholder="Solution Description"
                                  style="height: 140px"
                                  required></textarea>
                        <label for="paragraph">Solution Description</label>
                    </div>

                    <!-- Link -->
                    <div class="form-floating mb-4">
                        <input type="text"
                               class="form-control"
                               id="link"
                               name="link"
                               placeholder="/solutions/enterprise"
                               required>
                        <label for="link">Solution Link</label>
                    </div>

                    <!-- Actions -->
                    <div class="d-flex justify-content-end gap-2">
                        <a href="{{ route('solutions.index') }}"
                           class="btn btn-light rounded-pill px-4">
                            Cancel
                        </a>

                        <button type="submit"
                                class="btn btn-dark rounded-pill px-5">
                            Save Solution
                        </button>
                    </div>

                </div>
            </form>

        </div>
    </div>
</div>
@endsection

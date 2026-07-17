<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>@yield('title')</title>

    <!-- Fonts -->
    <link rel="stylesheet"
          href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700">
<link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">

    <!-- Icons -->
    <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
    <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />
    <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
    <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
<link rel="stylesheet"
      href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css"
      integrity="sha512-DTOQO9RWCH3ppGqcWaEA1BIZOC6xxalwEsw9c2QQeAIftl+Vegovlnee1c9QX4GZ0eXzD5iZ8tF+X0U1Q=="
      crossorigin="anonymous"
      referrerpolicy="no-referrer" />

    <!-- Main CSS -->
    <link href="{{ asset('assets/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />

    @stack('styles')
</head>

<body class="g-sidenav-show bg-gray-200">

<!-- SIDEBAR -->
<aside class="sidenav navbar navbar-vertical navbar-expand-xs border-0 border-radius-xl my-3 fixed-start ms-3 bg-gradient-dark"
       id="sidenav-main">

    <div class="sidenav-header text-center">
        <a href="{{ route('dashboard') }}" class="navbar-brand p-0 d-flex flex-column align-items-center">
            <img src="{{ asset('img/PR.png') }}" alt="Logo" style="max-height:50px;">
            <!-- <small class="text-muted fw-semibold" style="font-size:12px;">BEYOND TOMORROW</small> -->
        </a>
    </div>

    <hr class="horizontal light mt-0 mb-2">

    <div class="collapse navbar-collapse w-auto max-height-vh-100">
        <ul class="navbar-nav">

            <!-- Dashboard -->
            <li class="nav-item">
                <a class="nav-link text-white {{ request()->routeIs('dashboard') ? 'active bg-gradient-primary' : '' }}"
                   href="{{ route('dashboard') }}">
                    <div class="icon icon-shape icon-sm text-center me-2">
                        <i class="material-icons opacity-10">dashboard</i>
                    </div>
                    <span class="nav-link-text">Dashboard</span>
                </a>
            </li>


            <li class="nav-item">
    <a class="nav-link text-white"
       data-bs-toggle="collapse"
       href="#userMenu"
       role="button">
        <div class="icon icon-shape icon-sm text-center me-2">
            <i class="material-icons opacity-10">people</i>
        </div>
        <span class="nav-link-text">Users</span>
    </a>

    <div class="collapse ms-4" id="userMenu">
        <ul class="nav flex-column">
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('users.create') }}">
                    ➕ Add User
                </a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('users.index') }}">
                    📋 Manage Users
                </a>
            </li>
        </ul>
    </div>
</li>

            <!-- Blogs -->
            <li class="nav-item">
                <a class="nav-link text-white"
                   data-bs-toggle="collapse"
                   href="#blogMenu"
                   role="button">
                    <div class="icon icon-shape icon-sm text-center me-2">
                        <i class="material-icons opacity-10">table_view</i>
                    </div>
                    <span class="nav-link-text">Blogs</span>
                </a>

                <div class="collapse ms-4" id="blogMenu">
                    <ul class="nav flex-column">
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('blogs.create') }}">
                                ➕ Add Blog
                            </a>
                        </li>
                        <li class="nav-item">
                            <a class="nav-link text-white" href="{{ route('blogs.index') }}">
                                📋 Manage Blogs
                            </a>
                        </li>
                    </ul>
                </div>
            </li>

            <!-- Solutions -->
<li class="nav-item">
    <a class="nav-link text-white"
       data-bs-toggle="collapse"
       href="#solutionMenu"
       role="button"
       aria-expanded="false"
       aria-controls="solutionMenu">

        <div class="icon icon-shape icon-sm text-center me-2">
            <i class="material-icons opacity-10">widgets</i>
        </div>

        <span class="nav-link-text">Solutions</span>
    </a>

    <div class="collapse ms-4" id="solutionMenu">
        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link text-white"
                   href="{{ route('solutions.create') }}">
                    ➕ Add Solution
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white"
                   href="{{ route('solutions.index') }}">
                    📋 Manage Solutions
                </a>
            </li>

        </ul>
    </div>
</li>


<li class="nav-item">
    <a class="nav-link text-white"
       data-bs-toggle="collapse"
       href="#reviewMenu"
       role="button"
       aria-expanded="false"
       aria-controls="reviewMenu">

        <div class="icon icon-shape icon-sm text-center me-2">
            <i class="material-icons opacity-10">rate_review</i>
        </div>

        <span class="nav-link-text">Reviews</span>
    </a>

    <div class="collapse ms-4" id="reviewMenu">
        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link text-white"
                   href="{{ route('reviews.create') }}">
                    ➕ Add Review
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white"
                   href="{{ route('reviews.index') }}">
                    📋 Manage Reviews
                </a>
            </li>


            
        </ul>
    </div>
</li>
<li class="nav-item">
    <a class="nav-link text-white"
       data-bs-toggle="collapse"
       href="#attractionMenu"
       role="button"
       aria-expanded="false"
       aria-controls="attractionMenu">

        <div class="icon icon-shape icon-sm text-center me-2">
            <i class="material-icons opacity-10">place</i>
        </div>

        <span class="nav-link-text">Attractions</span>
    </a>

    <div class="collapse ms-4" id="attractionMenu">
        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link text-white"
                   href="{{ route('attractions.create') }}">
                    ➕ Add Attraction
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white"
                   href="{{ route('attractions.index') }}">
                    📋 Manage Attractions
                </a>
            </li>

        </ul>
    </div>
</li>

<li class="nav-item">
    <a class="nav-link text-white"
       data-bs-toggle="collapse"
       href="#teamMenu"
       role="button"
       aria-expanded="false"
       aria-controls="teamMenu">

        <div class="icon icon-shape icon-sm text-center me-2">
            <i class="material-icons opacity-10">group</i>
        </div>

        <span class="nav-link-text">Teams</span>
    </a>

    <div class="collapse ms-4" id="teamMenu">
        <ul class="nav flex-column">

            <li class="nav-item">
                <a class="nav-link text-white"
                   href="{{ route('teams.create') }}">
                    ➕ Add Team Member
                </a>
            </li>

            <li class="nav-item">
                <a class="nav-link text-white"
                   href="{{ route('teams.index') }}">
                    📋 Manage Team
                </a>
            </li>

        </ul>
    </div>
</li>

            <!-- Account -->
            <li class="nav-item mt-3">
                <h6 class="ps-4 text-uppercase text-xs text-white opacity-8">Account</h6>
            </li>

           @auth
<li class="nav-item">
    <a class="nav-link text-white" href="#">
        <i class="material-icons opacity-10 me-2">person</i>
        {{ Auth::user()->name }}
    </a>
</li>
@endauth


           @auth
<li class="nav-item">
    <a href="{{ route('logout') }}" 
       class="nav-link text-white d-flex align-items-center"
       onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
        <i class="material-icons opacity-10 me-2">logout</i>
        Logout
    </a>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
    </form>
</li>

@endauth


        </ul>
    </div>
</aside>

<!-- MAIN CONTENT -->
<main class="main-content position-relative max-height-vh-100 h-100 border-radius-lg">
    <div class="container-fluid py-4">
        @yield('content')
    </div>
</main>

<!-- CORE JS -->
<script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/chartjs.min.js') }}"></script>

<script>
    if (navigator.platform.indexOf('Win') > -1 && document.querySelector('#sidenav-scrollbar')) {
        Scrollbar.init(document.querySelector('#sidenav-scrollbar'), { damping: '0.5' });
    }
</script>

<script src="{{ asset('assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>

@stack('scripts')

</body>
</html>

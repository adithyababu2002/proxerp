<style>
/* ===== RESET ===== */
html, body {
    margin: 0;
    padding: 0;
     /* overflow-x: hidden;  */
}

/* ===== TOP BAR ===== */
.top-bar {
    background: #000;
    padding: 8px 0;
}
.top-bar a {
    font-size: 14px;
}

/* ===== NAVBAR ===== */
.navbar {
    padding: 0 !important;
    min-height: 60px;
}

.navbar-brand img {
    max-height: 55px;
}

.navbar-nav .nav-link {
    padding: 0 18px;
    font-weight: 500;
}

/* ===== BUTTONS ===== */
.btn-square {
    width: 38px;
    height: 38px;
    padding: 0;
    display: flex;
    align-items: center;
    justify-content: center;
}

/* ===== MEGA MENU ===== */
.mega-menu {
    background: #eef9f9;
}

.nav-item.position-static .dropdown-menu {
    left: 0;
    right: 0;
}

/* ===== ICON BOX ===== */
.icon-box {
    width: 44px;
    height: 44px;
    background: #ffffff;
    border-radius: 50%;
    display: flex;
    align-items: center;
    justify-content: center;
    color: #00b3a4;
    font-size: 20px;
}

.mega-menu .col-md-4:hover {
    /* background: rgba(0,179,164,.08);
    border-radius: 8px; */
    transition: .3s;
}
@media (max-width: 576px) {

    /* tighten top bar container */
    .top-bar {
        padding: 4px 0;
    }

    .top-bar .d-flex {
        gap: 2px !important;          /* 🔑 remove large vertical gap */
    }

    /* email & phone links */
    .top-bar a {
        display: flex;               /* 🔑 not inline / inline-flex */
        align-items: center;
        justify-content: center;
        font-size: 13px;
        line-height: 1.5;              /* 🔑 kill extra line height */
        padding: 0;
        margin: 0;
        height: auto;
    }

    /* icons */
    .top-bar i {
        font-size: 13px;
        line-height: 1;
        margin-right: 6px;
        display: flex;
        align-items: center;
    }
}


/* ===== MOBILE ===== */
@media (max-width: 991px) {

    .top-bar .d-flex {
        flex-direction: column;
        gap: 2px;
    }

    .navbar-brand {
        align-items: center !important;
    }

    .navbar-brand small {
        display: block;
    }

    .navbar-nav {
        text-align: center;
        padding: 15px 0;
    }

    .navbar-nav .nav-link {
        padding: 10px 0;
    }

    .mega-menu {
        position: static !important;
        width: 100%;
        background: #fff;
        box-shadow: none;
    }

    .mega-menu .row {
        flex-direction: column;
    }

    .mega-menu .col-md-4 {
        width: 100%;
    }

    .navbar-collapse > .d-flex {
        align-items: center !important;
        margin-top: 15px;
    }
}
</style>

<!-- NAVBAR START -->
<div class="nav-bar sticky-top bg-white">

    <!-- TOP BAR -->
    <div class="top-bar">
        <div class="d-flex justify-content-center align-items-center gap-4">
            <a href="mailto:proxerp@hyzventures.com" class="text-white text-decoration-none">
                <i class="fas fa-envelope me-2"></i> proxerp@hyzventures.com
            </a>
            <a href="tel:+919048043336" class="text-white text-decoration-none">
                <i class="fas fa-phone-alt me-2"></i> (+91) 9048043336
            </a>
        </div>
    </div>

    <!-- MAIN NAV -->
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light">

            <!-- LOGO -->
            <a href="{{ route('home') }}" class="navbar-brand p-0 d-flex flex-column align-items-start">
                <img src="{{ asset('img/PR.png') }}" alt="Logo">
            </a>

            <!-- TOGGLER -->
            <button class="navbar-toggler" type="button"
                    data-bs-toggle="collapse"
                    data-bs-target="#navbarCollapse">
                <span class="fa fa-bars"></span>
            </button>

            <!-- MENU -->
            <div class="collapse navbar-collapse gap-2" id="navbarCollapse">

                <div class="navbar-nav mx-auto">

                    <a href="{{ route('home') }}"
                       class="nav-item nav-link {{ request()->routeIs('home') ? 'active' : '' }}">
                        Home
                    </a>

                    <a href="{{ route('about') }}"
                       class="nav-item nav-link {{ request()->routeIs('about') ? 'active' : '' }}">
                        About
                    </a>

                    <a href="{{ route('service') }}"
                       class="nav-item nav-link {{ request()->routeIs('service') ? 'active' : '' }}">
                        Software
                    </a>

                    <a href="{{ route('blog') }}"
                       class="nav-item nav-link {{ request()->routeIs('blog') ? 'active' : '' }}">
                        Blogs
                    </a>

                    <!-- SOLUTIONS MEGA MENU -->
                    <div class="nav-item dropdown position-static">
                        <a href="#" class="nav-link dropdown-toggle"
                           data-bs-toggle="dropdown">
                            Solutions
                        </a>

                        <div class="dropdown-menu mega-menu border-0 shadow w-100 mt-0">
                            <div class="container py-4">
                                <div class="row g-4">

                                    @foreach($solutions as $solution)
                                        <div class="col-md-4 d-flex">
                                            <a href="{{ $solution->link }}"
                                               class="d-flex text-decoration-none text-dark w-100">

                                                <div class="icon-box me-3">
                                                    <i class="bi {{ $solution->icon }}"></i>
                                                </div>

                                                <div>
                                                    <h6 class="fw-bold mb-1">
                                                        {{ $solution->heading }}
                                                    </h6>
                                                    <p class="text-muted mb-0 small">
                                                        {{ \Illuminate\Support\Str::limit($solution->paragraph, 80) }}
                                                    </p>
                                                </div>
                                            </a>
                                        </div>
                                    @endforeach

                                </div>
                            </div>
                        </div>
                    </div>

                    <a href="{{ route('contact') }}"
                       class="nav-item nav-link {{ request()->routeIs('contact') ? 'active' : '' }}">
                        Contact
                    </a>

                </div>
<!-- RIGHT ACTIONS -->
<div class="d-flex align-items-center gap-5 navbar-actions">

    <!-- SOCIAL ICONS -->
    <div class="d-flex gap-2">
        <a class="btn btn-square btn-light rounded-circle" href="https://www.youtube.com/@proxerp">
            <i class="fab fa-youtube"></i>
        </a>
        <a class="btn btn-square btn-light rounded-circle" href="https://www.instagram.com/prox.erp">
            <i class="fab fa-instagram"></i>
        </a>
        <a class="btn btn-square btn-light rounded-circle" href="https://www.facebook.com/proxerp2">
            <i class="fab fa-facebook-f"></i>
        </a>
        <a class="btn btn-square btn-light rounded-circle" href="https://www.linkedin.com/company/prox-erp">
            <i class="fab fa-linkedin-in"></i>
        </a>
    </div>

    <!-- LOGIN BUTTON -->
    <a href="{{ route('login') }}"
       class="btn btn-primary rounded-pill px-4 py-2 login-btn">
        <i class="fas fa-sign-in-alt me-2"></i> Login
    </a>

</div>

<style>/* LOGIN BUTTON STYLE */
/* KEEP RIGHT SIDE INLINE */
.navbar-actions {
    margin-left: auto;
}

/* LOGIN BUTTON */
.login-btn {
    font-weight: 600;
    white-space: nowrap;
}

/* MOBILE BEHAVIOR */
@media (max-width: 991px) {
    .navbar-actions {
        flex-direction: column;
        width: 100%;
        margin-top: 15px;
    }

    .login-btn {
        width: 100%;
        text-align: center;
        margin-bottom: 15px;
    }
}
/* ===== TABLET VIEW FIX (iPad & Tablets) ===== */


</style>


            </div>
        </nav>
    </div>
</div>
<!-- NAVBAR END -->

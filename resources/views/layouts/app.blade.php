<!DOCTYPE html>
<html lang="en">

<head>
    @include('source.header_links')
</head>

<body>

    <!-- Spinner Start -->
    <div id="spinner"
        class="show bg-white position-fixed translate-middle w-100 vh-100 top-50 start-50 d-flex align-items-center justify-content-center">
        <div class="spinner-border text-primary" style="width: 3rem; height: 3rem;" role="status">
            <span class="sr-only">Loading...</span>
        </div>
    </div>
    <!-- Spinner End -->

    @include('source.navbar')
    <!-- Navbar & Hero End -->

    
    @yield('content')
    @include('source.footer')
    <!-- Footer End -->

    <!-- Copyright Start -->
    @include('source.copyright')
    <!-- Copyright End -->


    <!-- Back to Top -->
    @include('source.footer_links')
</body>

</html>
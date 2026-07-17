
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('assets/img/apple-icon.png') }}">
  <link rel="icon" type="image/png" href="{{ asset('assets/img/favicon.png') }}">

  <title>Registration Page</title>

  <!-- Fonts -->
  <link rel="stylesheet"
        href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />

  <!-- Nucleo Icons -->
  <link href="{{ asset('assets/css/nucleo-icons.css') }}" rel="stylesheet" />
  <link href="{{ asset('assets/css/nucleo-svg.css') }}" rel="stylesheet" />

  <!-- Font Awesome -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>

  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">

  <!-- Main CSS -->
  <link id="pagestyle" href="{{ asset('assets/css/material-dashboard.css?v=3.0.0') }}" rel="stylesheet" />
</head>


<body class="">
  
         
  <main class="main-content  mt-0">
    <section>
      <div class="page-header min-vh-100">
        <div class="container">
          <div class="row">
            <div class="col-6 d-lg-flex d-none h-100 my-auto pe-0 position-absolute top-0 start-0 text-center justify-content-center flex-column">
              <div class="position-relative h-100 m-3 px-7 border-radius-lg d-flex flex-column justify-content-center" style="background-image: url('{{ asset('img/SOFTWARE THAT LEARNS HOW YOU WORK.png') }}'); background-size: cover;">
</div>

            </div>
            <div class="col-xl-4 col-lg-5 col-md-7 d-flex flex-column ms-auto me-auto ms-lg-auto me-lg-5">
              <div class="card card-plain">
                <div class="card-header">
                  <h4 class="font-weight-bolder">Sign Up</h4>
                  <p class="mb-0">Enter your email and password to register</p>
                </div>
                <div class="card-body">
                  <form method="post" action="{{ route('register.store') }}" autocomplete="off">
                    @csrf
                    <div class=" mb-3">
                        <div class="input-group input-group-outline">
                      <label class="form-label">Name</label>
                      <input type="text" name="name" class="form-control">



         
                    </div>
                      @error('name')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                    </div>
                    <div class=" mb-3">
                        <div class="input-group input-group-outline">
                      <label class="form-label">Email</label>
                      <input type="email" name="email" class="form-control">
                      
                    </div>
                    @error('email')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                      </div>
                    <div class="mb-3">
                        <div class="input-group input-group-outline">
                      <label class="form-label">Password</label>
                      <input type="password" name="password" class="form-control">
                      
                    </div>
                    @error('password')
                      <small class="text-danger">{{ $message }}</small>
                      @enderror
                      </div>
                    <!-- <div class="form-check form-check-info text-start ps-0"> -->
                      <!-- <input class="form-check-input" type="checkbox" value="" id="flexCheckDefault" checked> -->
                      <!-- <label class="form-check-label" for="flexCheckDefault">
                        I agree the <a href="javascript:;" class="text-dark font-weight-bolder">Terms and Conditions</a>
                      </label> -->
                    <!-- </div> -->
                    <div class="text-center">
                      <button type="submit" class="btn btn-lg btn-info btn-lg w-100 mt-4 mb-0">Sign Up</button>
                    </div>
                  </form>
                </div>
                <div class="card-footer text-center pt-0 px-lg-2 px-1">
                  <p class="mb-2 text-sm mx-auto">
                    Already have an account?
                    <a href="{{ route('login') }}" class="text-primary text-info font-weight-bold">Sign in</a>
                  </p>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    @if(session('success'))
<div class="modal fade" id="successModal" tabindex="-1">
    <div class="modal-dialog modal-dialog-centered">
        <div class="modal-content">

            <div class="modal-header">
                <h5 class="modal-title text-success">Success</h5>
                <button type="button" class="btn-close" data-bs-dismiss="modal"></button>
            </div>

            <div class="modal-body text-center">
                <i class="material-icons text-success" style="font-size:48px;">check_circle</i>
                <p class="mt-3">{{ session('success') }}</p>
            </div>

            <div class="modal-footer justify-content-center">
                <button type="button" class="btn btn-info" data-bs-dismiss="modal">
                    OK
                </button>
            </div>

        </div>
    </div>
</div>
@endif

  </main>
  <!--   Core JS Files   -->
 <script src="{{ asset('assets/js/core/popper.min.js') }}"></script>
<script src="{{ asset('assets/js/core/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/perfect-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/plugins/smooth-scrollbar.min.js') }}"></script>
<script src="{{ asset('assets/js/material-dashboard.min.js?v=3.0.0') }}"></script>

  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <!-- Github buttons -->
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <!-- Control Center for Material Dashboard: parallax effects, scripts for the example pages etc -->
  
@if(session('success'))
<script>
document.addEventListener("DOMContentLoaded", function () {
    var modal = new bootstrap.Modal(document.getElementById('successModal'));
    modal.show();

    document.getElementById('successModal')
        .addEventListener('hidden.bs.modal', function () {
            window.location.href = "{{ route('login') }}";
        });
});
</script>
@endif


</body>

</html>
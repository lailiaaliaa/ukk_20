<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <link rel="apple-touch-icon" sizes="76x76" href="{{ asset('halo/assets/img/apple-icon.png')}}">
  <link rel="icon" type="image/png" href="{{ asset('halo/assets/img/favicon.png')}}">
  <title>
   Login
  </title>
  <!--     Fonts and icons     -->
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <!-- Nucleo Icons -->
  <link href="{{ asset('halo/assets/css/nucleo-icons.css')}}" rel="stylesheet" />
  <link href="{{ asset('halo/assets/css/nucleo-svg.css')}}" rel="stylesheet" />
  <!-- Font Awesome Icons -->
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <!-- Material Icons -->
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <!-- CSS Files -->
  <link id="pagestyle" href="{{ asset('halo/assets/css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />
</head>

<body class="bg-gray-200">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
      </div>
    </div>
  </div>
  <main class="main-content  mt-0">
    <div class="page-header align-items-start min-vh-100" style="background-image: url('https://poltekapp.ac.id/wp-content/uploads/2022/05/whisstle2-1024x397.jpg');">
      <span class="mask bg-gradient-dark opacity-6"></span>
      <div class="container my-auto">
        <div class="row">
          <div class="col-lg-4 col-md-8 col-12 mx-auto">
            <div class="card z-index-0 fadeIn3 fadeInBottom">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg py-3 pe-1">
                  <h4 class="text-white font-weight-bolder text-center mt-2 mb-0">Masuk</h4>
                </div>
              </div>
              <div class="card-body">
                <form action="/loginproses" method="post" enctype="multipart/form-data">
                    @csrf
                  <div class="input-group input-group-outline my-3">
                    <label class="form-label">Email</label>
                    <input type="email" name="email" class="form-control">
                   </div>
                  <div class="input-group input-group-outline mb-3">
                    <label class="form-label">Password</label>
                    <input type="password" name="password"  class="form-control">
                  </div>
                  <div class="text-center input-group">
                    <button type="submit" class="btn bg-gradient-primary w-100 my-4 mb-2">Masuk</button>
                  </div>
                </form>
                  <p class="mt-4 text-sm text-center">
                    Belum punya akun?
                    <a href="/masyarakat" class="text-primary text-gradient font-weight-bold">Daftar</a>
                  </p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </main>
  <script src="{{ asset('halo/assets/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('halo/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('halo/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('halo/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>
  <script>
    var win = navigator.platform.indexOf('Win') > -1;
    if (win && document.querySelector('#sidenav-scrollbar')) {
      var options = {
        damping: '0.5'
      }
      Scrollbar.init(document.querySelector('#sidenav-scrollbar'), options);
    }
  </script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="{{ asset('halo/assets/js/material-dashboard.min.js?v=3.0.0')}}"></script>
</body>

</html>

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <title>
    Masyarakat
  </title>
  <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:300,400,500,700,900|Roboto+Slab:400,700" />
  <script src="https://kit.fontawesome.com/42d5adcbca.js" crossorigin="anonymous"></script>
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons+Round" rel="stylesheet">
  <link id="pagestyle" href="{{ asset('halo/assets/css/material-dashboard.css?v=3.0.0')}}" rel="stylesheet" />

<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
<link href="https://cdnjs.cloudflare.com/ajax/libs/twitter-bootstrap/4.0.0-
     alpha/css/bootstrap.css" rel="stylesheet">
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/toastr.min.css">
<script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/latest/js/toastr.min.js"></script>
@stack('css')
</head>
<body class="">
  <div class="container position-sticky z-index-sticky top-0">
    <div class="row">
      <div class="col-12">
        <nav class="navbar navbar-expand-lg blur border-radius-lg top-0 z-index-3 shadow position-absolute mt-4 py-2 start-0 end-0 mx-4">
          <div class="container-fluid ps-2 pe-0">
            <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="">
                <i class="fa fa-user opacity-6 text-dark me-1"></i>
                {{ Auth::user()->name }}
            </a>
            {{-- <a class="navbar-brand font-weight-bolder ms-lg-0 ms-3 " href="/changePassword">
                <i class="fa fa-key opacity-6 text-dark me-1"></i>
                Ubah Kata Sandi
            </a> --}}
            <button class="navbar-toggler shadow-none ms-2" type="button" data-bs-toggle="collapse" data-bs-target="#navigation" aria-controls="navigation" aria-expanded="false" aria-label="Toggle navigation">
              <span class="navbar-toggler-icon mt-2">
                <span class="navbar-toggler-bar bar1"></span>
                <span class="navbar-toggler-bar bar2"></span>
                <span class="navbar-toggler-bar bar3"></span>
              </span>
            </button>
            <div class="collapse navbar-collapse" id="navigation">
              <ul class="navbar-nav mx-auto">
                <li class="nav-item">
                    <li class="nav-item">
                        <a class="nav-link me-2" href="/indexmasyarakat">
                          <i class="fas fa-globe opacity-6 text-dark me-1"></i>
                          Beranda
                        </a>
                      </li>
                    <li class="nav-item">
                    <a class="nav-link me-2" href="/pengaduan">
                      <i class="fab fa-telegram-plane opacity-6 text-dark me-1"></i>
                      Pengaduan
                    </a>
                  </li>
                  <li class="nav-item">
                  <a class="nav-link me-2" href="/daftar_pengaduan">
                    <i class="fas fa-envelope opacity-6 text-dark me-1"></i>
                    Daftar Pengaduan
                  </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="/daftar_tanggapan">
                      <i class="fas fa-comment-dots opacity-6 text-dark me-1"></i>
                    Tanggapan Pengaduan
                    </a>
                  </li>
                <li class="nav-item">
                    <a class="nav-link me-2" href="/logout">
                      <i class="fas fa-sign-out-alt opacity-6 text-dark me-1"></i>
                      Keluar
                    </a>
                  </li>


              </ul>
            </div>
          </div>
        </nav>
      </div>
    </div>
    @yield('content')
  </div>
  @stack('scripts')

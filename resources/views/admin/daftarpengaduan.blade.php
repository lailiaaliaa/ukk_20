@extends('layout.a')
@section('content')
@push('css')

<head>
  </head>
  <br><br><br><br><br>
  <body>
        <div class="row">
          <div class="col-12">
            <div class="card my-4">
              <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
                <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                  <h6 class="text-white text-capitalize ps-3">Daftar Pengaduan</h6>
                </div>
              </div>
              <div class="card-body px-0 pb-2">
                <div class="table-responsive p-0">
                  <table class="table align-items-center justify-content-center mb-0">
                    <thead>
                      <tr>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7">Id</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Tanggal</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Nik</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">No Telepon</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Laporan</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Foto</th>
                        <th class="text-uppercase text-secondary text-xxs font-weight-bolder opacity-7 ps-2">Status</th>
                        <th></th>
                      </tr>
                    </thead>
                    <tbody>
                      @php
                      $no = 1;
                      @endphp
                      @foreach ($data as $row)
                      <tr>
                          <th scope="row">{{ $no++ }}</th>
                          <td>{{ $row->tanggal }}</td>
                          <td>{{ $row->nik}}</td>
                          <td>{{ $row->telp }}</td>
                          <td>{{ $row->isi_laporan }}</td>
                          <td>
                          <img alt="" src="foto/{{$row->foto }}" style="width:100px;height:100px; ">
                          <td>
                            <a href="{{ url('pengaduan1/terima/'.$row->id) }}" type="button" class="btn btn-sm btn-primary">Setujui</a>

                            <a href="{{ url('pengaduan1/tolak/'.$row->id) }}" type="button" class="btn btn-sm btn-danger">Tolak</a>
                        </td>

                      </tr>
                      @endforeach
                    </tbody>
                  </table>
                </div>
              </div>
            </div>
          </div>

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
  @endsection
  @push('scripts')

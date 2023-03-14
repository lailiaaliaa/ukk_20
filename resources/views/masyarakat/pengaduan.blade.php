@extends('layout.m')
@section('content')
@push('css')

<!DOCTYPE html>
<html lang="en">

<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/flatpickr/dist/flatpickr.min.css">
<script src="https://cdn.jsdelivr.net/npm/flatpickr"></script>

<head>
</head>
<br><br><br><br><br>
<body>
      <div class="row">
        <div class="col-12">
          <div class="card my-4">
            <div class="card-header p-0 position-relative mt-n4 mx-3 z-index-2">
              <div class="bg-gradient-primary shadow-primary border-radius-lg pt-4 pb-3">
                <h6 class="text-white text-capitalize ps-3">Form Pengaduan</h6>
              </div>
            </div>

            <div class="container-fluid">
            <div class="card-body px-0 pb-2">
              <div class="table-responsive p-0">
                <table class="table align-items-center justify-content-center mb-0">
                    <form action="/insert_pengaduan" method="POST" enctype="multipart/form-data">
                        <br>
                        @csrf
                    <div class="form-group">
                        <label for="exampleInputPassword1" class="form-label">Tanggal</label>
                        <div class="col-LG-13">
                            <input type="date" name="tanggal" id="tanggal" class="form-control"
                                id="inputEmail3">
                        </div>
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">Nik</label>
                        <input type="number"  name="nik" class="form-control" id="exampleInputName1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label for="exampleInputName1">No Telepon</label>
                        <input type="number"  name="telp" class="form-control" id="exampleInputName1" placeholder="">
                    </div>
                    <div class="form-group">
                        <label>Laporan</label>
                        <textarea style="resize:none;width:600px;height:100px;" name="isi_laporan" class="form-control" placeholder="Masukkan konten">
                        </textarea>
                    </div>
                    <div class="mb-3">
                    <label for="exampleInputEmail1" class="form-label">Foto</label>
                <input type="file" name="foto" class="form-control">
               </div>
                    <br>
                      <button type="submit" class="btn btn-outline-danger">submit</button>
                </table>
              </div>
            </div>
          </div>
</div>
</div>

  <script src="{{ asset('halo/assets/js/core/popper.min.js')}}"></script>
  <script src="{{ asset('halo/assets/js/core/bootstrap.min.js')}}"></script>
  <script src="{{ asset('halo/assets/js/plugins/perfect-scrollbar.min.js')}}"></script>
  <script src="{{ asset('halo/assets/js/plugins/smooth-scrollbar.min.js')}}"></script>

  <script>
    config={
    minDate:"today",
}
flatpickr("input[type=date]",config);
</script>
  <script async defer src="https://buttons.github.io/buttons.js"></script>
  <script src="{{ asset('halo/assets/js/material-dashboard.min.js?v=3.0.0')}}"></script>
</body>
</html>

@endsection
@push('scripts')






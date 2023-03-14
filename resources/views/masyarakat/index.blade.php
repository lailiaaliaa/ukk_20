@extends('layout.m')
@section('content')
@push('css')
<body>

    <div class="page-header align-items-start min-vh-70 mt-6" style="background-image: url('https://poltekapp.ac.id/wp-content/uploads/2022/05/whisstle2-1024x397.jpg');">
    <div class="content-wrapper">
        <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-3">
                    <div class="col-sm-6">

                    </div>
                </div>
            </div>
<br><br><br><br>
            {{-- <h2 class="text-center text-primary">Layanan Pengaduan Masyarakat</h2><br> --}}
            <div class="row mt-3">
            </div>
            <div class="container">
                <div class="row mt-3">
                    <div class="row">
<h1> Apaitu Pengaduan<br> Masyarakat?
    <br>
    <p>Pengaduan Masyarakat adalah pengawasan yang dilakukan oleh masyarakat yang disampaikan secara lisan atau tertulis kepada Pejabat Arsip Nasional Republik Indonesia (ANRI) yang berkepentingan, berupa sumbangan pikiran, saran, gagasan, keluhan, atau pengaduan yang bersifat membangun yang disampaikan baik secara langsung maupun melalui media.</p>

        <h1>Persyaratan Pengaduan Masyarakat</h1>
       <b>Warga Negara Indonesia (WNI)<br>
        Mengisi formulir pengaduan masyarakat<br>
        Melampirkan identitas diri yang masih berlaku<br>
        Dapat menjelaskan siapa, apa, bilamana, dimana dan bagaimana kejadian yang dilaporkan (kronologis aduan)<br>
        Melampirkan bukti awal aduan, seperti: fotokopi dokumen, foto atau barang lain yang dapat memperkuat uraian aduan yang disampaikan.<br>
       </b>
                    </div>
                </div>
            </div>
        </div>
    </div>
    </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0-beta1/dist/js/bootstrap.bundle.min.js" integrity="sha384-pprn3073KE6tl6bjs2QrFaJGz5/SUsLqktiwsUTF55Jfv3qYSDhgCecCxMW52nD2" crossorigin="anonymous">
        </script>
        <script src="https://code.jquery.com/jquery-3.6.0.slim.js" integrity="sha256-HwWONEZrpuoh951cQD1ov2HUK5zA5DwJ1DNUXaM6FsY=" crossorigin="anonymous"></script>
        <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>



<script>
    $(document).ready(function() {
        $('#gas').DataTable({
            language: {
                url: "{{asset('skydas/js/bahasa.json')}}"
            }
        });
    });
</script>
<script>
    // var button = document.getElementById('id');
    $('.delete').click(function() {
        var databarangid = $(this).attr('data-id');
        var nama = $(this).attr('data-nama');

        swal({
                title: "Yakin?",
                text: "Apa kamu ingin menghapus data ini? " + nama + " ",
                icon: "warning",
                buttons: true,
                dangerMode: true,
            })
            .then((willDelete) => {
                if (willDelete) {
                    window.location = "/deletedatabarang/" + databarangid + ""
                    swal("Data berhasil dihapus", {
                        icon: "success",
                    });
                } else {
                    swal("Data tidak jadi dihapus");
                }
            });
    });
</script>

<script>
    @if(Session::has('message'))
    toastr.options = {
        "closeButton": true,
        "progressBar": true
    }
    toastr.success("{{ session('message') }}");
    @endif
</script>
</div>
</body>

@endsection
@push('scripts')






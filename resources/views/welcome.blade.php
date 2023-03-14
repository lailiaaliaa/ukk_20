{{-- <!DOCTYPE html>
<html>

<head>
    <style>
        #customers {
            font-family: Arial, Helvetica, sans-serif;
            border-collapse: collapse;
            width: 100%;
        }

        #customers td,
        #customers th {
            border: 1px solid #ddd;
            padding: 8px;
        }

        #customers tr:nth-child(even) {
            background-color: #f2f2f2;
        }

        #customers tr:hover {
            background-color: #ddd;
        }

        #customers th {
            padding-top: 12px;
            padding-bottom: 12px;
            text-align: left;
            background-color: #04AA6D;
            color: white;
        }
    </style>
</head>

<body>

    <h1>Laporan Pengaduan</h1>

    <table id="customers">
        <tr>
            <th scope="col">Id</th>
            <th scope="col">Tanggal</th>
            <th scope="col">Nik</th>
            <th scope="col">No Telepon</th>
            <th scope="col">Laporan</th>
            <th scope="col">Foto</th>
          </tr>
          @php
          $no = 1;
      @endphp
      @foreach ($data as $data)
      <th>{{ $no++ }}</th>
      <td>{{ $data->tanggal }}</td>
      <td>{{ $data->nik}}</td>
      <td>{{ $data->telp }}</td>
      <td>{{ $data->isi_laporan }}</td>
      <td>
      <img alt="" src="foto/{{$data->foto }}" style="width:100px;height:100px; ">

      @endforeach
      </table>

</body>

</html> --}}

<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/css/bootstrap.min.css" integrity="sha384-MCw98/SFnGE8fJT3GXwEOngsV7Zt27NXFoaoApmYm81iuXoPkFOJwJ8ERdknLPMO" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row">
            <h1 style="text-center text-primary">Laporan Pengaduan </h1>
            <table class="table table-striped mt-5">
                <thead>
                  <tr>
                    <th scope="col">Id</th>
                    <th scope="col">Tanggal</th>
                    <th scope="col">Nik</th>
                    <th scope="col">No Telepon</th>
                    <th scope="col">Laporan</th>
                    <th scope="col">Foto</th>
                  </tr>
                </thead>
                <tbody>
                    @php
                        $no = 1;
                    @endphp
                    @foreach ($data as $data)
                    <th>{{ $no++ }}</th>
                    <td>{{ $data->tanggal }}</td>
                    <td>{{ $data->nik}}</td>
                    <td>{{ $data->telp }}</td>
                    <td>{{ $data->isi_laporan }}</td>
                    <td>
                    <img alt="" src="foto/{{$data->foto }}" style="width:100px;height:100px; ">

                    @endforeach
                </tbody>
              </table>
        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.3/js/bootstrap.min.js" integrity="sha384-ChfqqxuZUCnJSK3+MXmPNIyE6ZbWh2IMqE241rYiqJxyMiZ6OW/JmZQ5stwEULTy" crossorigin="anonymous"></script>
  </body>
</html>

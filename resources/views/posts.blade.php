<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Posts</title>
</head>
<body>

    @extends('layouts.main')

    @section('container')
    <h1>Halaman Post Yuliana</h1><hr>
    <div class="content-wrapper">

        <div class="content-header">
          <div class="container-fluid">
            <div class="row">
              <div class="col">
                <h2 class="m-0">Data Gambar</h2>
              </div>
            </div>
          </div>
        </div>

        <!-- Main content -->
        <div class="content">
            <div class="container-fluid">
              <div class="row">
                <div class="col">
                  <div class="card card-primary card-outline">
                    <div class="card-header">
                        <h3>Table Gambar</h3>
                      <a href="/create-gambar" class="btn float-left btn btn btn-primary" >Tambah Gambar <i class="fas fa-plus-square"></i></a>
                    </div>
                    <div class="card-body">
              <table class="table table-bordered">
                <tr>
                    <th>No</th>

                    <th>Nama Gambar</th>
                    <th>Gambar</th>

                    <th>Aksi</th>
                </tr>
                @foreach ($dataGambar as $item)


                <tr>
                    <td>{{ $loop->iteration }}</td>

                    <td>{{ $item->nama }}</td>
                    <td>
                        {{--  <a href="{{ asset('img/'. $item->gambar) }}" target="_black" rel="nooper noreferrer">Lihat Gambar</a>  --}}
                        <img src="{{ asset('img/'. $item->gambar) }}" height="100px" width="100px" alt="" srcset="">
                    </td>
                    <td>
                        <a href="{{ url('edit-gambar', $item->id) }}">Edit</a> | <a href="{{ url('delete-gambar', $item->id) }}" style="color: red" >Delete </a>
                    </td>

                </tr>
                @endforeach

              </table>
            </div>
        </div>
      </div>
    </div>
    </div>
    </div>
    </div>
    @endsection
</body>
</html>

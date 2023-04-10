<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta http-equiv="X-UA-Compatible" content="ie=edge">
        <title>Posts</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-rbsA2VBKQhggwzxH7pPCaAqO46MgnOM80zW1RWuH61DGLwZJEdK2Kadq2F9CUG65" crossorigin="anonymous">

    </head>
    <body>
    <nav class="navbar navbar-expand-lg bg-light">
        <div class="container-fluid">
            <a class="navbar-brand" href="#">Yuliana</a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNavAltMarkup" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
                <div class="navbar-nav">
                    <a class="nav-link active" href="{{ route('home') }}">Home</a>
                    <a class="nav-link" href="{{ route('about') }}">About</a>
                    <a class="nav-link" href="{{ route('posts') }}">Posts</a>
                    <a class="nav-link" href="{{ route('mahasiswa') }}">Data</a>
                </div>
            </div>
            <div class="text-end d-flex align-items-center">
                <div class="user me-3">
                    {{-- Halo, {{ Auth::user()->nama }} --}}
                </div>
                <div class="logout">
                    <a href="{{ route('login.logout') }}" class="btn btn-danger">Logout</a>
                </div>
            </div>
        </div>
    </nav>

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

</body>
</html>

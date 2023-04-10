<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>About</title>
</head>
<body>

    @extends('layouts.main')

    @section('container')
    <h1>Halaman About Yuliana</h1>
    <img width="400" height="400" src="../public/img/yuli.jpeg" alt="">
    <img width="400" height="400" src="../public/img/ana.jpeg" alt="">
    <h2>Ini merupakan halaman about</h2>
    <h3>Nama  = <?= $name ?></h3>
    <h3>Email = <?= $email ?></h3>
    @endsection
    {{-- <a class="nav-link active" href="{{ route('home') }}">Home</a>
    <a class="nav-link" href="{{ route('about') }}">About</a>
    <a class="nav-link" href="{{ route('posts') }}">Posts</a> --}}

</body>
</html>

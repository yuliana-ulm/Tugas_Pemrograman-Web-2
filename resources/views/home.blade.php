<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Home</title>
    <style>
    .dosen{
        background: #ffffff;
        display: flex;
        flex-wrap: wrap;
        gap: 1.5rem;
        padding-top: 5rem;
        padding-bottom: 5rem;
    }

    .dosen .foto{
        background: #fff;
        border: .1rem solid rgba(0,0,0,.1);
        padding: 2rem 2rem;
        display: flex;
        align-items: center;
        flex: 1 1 25rem;
    }

    .dosen .foto img{
        height: 5rem;
        margin-right: 2rem;
    }

    .dosen .foto h3{
        color: #333;
        padding-bottom: .5rem;
        font-size: 1.5rem;
    }

    .dosen .foto span{
        color: #555;
        font-size: 1.3rem;
    }
    </style>
</head>
<body>

    @extends('layouts.main')
    @section('container')
    <div class="header"><hr>
        <h1 class="heading"><center><span>Dosen dan Staff Program Studi Pendidikan Komputer</span></center></h1><hr>
    </div>
    <section class="dosen" id="dosen">
        <div class="foto">
            <img src="../public/img/1.png" alt="">
            <div class="info">
                <h3>Koordinator Prodi</h3>
                <span>Dr. Harja Santana Purba, M.Kom.</span><br><br>
                <button>Profile</button><button>Google Scholar</button>
            </div>
        </div>
        <div class="foto">
            <img src="../public/img/2.png" alt="">
            <div class="info">
                <h3>Sekretaris Prodi</h3>
                <span>Dr. R. Ati Sukmawati, M.Kom.</span><br><br>
                <button>Profile</button><button>Google Scholar</button>
            </div>
        </div>
        <div class="foto">
            <img src="../public/img/3.png" alt="">
            <div class="info">
                <h3>Pengelola Keuangan</h3>
                <span>Mitra Pramita, M.Pd.</span><br><br>
                <button>Profile</button><button>Google Scholar</button>
            </div>
        </div>
        <div class="foto">
            <img src="../public/img/4.png" alt="">
            <div class="info">
                <h3>Dosen</h3>
                <span>Dr. Andi Ichsan Mahardika, M.Pd.</span><br><br>
                <button>Profile</button><button>Google Scholar</button>
            </div>
        </div>
        <div class="foto">
            <img src="../public/img/5.png" alt="">
            <div class="info">
                <h3>Dosen</h3>
                <span>Delsika Pramata Sari, M.Pd.</span><br><br>
                <button>Profile</button><button>Google Scholar</button>
            </div>
        </div>
        <div class="foto">
            <img src="../public/img/6.png" alt="">
            <div class="info">
                <h3>Dosen</h3>
                <span>Nuruddin Wiranda, S.Kom., M.Cs.</span><br><br>
                <button>Profile</button><button>Google Scholar</button>
            </div>
        </div>
        <div class="foto">
            <img src="../public/img/7.png" alt="">
            <div class="info">
                <h3>Dosen</h3>
                <span>Muhammad Hifdzi Adini, S.Kom., M.T.</span><br><br>
                <button>Profile</button><button>Google Scholar</button>
            </div>
        </div>
        <div class="foto">
            <img src="../public/img/8.png" alt="">
            <div class="info">
                <h3>Dosen</h3>
                <span>Novan Alkaf Bahraini Saputra, S.Kom., M.T.</span><br><br>
                <button>Profile</button><button>Google Scholar</button>
            </div>
        </div>
        <div class="foto">
            <img src="../public/img/9.png" alt="">
            <div class="info">
                <h3>Dosen</h3>
                <span>Rizky Pamuji, S.Kom., M.Kom.</span><br><br>
                <button>Profile</button><button>Google Scholar</button>
            </div>
        </div>
        <div class="foto">
            <img src="../public/img/10.png" alt="">
            <div class="info">
                <h3>Admin Prodi</h3>
                <span>Muhammad Nabili, S.Pd.</span>
            </div>
        </div>
        {{-- <h1>Daftar Buku</h1>
    <table border="1 px solid">
        <thread>
            <tr border="1 px solid">
                <td>Buku 1</td>
                <td>Buku 1</td>
            </tr>
            <tr>
                <td>Buku 1</td>
            </tr>
        </thread>
    </table> --}}
    @endsection

</body>
</html>

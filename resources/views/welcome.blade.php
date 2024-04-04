@extends('layouts.template')

@section('content')

<style>
    /* Custom CSS untuk latar belakang biru dongker */
    .custom-background {
        background-color: #1a1a2e; /* Warna biru dongker */
        color: #fff; /* Warna teks putih untuk kontras */
        padding: 20px; /* Padding untuk memberikan ruang antara elemen */
        border-radius: 10px; /* Border radius untuk membuat sudut elemen menjadi sedikit melengkung */
    }

    /* Style untuk judul utama */
    .main-title {
        font-size: 24px;
        font-weight: bold;
        text-align: center;
        margin-bottom: 20px;
        color: #ff9500; /* Warna kuning untuk judul */
    }

    /* Style untuk teks penjelasan */
    .description {
        font-size: 18px;
        text-align: center;
        color: #8bbe00; /* Warna hijau matcha untuk deskripsi */
    }

    /* Style untuk informasi penulis */
    .author-info {
        text-align: center;
        margin-top: 20px;
    }
</style>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card custom-background"> <!-- Menambahkan kelas custom-background untuk latar belakang -->
                <div class="card-body">
                    <h3 class="main-title">Selamat Datang di Website Percobaan AdminLTE</h3>
                    <p class="description">Mohon maaf jika masih ada banyak kekurangan :)</p>
                    <div class="author-info">
                        <p>Dibuat oleh: Lintang Aprillya Sari</p>
                        <p>NIM: 2241720231</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

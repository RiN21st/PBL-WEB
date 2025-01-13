<!-- resources/views/pencarian.blade.php -->

@extends('layouts.app') <!-- Pastikan Anda memiliki layout utama -->

@section('content')
<!-- Navbar -->
<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container-fluid">
        <!-- Histori Toko -->
        <a class="navbar-brand" href="{{ route('histori-toko') }}">Histori Toko</a>

        <!-- Toggle Button untuk Responsif -->
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Navbar Items -->
        <div class="collapse navbar-collapse" id="navbarNav">
            <ul class="navbar-nav ms-auto">
                <!-- Akun -->
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('profile.edit') }}">Akun</a>
                </li>
                <!-- Tombol Logout -->
                <li class="nav-item">
                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-link nav-link">Logout</button>
                    </form>
                </li>
            </ul>
            </div>
    </div>
</nav>

<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-6 text-center">
            <h2 class="mt-4 mb-4">Pencarian Produk</h2>
        </div>
    </div>
    
    <!-- Form Pencarian -->
    <<div class="container mt-5">
        <h1 class="mb-4">Pencarian Produk</h1>
        <form method="GET" action="{{ route('cari-produk') }}">
            @csrf
            <div class="input-group mb-3">
                <input type="text" name="nama_produk" placeholder="Cari produk" class="form-control">
                <button type="submit" class="btn btn-primary">Cari</button>
            </div>
        </form>
        @if(isset($hasilPencarian) && count($hasilPencarian) > 0)
            <h2 class="mt-4 mb-4">Hasil Pencarian</h2>
            <div class="row">
                @foreach($hasilPencarian as $item)
                    <div class="col-md-4 mb-4">
                        <div class="card h-100">
                            <div class="card-body">
                                <h5 class="card-title">{{ $item->nama_produk }}</h5>
                                <p class="card-text"><strong>Toko:</strong> {{ $item->nama_toko }}</p>
                                <p class="card-text"><strong>Deskripsi:</strong> {{ $item->Deskripsi_Toko }}</p>
                                <p class="card-text"><strong>Alamat:</strong> {{ $item->Alamat_Toko }}</p>
                                <p class="card-text">
                                    <strong>Link Gmaps:</strong> 
                                    <a href="{{ $item->Link_Gmaps_Toko }}" target="_blank">{{ $item->Link_Gmaps_Toko }}</a>
                                </p>
                            </div>
                        </div>
                    </div>
                @endforeach
            </div>
        @elseif(request()->has('nama_produk_cari'))
            <div class="alert alert-warning mt-4" role="alert">
                Tidak ada hasil yang ditemukan untuk "{{ request('nama_produk_cari') }}".
            </div>
        @endif
    </div>
@endsection
@extends('layouts.app')

@section('title', 'Dashboard')

@section('content')

<div class="container">

    <h1 class="mb-4">
        Dashboard Perpustakaan
    </h1>

    <!-- Statistik Buku -->
    <div class="row mb-4">

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Total Buku</h5>
                    <h2>{{ $totalBuku }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Buku Tersedia</h5>
                    <h2>{{ $bukuTersedia }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Buku Habis</h5>
                    <h2>{{ $bukuHabis }}</h2>
                </div>
            </div>
        </div>

    </div>

    <!-- Statistik Anggota -->
    <div class="row mb-4">

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Total Anggota</h5>
                    <h2>{{ $totalAnggota }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Anggota Aktif</h5>
                    <h2>{{ $anggotaAktif }}</h2>
                </div>
            </div>
        </div>

        <div class="col-md-4">
            <div class="card text-center">
                <div class="card-body">
                    <h5>Anggota Nonaktif</h5>
                    <h2>{{ $anggotaNonaktif }}</h2>
                </div>
            </div>
        </div>

    </div>

    <!-- Quick Links -->
    <div class="mb-4">

        <h3>Menu Cepat</h3>

        <a href="{{ url('/buku') }}" class="btn btn-primary">
            Kelola Buku
        </a>

        <a href="{{ url('/anggota') }}" class="btn btn-success">
            Kelola Anggota
        </a>

    </div>

    <div class="row">

        <!-- Buku Terbaru -->
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    5 Buku Terbaru
                </div>

                <div class="card-body">
                    <ul>
                        @foreach($bukuTerbaru as $buku)
                            <li>
                                {{ $buku->judul }}
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>

        </div>

        <!-- Anggota Terbaru -->
        <div class="col-md-6">

            <div class="card">
                <div class="card-header">
                    5 Anggota Terbaru
                </div>

                <div class="card-body">
                    <ul>
                        @foreach($anggotaTerbaru as $anggota)
                            <li>
                                {{ $anggota->nama }}
                            </li>
                        @endforeach
                    </ul>
                </div>

            </div>

        </div>

    </div>

</div>

@endsection
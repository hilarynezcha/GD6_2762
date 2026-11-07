@extends('layouts.main')

@section('title', 'Beranda')

@section('content')
<div class="p-5 mb-4 bg-light rounded-3">
    <div class="container-fluid py-5">
        <h1 class="display-5 fw-bold">Selamat Datang di TiketWar</h1>
        <p class="col-md-8 fs-4">Platform war tiket konser paling adil dan anti-calo.</p>
    </div>
</div>

<div class="row">
    <div class="col-md-4 mb-3">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <div class="display-6">{{ $jumlahKonser }}</div>
                <div class="text-muted">Jumlah Konser</div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <div class="display-6">{{ $jumlahPromotor }}</div>
                <div class="text-muted">Jumlah Promotor</div>
            </div>
        </div>
    </div>
    <div class="col-md-4 mb-3">
        <div class="card text-center shadow-sm">
            <div class="card-body">
                <div class="display-6">{{ $totalSisa }}</div>
                <div class="text-muted">Total Sisa Tiket</div>
            </div>
        </div>
    </div>
</div>
@endsection
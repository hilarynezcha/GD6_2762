<?php

use Illuminate\Support\Facades\Route;

$daftarkonser = [
    1 => ['nama' => 'Coldplay Music of the Spheres', 'kota' => 'Jakarta', 'harga' => 1500000, 'sisa' => 25, 'tanggal' => '2027-03-15'],
    2 => ['nama' => 'NCT Dream The Dream Show', 'kota' => 'Jakarta', 'harga' => 1200000, 'sisa' => 0, 'tanggal' => '2027-04-20'],
    3 => ['nama' => 'Dewa 19 Pesta Rakyat', 'kota' => 'Yogyakarta', 'harga' => 450000, 'sisa' => 120, 'tanggal' => '2027-05-10'],
    4 => ['nama' => 'Chase Atlantic Lost in Heaven', 'kota' => 'Bandar Lampung', 'harga' => 3500000, 'sisa' => 5, 'tanggal' => '2027-01-27'],
    5 => ['nama' => 'The Weeknd After Hours Til Dawn', 'kota' => 'Palembang', 'harga' => 5500000, 'sisa' => 50, 'tanggal' => '2027-06-15'],
];

Route::get('/', function () {
    return view('home');
})->name('home');

Route::get('/konser', function () use ($daftarkonser) {
    return view('konser', compact('daftarkonser'));
})->name('konser.index');

Route::get('/konser/{id}', function ($id) use ($daftarkonser) {
    abort_unless(isset($daftarkonser[$id]), 404);
    return view('konser-detail', [
        'id' => $id,
        'konser' => $daftarkonser[$id],
    ]);
})->whereNumber('id')->name('konser.detail');

Route::view('/tentang', 'about')->name('tentang');
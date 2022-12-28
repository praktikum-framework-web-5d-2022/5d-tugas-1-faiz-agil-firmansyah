<?php

use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', function () {
    $list_dosen = ["Aji Primajaya","Betha Nurinasari","Rini Mayasari","Adhi Rizal","Nina Sulistiyowati","Dadang Yusup","Iqbal Maulana","Purwantoro","Hannie","Arip Solehudin"];
    return view('layout.dosen')->with('dosen', $list_dosen);
});

Route::get('/dosen', function () {
    $list_dosen = ["Aji Primajaya","Betha Nurinasari","Rini Mayasari","Adhi Rizal","Nina Sulistiyowati","Dadang Yusup","Iqbal Maulana","Purwantoro","Hannie","Arip Solehudin"];
    return view('layout.dosen')->with('dosen', $list_dosen);
});

Route::get('/mahasiswa', function () {
    $list_mahasiswa = ["Faiz Agil Firmansyah","Arfan Ryo Darmawan","Diki Candra","Cahya Diantoni","Fadhillah Ramadhan","Iqbal Kurniawan","Irna Purhasanah","Fathimatuzzahra","Assyifa Khalif","Elvin Alan Pratama"];
    return view('layout.mahasiswa')->with('mahasiswa', $list_mahasiswa);
});

Route::get('/matakuliah', function () {
    $list_matakuliah = ["Framework Pemrograman Web","Technopreneur","Data Mining","Keamanan Sistem","Blockchain","Rekayasa Perangkat Lunak","Cloud Computing","Blockchain","Sistem Operasi","Pemrograman Berbasis Mobile"];
    return view('layout.matakuliah')->with('matakuliah', $list_matakuliah);
});

Route::fallback(function() {
    return view('fail');
});

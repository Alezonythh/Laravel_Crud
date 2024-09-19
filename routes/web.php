<?php


use App\Models\Siswa;
use App\Models\Jurusan;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\SiswaController;
use App\Http\Controllers\JurusanController;

Route::get('/', function () {


    $jurusan = Jurusan::all();
    $siswa = Siswa::all();

    return view('welcome',['jurusan'=>$jurusan,'siswa'=>$siswa]);




});

Route::get('/admin', function () {
    return view('/admin/index',['status'=>'']);


});

    
Route::resource('/siswas',SiswaController::class);
Route::resource('/jurusans',JurusanController::class);
<?php

use Illuminate\Support\Facades\Route;

use App\Http\Controllers\mahasiswaController;

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

//Route::get('/', function () {
    //return view('welcome');
    //$nama = 'Bella';
   // return 'Hello' . $nama;
   //menghitung rumus aritmatika
   // $r = 15;
   // $phi = 3.14;
   // $luas_lingkaran = ($r * $r) * $phi ;
   // jari-jari' . $r .'adalah' . $luas_lingkaran;
   
    //perbandingan 
    //$nama = 'bella';
    //$kelas = 'A1';
   //// $prodi = 'teknologi informasi' ;
    //return ' nama saya adalah <b>' . $nama .'</b> saya kelas <b>' . $kelas . '</b> saya prodi <b> ' .$prodi;

//});
//Route::get('/', function () {
 //  return view ('laravel');
//});
//route::get('tabel', function () {
//   return view('tabel');
//});

//route:: get('tabel', function(){
//    $nama_mahasiswa = ['Joko','Rudi','Tono'];
 // $jumlah= count($nama_mahasiswa);
 // return view('pertemuan5-/tabel',compact('nama_mahasiswa','jumlah'));
//});

Route::get('/', [mahasiswaController::class,'index']);
<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\UserController;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

// murid
Route::get('/home', function () {return view('index');});
Route::get('/nilaimapel', function () {return view('nilai');});
Route::get('/raport', function () {return view('nilai1');});

// guru
Route::get('/absen', function () {return view('absen');});
Route::get('/tambahmurid', function () {return view('addsiswa');});
Route::get('/mapel', function () {return view('course');});
Route::get('/kelas', function () {return view('kelas');});
Route::get('/list', function () {return view('pilihan');});
Route::get('/login', function () {return view('login');});
Route::get('/editsiswa', function () {return view('editsiswadariguru');});
Route::get('/guruaddsiswa', function () {return view('gurutambahsiswa');});

// admin
Route::get('/adminkelasindex', [KelasController::class, 'index']);
Route::post('/adminkelasadd', [KelasController::class, 'store']);
Route::post('/adminkelasupdate/{kelasID}', [KelasController::class, 'update'])->name('adminkelas.update');
Route::get('/adminmurid', function () {return view('crudmurid');});
Route::get('/adminnilai', function () {return view('crudnilai');});
Route::get('/adminaddsiswa', function () {return view('tambahsiswa');});
Route::get('/adminaddkelas', function () {return view('tambahkelas');});
Route::get('/adminaddnilai', function () {return view('tambahnilai');});
Route::get('/adminuser', [UserController::class, 'index']);
Route::post('/adminuser', [UserController::class, 'store']);
Route::get('/adminadduser', function () {return view('tambahuser');});
Route::get('/admineditkelas/update/{kelasID}', 'App\Http\Controllers\KelasController@edit')->name('admineditkelas.update');
Route::get('/adminedituser', function () {return view('edituser');});
Route::get('/admineditnilai', function () {return view('editnilai');});
Route::get('/admineditsiswa', function () {return view('editsiswa');});
Route::get('/adminmapel', function () {return view('crudmapel');});
Route::get('/admineditmapel', function () {return view('editmapel');});
Route::get('/adminaddmapel', function () {return view('tambahmapel');});

// miscellanous
Route::get('/test', function () {return view('testing');});
Route::get('/backup', function () {return view('backup');});
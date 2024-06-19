<?php

use App\Http\Controllers\LoginRegisterController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
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

Route::middleware(['guest'])->group(function () {
    Route::get('/', function () {
        return view('home');
    });

    Route::get('/auth/login', [LoginRegisterController::class, 'login'])->name('auth.login');
    Route::post('/auth/login', [LoginRegisterController::class, 'postLogin'])->name('postLogin');

    Route::get('/auth/register', [LoginRegisterController::class, 'register'])->name('auth.register');
    Route::post('/auth/register', [LoginRegisterController::class, 'postRegister'])->name('postRegister');

});

Route::group(['middleware' => ['auth', 'checklevel:admin']], function () {
    Route::get('/admin/homeadmin', [LoginRegisterController::class, 'homeadmin'])->name('admin.homeadmin');

    Route::get('/admin/gejala', [AdminController::class, 'gejala'])->name('admin.gejala');
    Route::get('/admin/tambahgejala', [AdminController::class, 'tambahgejala'])->name('admin.tambahgejala');
    Route::get('/admin/editgejala/{id}', [AdminController::class, 'editgejala'])->name('admin.editgejala');
    Route::get('/admin/hapusgejala/{id}', [AdminController::class, 'hapusgejala'])->name('admin.hapusgejala');

    Route::get('/admin/penyakit', [AdminController::class, 'penyakit'])->name('admin.penyakit');
    Route::get('/admin/tambahpenyakit', [AdminController::class, 'tambahpenyakit'])->name('admin.tambahpenyakit');
    Route::get('/admin/editpenyakit/{id}', [AdminController::class, 'editpenyakit'])->name('admin.editpenyakit');
    Route::get('/admin/hapuspenyakit/{id}', [AdminController::class, 'hapuspenyakit'])->name('admin.hapuspenyakit');

    Route::get('/admin/basisaturan', [AdminController::class, 'basisaturan'])->name('admin.basisaturan');
    Route::get('/admin/detailbasisaturan/{id}', [AdminController::class, 'detailbasisaturan'])->name('admin.detailbasisaturan');
    Route::get('/admin/tambahbasisaturan', [AdminController::class, 'tambahbasisaturan'])->name('admin.tambahbasisaturan');
    Route::get('/admin/editbasisaturan/{id}', [AdminController::class, 'editbasisaturan'])->name('admin.editbasisaturan');
Route::delete('/admin/hapusbasisaturan/{id}', 'BasisaturanController@hapusbasisaturan')->name('admin.hapusbasisaturan');

    });

Route::group(['middleware' => ['auth', 'checklevel:user']], function () {
    Route::get('/user/homeuser', [LoginRegisterController::class, 'homeuser'])->name('user.homeuser');
    Route::get('/user/konsultasiuser', [UserController::class, 'konsultasiuser'])->name('user.konsultasiuser');
    Route::get('/user/hasilkonsultasi/{idkonsultasi}', [UserController::class, 'hasilKonsultasi'])->name('user.hasilkonsultasi');
    Route::get('/user/info', [UserController::class, 'info'])->name('user.info');
});
Route::post('/prosesKonsultasi', [UserController::class, 'prosesKonsultasi'])->name('prosesKonsultasi');

Route::get('logout', [LoginRegisterController::class, 'logout'])->name('logout');
Route::post('/posttambahgejala', [AdminController::class, 'posttambahgejala'])->name('posttambahgejala');
Route::post('/posteditgejala/{id}', [AdminController::class, 'posteditgejala'])->name('posteditgejala');

Route::post('/posttambahpenyakit', [AdminController::class, 'posttambahpenyakit'])->name('posttambahpenyakit');
Route::post('/posteditpenyakit/{id}', [AdminController::class, 'posteditpenyakit'])->name('posteditpenyakit');

Route::post('/posttambahbasisaturan', [AdminController::class, 'posttambahbasisaturan'])->name('posttambahbasisaturan');
Route::put('/posteditbasisaturan/{id}', [AdminController::class, 'posteditbasisaturan'])->name('posteditbasisaturan');
<?php

use App\Http\Controllers\AdminController;
use App\Http\Controllers\FrontController;
use App\Http\Livewire\Contacto;
use App\Http\Livewire\Cursos;
use App\Http\Livewire\Dashboard;
use App\Http\Livewire\Registro;
use App\Http\Livewire\Usuario;
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
Route::get('login', [AdminController::class,'showLoginForm'])->name('login');
Route::post('login', [AdminController::class,'login']);
Route::post('logout', [AdminController::class,'logout']);

Route::get('/', [FrontController::class,'index'])->name('index');
Route::get('/formacion', [FrontController::class,'formacion'])->name('formacion');

Route::middleware(['auth'])->group(function () {
    Route::get('/admin', Dashboard::class)->name('dashboard');
    Route::get('/admin/cursos', Cursos::class)->name('cursos');
    Route::get('/admin/registro', Registro::class)->name('registro');
    Route::get('/admin/contacto', Contacto::class)->name('contacto');
    Route::get('/admin/usuario', Usuario::class)->name('usuario');
});

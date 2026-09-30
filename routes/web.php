<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\InvController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\UserController;

Route::get('/login', [UserController::class, 'login'])->name('vistas.loginusuario');
Route::post('/loginUsuario', [UserController::class, 'validarUser'])->name('vistas.guardarUsuarios');
Route::post('/logout', [UserController::class, 'logout'])->name('vistas.logoutUser');


Route::get('/loginAdmin', [AdminController::class, 'admin'])->name('vistas.loginAdmin');
Route::post('/loginAdminIni', [AdminController::class, 'validarAdmin'])->name('vistas.guardarAdmin');
Route::post('/logoutAdmin', [AdminController::class, 'logoutAdmin'])->name('vistas.logout');



//menu
Route::get('/inventario/menu', [InvController::class, 'menu'])->name('vistas.menu');
Route::get('/inventario/menuUser', [InvController::class, 'menuUser'])->name('vistas.menuUser');


//crear
Route::get('/inventario/crearUser', [InvController::class, 'crearUser'])->name('vistas.registrarUsuario');
Route::get('/inventario/CrearAdmin', [InvController::class, 'CrearAdmin'])->name('vistas.registrarAdmin');

Route::get('/inventario/crear', [InvController::class, 'crear'])->name('vistas.crear');
Route::post('/inventario/guardar', [InvController::class, 'guardar'])->name('vistas.guardar');

Route::post('/subirUser', [UserController::class, 'subirUser'])->name('vistas.subirUser');
Route::post('/subirAdmin', [AdminController::class, 'subirAdmin'])->name('vistas.subirAdmin');


//editar
Route::get('/inventario/editar{equipo}', [InvController::class, 'editar'])->name('vistas.editar');
Route::put('/inventario/update/{equipo}', [InvController::class, 'update'])->name('vistas.update');

//eliminar
Route::delete('/inventario/destroy/{equipo}', [InvController::class, 'destroy'])->name('vistas.destroy');

//ver
Route::get('/inventario/lista', [InvController::class, 'lista'])->name('vistas.lista');
Route::get('/inventario/listaUser', [InvController::class, 'listaUser'])->name('vistas.listaUser');


//consultar
Route::get('/inventario/buscar', [InvController::class, 'buscar'])->name('vistas.buscar');
Route::get('/inventario/buscarUser', [InvController::class, 'buscarUser'])->name('vistas.buscarUser');

Route::get('/inventario/resultado', [InvController::class, 'resultado'])->name('vistas.resultado');
Route::get('/inventario/resultadoUser', [InvController::class, 'resultadoUser'])->name('vistas.resultadoUser');



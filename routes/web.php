<?php

use Illuminate\Support\Facades\Route;
// controlador de cliente
use App\Http\Controllers\EmpresaController;
// controladores para admin
use App\Http\Controllers\AdminController;
use App\Http\Controllers\ProductosController;

Route::get('/rutaVista',[EmpresaController::class,'Vista']);
Route::get('/rutaConta',[EmpresaController::class,'VistaContac']);
Route::get('/rutaCatal',[EmpresaController::class,'VistaCata']);
Route::get('/rutaLogin',[EmpresaController::class,'VistaLogin'])->name('Login');

Route::post('/rutaLogueo',[EmpresaController::class,'Logueo'])->name('logueo');

Route::get('/rutaVista4',[EmpresaController::class,'Vista4']);
Route::get('/rutaPreguntas',[EmpresaController::class,'preguntas']);
// rutas que muestran lops contenidos de las tablas
//Route::get('/rutamuestra1',[EmpresaController::class,'mostrar1']);
//Route::get('/rutamuestra2',[EmpresaController::class,'mostrar2']);
// Route::get('/rutaVista7',[EmpresaController::class,'mostrar3']);
Route::get('/rutaCaru',[EmpresaController::class,'VistaCaru']);
Route::get('/rutaClientes',[EmpresaController::class,'clientes']);
//rutas quye muestran las consultas
Route::get('/consulta1',[EmpresaController::class,'consulta1']);
Route::get('/consulta2',[EmpresaController::class,'consulta2']);
Route::get('/consulta3',[EmpresaController::class,'consulta3']);
// ============================================================================

Route::get('/Admin',[AdminController::class,'VistaAdmin'])->name('admin');

//=============================================================================

Route::get('rutaAgregarInter',[ProductosController::class, 'AgregarInter'])->name('rutaAgregarInter');

Route::post('/',[ProductosController::class, 'AgregarInfo'])->name('AgregarBD');

Route::get('MostrarAdmin',[ProductosController::class,'MostrarBD']);

Route::get('rutaCarrito',[ProductosController::class,'carrito']);

Route::get('rutaDescripcion/{id}',[ProductosController::class,'detalle']);

Route::get('AgregarCarrito/{id}',[ProductosController::class,'AgregarCarrito']);

// ========================================================= ruta apache_reset_timeout

Route::get('/', function () {
    return view('promocion');
});

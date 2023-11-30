<?php

use App\Http\Controllers\CuentaVotanteController;
use Illuminate\Support\Facades\Route;

use App\Http\Controllers\HomeController;
use App\Http\Controllers\RoleController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\RegistroVotanteController;
use App\Http\Controllers\VotanteController;
use Illuminate\Support\Facades\Auth;

Route::get('/', function () {
    return view('welcome');
});

Auth::routes();

Route::get('/home', [HomeController::class, 'index'])->name('home');

Route::group(['middleware' => ['auth']], function() {
    
    Route::group(['middleware' => ['permission:role-list']], function () {
        //Rutas de Roles
        Route::get('/roles/{role}/delete', [RoleController::class, 'delete'])->name('roles.delete');
        Route::resource('roles', RoleController::class);
    });
    Route::group(['middleware' => ['permission:user-list']], function () {
        //Rutas de Usuarios
        /* Route::get('/users', [UserController::class, 'index'])->name('users.index'); */
        Route::get('/users/{user}/delete', [UserController::class, 'delete'])->name('users.delete');
        Route::get('/users/ajax/create', [UserController::class, 'ajax_create'])->name('users.ajax.create');
        Route::resource('users', UserController::class);
    });

    Route::group(['middleware' => ['permission:votante-list']], function () {
        Route::controller(VotanteController::class)->group(function(){
            Route::get('votantes', 'index')->name('votantes.index');
            //Route::get('votante-esequibo', 'votante_esequibo')->name('votante.esequibo');
            Route::get('votantes-export', 'export')->name('votantes.export');
            Route::post('votantes-import', 'import')->name('votantes.import');
        });
    });
    
    Route::group(['middleware' => ['permission:registro-list']], function () {
        Route::controller(RegistroVotanteController::class)->group(function(){
            Route::get('votante-esequibo', 'votante_esequibo')->name('votante.esequibo');
            Route::post('votante-esequibo/verificar', 'verificar')->name('votante.esequibo.verificar');
            Route::patch('votante-esequibo/registrar_voto/{id}', 'registrar_voto')->name('votante.esequibo.registrar.voto');
        });
    });

    Route::group(['middleware' => ['permission:reporte-list']], function () {

        Route::controller(CuentaVotanteController::class)->group(function(){
            Route::get('cuenta-municipio', 'cuenta_municipio')->name('cuenta.municipio');
            Route::get('cuenta-general', 'cuenta_general')->name('cuenta.general');
        });
    
    });
    


});
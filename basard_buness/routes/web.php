<?php

use App\Http\Controllers\nos_servicesController;
use Illuminate\Support\Facades\Route;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get('/elie', function () {
    echo 'elie';
});

Route::get('/notre equipe', function () {
    echo 'notre_equipe';
});

Route::get('/nos_services/{userNAME}', [nos_servicesController::class, 'nos_services']) ;


Route::get('/notre_equipe', [nos_servicesController::class, 'notre_equipe']) ;

Route::get('/accueil', [nos_servicesController::class, 'accueil']);

// $_POST || $_GET

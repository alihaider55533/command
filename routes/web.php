<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\NewmodelController;
use App\Http\Controllers\YasimController;
use Techverx\Command\Command;
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

Route::get('/greet/{name}', function($sName) {
    $oCommand = new Command();
    return $oCommand->greet($sName);
});

Route::get('/', function () {
    return view('welcome');
});

Route::get('/newmodel', [NewmodelController::class, 'newmodel']);

Route::get('/yasim', [YasimController::class, 'yasim']);
//My Routes











<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PagesController;

// Students
use App\Http\Controllers\Students;
use App\Http\Controllers\ArtisController;
use App\Http\Controllers\AdartisController;
use App\Http\Controllers\DetailOrderController;
use App\Http\Controllers\JadwalEventController;
use App\Http\Controllers\DenahkursiController;
use App\Http\Controllers\HargatiketController;
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

Route::get('/', [PagesController::class, 'home']);
Route::get('/about', [PagesController::class, 'about']);
Route::get('/tampilan', [PagesController::class, 'tampilan']);
Route::get('/login', [PagesController::class, 'login']);
Route::get('/level', [PagesController::class, 'level']);


// Artis
Route::get('/artis', [ArtisController::class, 'index']);
Route::get('/artis/{artis}', [ArtisController::class, 'show']);



// Admin
Route::get('/adartis', [AdartisController::class, 'index']);
Route::get('/adartis/create', [AdartisController::class, 'create']);
Route::get('/adartis/{adartis}', [AdartisController::class, 'show']);
Route::post('/adartis', [AdartisController::class, 'store']);
Route::delete('/adartis/{adartis}', [AdartisController::class, 'destroy']);
Route::get('/adartis/{adartis}/edit', [AdartisController::class, 'edit']);
Route::patch('/adartis/{adartis}', [AdartisController::class, 'update']);

// Detail Order
Route::get('/detailorder', [DetailorderController::class, 'index']);
Route::get('/detailorder/create', [DetailorderController::class, 'create']);
Route::get('/detailorder/{detailorders}', [DetailorderController::class, 'show']);
Route::post('/detailorder', [DetailorderController::class, 'store']);
Route::delete('/detailorder/{detailorders}', [DetailorderController::class, 'destroy']);
Route::get('/detailorder/{detailorders}/edit', [DetailorderController::class, 'edit']);
Route::patch('/detailorder/{detailorders}', [DetailorderController::class, 'update']);

//jadwalevent
Route::get('/jadwalevent', [JadwalEventController::class, 'index']);
Route::get('/jadwalevent/create', [JadwalEventController::class, 'create']);
Route::get('/jadwalevent/{jadwalevents}', [JadwalEventController::class, 'show']);
Route::post('/jadwalevent', [JadwalEventController::class, 'store']);
Route::delete('/jadwalevent/{jadwalevents}', [JadwalEventController::class, 'destroy']);
Route::get('/jadwalevent/{jadwalevents}/edit', [JadwalEventController::class, 'edit']);
Route::patch('/jadwalevent/{jadwalevents}', [JadwalEventController::class, 'update']);

//denah kursi
Route::get('/denahkursi', [DenahkursiController::class, 'index']);
Route::get('/denahkursi/create', [DenahkursiController::class, 'create']);
Route::get('/denahkursi/{denahkurses}', [DenahkursiController::class, 'show']);
Route::post('/denahkursi', [DenahkursiController::class, 'store']);
Route::delete('/denahkursi/{denahkurses}', [DenahkursiController::class, 'destroy']);
Route::get('/denahkursi/{denahkurses}/edit', [DenahkursiController::class, 'edit']);
Route::patch('/denahkursi/{denahkurses}', [DenahkursiController::class, 'update']);

//hargatiket
Route::get('/hargatiket', [HargatiketController::class, 'index']);
Route::get('/hargatiket/create', [HargatiketController::class, 'create']);
Route::get('/hargatiket/{hargatikets}', [HargatiketController::class, 'show']);
Route::post('/hargatiket', [HargatiketController::class, 'store']);
Route::delete('/hargatiket/{hargatikets}', [HargatiketController::class, 'destroy']);
Route::get('/hargatiket/{hargatikets}/edit', [HargatiketController::class, 'edit']);
Route::patch('/hargatiket/{hargatikets}', [HargatiketController::class, 'update']);
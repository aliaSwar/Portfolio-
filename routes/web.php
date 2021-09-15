<?php

use App\Http\Controllers\PageContrller;

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

Route::get('/', [PageContrller::class, 'home']);
Route::get('download', [PageContrller::class, 'download'])->name('download');

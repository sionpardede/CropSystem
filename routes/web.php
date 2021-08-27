<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TanamansController;
use App\Http\Controllers\CropsController;
use App\Http\Controllers\JadwalsController;
use App\Http\Controllers\PupukController;
use App\Http\Controllers\GoogleController;
use App\Http\Controllers\UsersController;
use App\Http\Controllers\RequestController;
use App\Http\Controllers\SequenceController;
use App\Http\Controllers\RolesController;
use App\Http\Controllers\HasilPanenController;
use App\Http\Controllers\HamasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RecommendsController;
use App\Http\Controllers\CommentsController;



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

Route::get('/', function () {
    return view('welcome');
});

// Route::get('/', 'RecommendsController@index')->name('index');
// Route::get('/getPhs/{id}', 'RecommendsController@getPhs')->name('getPhs');
// Route::get('/getData/{id}', 'RecommendsController@getData')->name('getData');

Route::resource('recommends', RecommendsController::class);

Route::resource('comments', CommentsController::class);

Route::resource('request', RequestController::class);
Route::resource('hamas', HamasController::class);

Route::resource('users', UsersController::class);
Route::resource('roles', RolesController::class);
Route::resource('tanamans', TanamansController::class);
Route::resource('pupuks', PupukController::class);
Route::resource('crops', CropsController::class);
Route::resource('jadwals', JadwalsController::class);
Route::resource('sequences', SequenceController::class);
Route::resource('hasilpanens', HasilPanenController::class);

Route::get('auth/google', [GoogleController::class, 'redirectToGoogle']);
Route::get('auth/google/callback', [GoogleController::class, 'handleGoogleCallback']);
Route::post('/login', [
    'uses' => 'App\Http\Controllers\UsersController@login',
    'as' => 'user.login'
]);

Route::post('/plainLogin', [UsersController::class, 'login']);

Route::get('/changeFarmer/{id}', [UsersController::class, 'changeFarmer']);
Route::get('/deleteUser/{id}', [UsersController::class, 'destroy']);
Route::get('/unregistered', [UsersController::class, 'unregistered']);
Route::get('/sequence/editUrutan', [SequenceController::class, 'editUrutan']);
Route::post('/sequence/simpanUrutan', [SequenceController::class, 'simpanUrutan']);

Route::get('/changePassword/{id}', [UsersController::class, 'changePassword']);

Route::middleware(['auth:sanctum', 'verified'])
    ->get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

Route::get('/detail/{str}', [TanamansController::class, 'detail']);
Route::get('/changeStatus/{id}', [DashboardController::class, 'changeStatus']);
Route::get('/pupuks/create/{str}', [PupukController::class, 'create']);
Route::get('/tanamans/show/{str}', [TanamansController::class, 'show']);
Route::get('/crops/index/{str}', [CropsController::class, 'index']);

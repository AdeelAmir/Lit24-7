<?php

use App\Http\Controllers\FirebaseUsersController;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
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

Route::get('clear-cache', function (){
    Route::get('clear-cache', function () {
        Artisan::call('storage:link');
        Artisan::call('route:clear');
        Artisan::call('cache:clear');
        Artisan::call('config:clear');
        Artisan::call('view:clear');
        //Create storage link on hosting
        $exitCode = Artisan::call('storage:link', []);
        echo $exitCode; // 0 exit code for no errors.
    });
});

Route::get('/test', function () {
    return Hash::make('admin@lit24-7.com');
});


Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

Auth::routes();

Route::get('/register', function () {
    return back();
});


Route::get('/home/users', [App\Http\Controllers\HomeController::class, 'users']);
Route::get('/home/salers', [App\Http\Controllers\HomeController::class, 'salers']);
Route::get('/home/sales/{id}', [App\Http\Controllers\HomeController::class, 'sales']);


Route::get('/display', [FirebaseUsersController::class, 'index'])->name('firebase.firestore.users');
Route::get('/firebase/firestore/users/store', [FirebaseUsersController::class, 'store'])->name('firebase.firestore.users.store');
Route::get('/display1', [FirebaseUsersController::class, 'index1'])->name('firebase.firestore.users1');

Route::get('/firebase/users/vip', [\App\Http\Controllers\FirebaseVipUsersController::class, 'index'])->name('firebase.firestore.users.vip');
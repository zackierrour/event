<?php

use App\Http\Controllers\AdminController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\EvenementController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\ReservationController;
use App\Models\Evenement;




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



Route::get('/', [HomeController::class, 'index'])->name('home');

Route::get('/login', [AuthController::class, 'login'])->name('login');
Route::get('/register', [AuthController::class, 'register'])->name('register');

Route::post('/loginUser', [AuthController::class, 'loginUser'])->name('loginuser');
Route::post('/registerUser', [AuthController::class, 'registerUser'])->name('registeruser');


Route::group(['middleware' => ['IsAuth']], function (){
    
    Route::post('/ajouterReservation',[ReservationController::class,'ajouterReservation'])->name('ajouterreservation');
    Route::get('/myReservation',[ReservationController::class, 'myReservation'])->name('myreservation');
    Route::get('/logout', [AuthController::class, 'logOut'])->name('logout');

});

Route::group(['middleware' => ['IsAdmin']], function (){
    Route::get('/reservations', [ReservationController::class, 'getReservations'])->name('reservations');
    Route::get('dashboard',[AdminController::class,'getDash'])->name('dashboard');
    Route::get('evenements',[EvenementController::class,'getEvenements'])->name('evenements');
    Route::post('ajouterevent',[EvenementController::class,'ajouterEvent'])->name('ajouterevent');
    Route::delete('deleteevenement/{id}',[EvenementController::class,'deleteEvenement'])->name('deleteevenement');
    Route::put('/updateevenement/{id}', [EvenementController::class, 'updateEvent'])->name('updateevent');
    Route::put('updatestatus/{id}',[ReservationController::class,'updateStatus'])->name('updatestatus');

});






// admin






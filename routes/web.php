<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\Auth\LoginRegisterController;


use App\Http\Controllers\DeliveryController;
use App\Http\Controllers\MessageController;

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

Route::get('/welcome', function () {
    return view('welcome');
});



Route::get('/', function () {
    return view('userside');
})->name('dantoy');


Route::get('/admin', function () {
    return view('deliveries.index');
});

Route::put('/deliveries/{delivery}/done', [App\Http\Controllers\DeliveryController::class, 'done'])->name('deliveries.done');



Route::get('/order', function () {
    return view('deliveries.create');
});


Auth::routes();

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');


Route::resource('deliveries', DeliveryController::class);

Route::resource('messages', MessageController::class);




// Route::get('/order', DeliveryController::class, 'create')->name('deliveries.create');

Route::controller(LoginRegisterController::class)->group(function() {
    Route::get('/register', 'register')->name('register');
    Route::post('/store', 'store')->name('store');
    Route::get('/login', 'login')->name('login');
    Route::post('/authenticate', 'authenticate')->name('authenticate');
    // Route::get('/dashboard', 'dashboard')->name('dashboard');
    Route::post('/logout', 'logout')->name('logout');
    Route::view('/transactions', 'auth.transactions')->name('transactions');
    Route::get('/admin', [DeliveryController::class,'index'])->name('dashboard');
    Route::get('/', function () {
        return view('userside');
    })->name('dantoy');
    Route::get('/delivering', [DeliveryController::class,'delivering'])->name('deliveries.delivering');
    Route::get('/transact', [DeliveryController::class,'transact'])->name('');
    
    //Show nessages table
    Route::get('/messages', [MessageController::class,'viewmessage'])->name('');

});





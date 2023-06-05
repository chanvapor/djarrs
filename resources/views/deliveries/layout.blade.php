<!DOCTYPE html>
<html>
<head>
    <title>Delivery CRUD TRY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">

    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>

<body>
    
<div class="container">
    @yield('content')
</div>
    
</body>
</html>



{{-- // Route::get('/', function () {
    //     return view('userside');
    // });
    
    // Auth::routes();
    
    // Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
    
    // Route::resource('deliveries', DeliveryController::class);
    
    // // Route::get('/order', DeliveryController::class, 'create')->name('deliveries.create');
    
    // Route::controller(LoginRegisterController::class)->group(function() {
    //     Route::get('/register', 'register')->name('register');
    //     Route::post('/store', 'store')->name('store');
    //     Route::get('/login', 'login')->name('login');
    //     Route::post('/authenticate', 'authenticate')->name('authenticate');
    //     Route::get('/dashboard', 'dashboard')->name('dashboard');
    //     Route::post('/logout', 'logout')->name('logout');
    //     Route::view('/transactions', 'auth.transactions')->name('transactions');
    // }); --}}
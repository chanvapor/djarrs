<!-- STEP 1 make folder to migrate
php artisan make:migration create_deliveries_table --create=deliveries

STEP 2 After this command you will find one file in the following path "database/migrations" and you have to put below code in your migration file for creating the delivery table. -->

<?php
  
use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
  
return new class extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('deliveries', function (Blueprint $table) {
            $table->id();
            $table->string('name');
            $table->string('email')->unique();
            $table->string('phone_number')->nullable();
            $table->string('address');
            $table->string('address_detail');
            $table->integer('quantity');
            $table->date('del_date');
            $table->text('message');
            $table->decimal('total');
            $table->string('status');
            $table->timestamps();
        });
    }
  
    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('deliveries');
    }
};

// STEP 3 MIGRATE
// php artisan migrate


// Step 4: Create Controller and Model
// php artisan make:controller DeliveryController --resource --model=Delivery

// app/Http/Controllers/DeliveryController.php

<?php
  
namespace App\Http\Controllers;
  
use App\Models\Delivery;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;
  
class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $deliveries = Delivery::latest()->paginate(5);
        
        return view('deliveries.index',compact('deliveries'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }
  
    /**
     * Show the form for creating a new resource.
     */
    public function create(): View
    {
        return view('deliveries.create');
    }
  
    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'address_detail' => 'required',
            'quantity' => 'required',
            'del_date' => 'required',
            'message' => 'required',
            'total' => 'required',
            'status' => 'required'

        ]);
        
        Delivery::create($request->all());
         
        return redirect()->route('deliveries.index')
                        ->with('success','Product created successfully.');
    }
  
    /**
     * Display the specified resource.
     */
    public function show(Delivery $delivery): View
    {
        return view('deliveries.show',compact('delivery'));
    }
  
    /**
     * Show the form for editing the specified resource.
     */
    public function edit(Delivery $delivery): View
    {
        return view('deliveries.edit',compact('delivery'));
    }
  
    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, Delivery $delivery): RedirectResponse
    {
        $request->validate([
            'name' => 'required',
            'email' => 'required',
            'phone_number' => 'required',
            'address' => 'required',
            'address_detail' => 'required',
            'quantity' => 'required',
            'del_date' => 'required',
            'message' => 'required',
            'total' => 'required',
            'status' => 'required'
        ]);
        
        $delivery->update($request->all());
        
        return redirect()->route('deliveries.index')
                        ->with('success','Product updated successfully');
    }
  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Delivery $delivery): RedirectResponse
    {
        $delivery->delete();
         
        return redirect()->route('deliveries.index')
                        ->with('success','Product deleted successfully');
    }
}


// Step 5: Add Resource Route
// Here, we need to add resource route for product crud application. so open your "routes/web.php" file and add following route.

<?php
  
use Illuminate\Support\Facades\Route;
  
use App\Http\Controllers\DeliveryController;
  
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group that
| contains the "web" middleware group. Now create something great!
|
*/
  
Route::resource('deliveries', DeliveryController::class);




// Step 6: Add Blade Files

// In last step. In this step we have to create just blade files. So mainly we have to create layout file and then create
//  new folder "products" then create blade files of crud app. So finally you have to create following bellow blade file:
// 1) layout.blade.php

// 2) index.blade.php

// 3) create.blade.php

// 4) edit.blade.php

// 5) show.blade.php

// So let's just create following file and put bellow code.


// resources/views/deliveries/layout.blade.php

<!DOCTYPE html>
<html>
<head>
    <title>Delivery CRUD TRY</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    
<div class="container">
    @yield('content')
</div>
    
</body>
</html>


// --------------------------------------------------------------------------

// resources/views/deliveries/index.blade.php

@extends('deliveries.layout')
 
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Laravel 10 CRUD Example from scratch - ItSolutionStuff.com</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-success" href="{{ route('deliveries.create') }}"> Create New Product</a>
            </div>
        </div>
    </div>
   
    @if ($message = Session::get('success'))
        <div class="alert alert-success">
            <p>{{ $message }}</p>
        </div>
    @endif
   
    <table class="table table-bordered">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Phone Number</th>
            <th>Address</th>
            <th>Detailed Address</th>
            <th>Quantity</th>
            <th>Delivery Date</th>
            <th>Message</th>
            <th>Total</th>
            <th>Status</th>
            <th width="200px">Action</th>
        </tr>
        @foreach ($deliveries as $delivery)
        <tr>
            <td>{{ ++$i }}</td>
            <td>{{ $delivery->name }}</td>
            <td>{{ $delivery->email }}</td>
            <td>{{ $delivery->phone_number }}</td>
            <td>{{ $delivery->address }}</td>
            <td>{{ $delivery->address_detail }}</td>
            <td>{{ $delivery->quantity }}</td>
            <td>{{ $delivery->del_date }}</td>
            <td>{{ $delivery->message }}</td>
            <td>{{ $delivery->total }}</td>
            <td>{{ $delivery->status }}</td>
            <td>
                <form action="{{ route('deliveries.destroy',$delivery->id) }}" method="POST">
   
                    <a class="btn btn-info" href="{{ route('deliveries.show',$delivery->id) }}">Show</a>
    
                    <a class="btn btn-primary" href="{{ route('deliveries.edit',$delivery->id) }}">Edit</a>
   
                    @csrf
                    @method('DELETE')
      
                    <button type="submit" class="btn btn-danger">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
  
    {!! $deliveries->links() !!}
      
@endsection

// --------------------------------------------------------------------------

// resources/views/deliveries/create.blade.php

@extends('deliveries.layout')
  
@section('content')
<div class="row">
    <div class="col-lg-12 margin-tb">
        <div class="pull-left">
            <h2>Add New Product</h2>
        </div>
        <div class="pull-right">
            <a class="btn btn-primary" href="{{ route('deliveries.index') }}"> Back</a>
        </div>
    </div>
</div>
   
@if ($errors->any())
    <div class="alert alert-danger">
        <strong>Whoops!</strong> There were some problems with your input.<br><br>
        <ul>
            @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
            @endforeach
        </ul>
    </div>
@endif
   
<form action="{{ route('deliveries.store') }}" method="POST">
    @csrf
  
     <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                <input type="text" name="name" class="form-control" placeholder="Name">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Email:</strong>
                <input type="email" name="email" class="form-control" placeholder="Email">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Phone Number:</strong>
                <input type="number" name="phone_number" class="form-control" placeholder="Phone Number">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Address:</strong>
                <input type="text" name="address" class="form-control" placeholder="Street, City, State/Province">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Detail Address:</strong>
                <textarea class="form-control" style="height:150px" name="address_detail" placeholder="Detail Address"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Quantity:</strong>
                <input type="number" name="quantity" class="form-control" placeholder="Quantity">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Delivery Date:</strong>
                <input type="date" name="del_date" class="form-control" placeholder="Date">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Message:</strong>
                <textarea class="form-control" style="height:150px" name="message" placeholder="Message"></textarea>
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Total:</strong>
                <input type="number" name="total" class="form-control" placeholder="Total">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Status:</strong>
                <input type="text" name="status" value="pending" class="form-control" placeholder="Status">
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12 text-center">
                <button type="submit" class="btn btn-primary">Submit</button>
        </div>
    </div>
   
</form>

@endsection


// --------------------------------------------------------------------------

// resources/views/deliveries/show.blade.php

@extends('deliveries.layout')
  
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2> Show Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('deliveries.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    <div class="row">
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Name:</strong>
                {{ $delivery->name }}
            </div>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-12">
            <div class="form-group">
                <strong>Details:</strong>
                {{ $delivery->detail }}
            </div>
        </div>
    </div>
@endsection

// -----------------------------------------------------------------

// resources/views/products/edit.blade.php
@extends('deliveries.layout')
   
@section('content')
    <div class="row">
        <div class="col-lg-12 margin-tb">
            <div class="pull-left">
                <h2>Edit Product</h2>
            </div>
            <div class="pull-right">
                <a class="btn btn-primary" href="{{ route('deliveries.index') }}"> Back</a>
            </div>
        </div>
    </div>
   
    @if ($errors->any())
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif
  
    <form action="{{ route('deliveries.update',$delivery->id) }}" method="POST">
        @csrf
        @method('PUT')
   
         <div class="row">
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Name:</strong>
                    <input type="text" name="name" value="{{ $delivery->name }}" class="form-control" placeholder="Name">
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12">
                <div class="form-group">
                    <strong>Detail:</strong>
                    <textarea class="form-control" style="height:150px" name="detail" placeholder="Detail">{{ $product->detail }}</textarea>
                </div>
            </div>
            <div class="col-xs-12 col-sm-12 col-md-12 text-center">
              <button type="submit" class="btn btn-primary">Submit</button>
            </div>
        </div>
   
    </form>
@endsection










mail
MAIL_MAILER=smtp
MAIL_HOST=mailpit
MAIL_PORT=1025
MAIL_USERNAME=null
MAIL_PASSWORD=null
MAIL_ENCRYPTION=null
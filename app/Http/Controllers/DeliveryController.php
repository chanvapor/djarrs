<?php
  
namespace App\Http\Controllers;
  
use App\Models\Delivery;
use Illuminate\Http\RedirectResponse;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\View\View;

use App\Mail\sent;
use App\Mail\accept;
use App\Mail\delivered;
use App\Mail\decline;
use Illuminate\Support\Facades\Mail;
  
class DeliveryController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(): View
    {
        $deliveries = Delivery::where('status', '=', 'pending')->latest()->simplePaginate(5);
        // $deliveries = Delivery::latest()->simplePaginate(5);
        
        return view('deliveries.index',compact('deliveries'))
                    ->with('i', (request()->input('page', 1) - 1) * 5);
    }


/////////////////////////////////////////////////////////////////////
    public function delivering(): View
    {
        $deliveries = Delivery::where('status', '=', 'delivering')->latest()->simplePaginate(5);
        
        return view('deliveries.delivering', compact('deliveries'))
            ->with('i', (request()->input('page', 1) - 1) * 5);
    }


////////////////////////////////////////////////////////////////////////
    public function transact(): View
    {
        $deliveries = Delivery::where('status', '=', 'delivered')->latest()->simplePaginate(5);
        
        return view('deliveries.transactions', compact('deliveries'))
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
    ]);

    // Assign the desired status directly
    $data = $request->all();
    $data['status'] = 'pending';

    Delivery::create($data);

    $mailData = [
        'title' => 'Delivery Service',
        'body' => 'This is to inform you that your request is being processed. Please wait for more information.',
        'name' => $request->input('name'),
        'email' => $request->input('email'),
        'phone_number' => $request->input('phone_number'),
        'address' => $request->input('address'),
        'address_detail' => $request->input('address_detail'),
        'quantity' => $request->input('quantity'),
        'del_date' => $request->input('del_date'),
        'message' => $request->input('message'),
        'total' => $request->input('total'),
    ];



    Mail::to($request->input('email'))->send(new sent($mailData));
    return redirect()->route('deliveries.create')
                    ->with('success', 'Order Request Successfully Sent.');
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
    $delivery->status = 'delivering';

    // Save the updated attributes
    $delivery->save();

    $recipientEmail = $delivery->email; // Access the 'email' field directly from the delivery object
    $totalPayment = $delivery->total;

    $mailData = [
        'title' => 'Water Delivery Service',
        'body' => 'Good day. This is to inform you that anytime this day we are now going to deliver your water. Please prepare the total amount of P',
        'total' => $totalPayment,
    ];

    Mail::to($recipientEmail)->send(new accept($mailData));
    
    return redirect()->route('deliveries.index')
                    ->with('success', 'Updated Successfully');
    }

////////////////////////////////For UPDATE STATUS to TRANSACTION////////////////////////////////////////////////
    public function done(Request $request, Delivery $delivery): RedirectResponse
    {
        $delivery->status = 'delivered';

        // Save the updated attributes
        $delivery->save();

        $recipientEmail = $delivery->email; // Access the 'email' field directly from the delivery object

        $mailData = [
            'title' => 'Water Delivery Service',
            'body' => 'Thank you for ordering. Have a nice day!'
        ];

        Mail::to($recipientEmail)->send(new delivered($mailData));

        return redirect()->route('deliveries.delivering')
                        ->with('success', 'Updated Successfully');
    }



    

  
    /**
     * Remove the specified resource from storage.
     */
    public function destroy(Delivery $delivery): RedirectResponse
    {
        $recipientEmail = $delivery->email; // Access the 'email' field directly from the delivery object

        $mailData = [
            'title' => 'Water Delivery Service',
            'body' => 'For some unforeseen reason your delivery request was declined!'
        ];

        Mail::to($recipientEmail)->send(new decline($mailData));
        
        $delivery->delete();
         
        return redirect()->route('deliveries.index')
                        ->with('success','Order Declined!');
    }
}
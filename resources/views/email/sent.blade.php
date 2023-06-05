@component('mail::message')

<h1>{{ $mailData['title'] }}</h1>
<p>{{ $mailData['body'] }}</p>
<br>
<h2>Delivery Details:</h2>

<p><strong>Name:</strong> {{ $mailData['name'] }}</p>
<p><strong>Email:</strong> {{ $mailData['email'] }}</p>
<p><strong>Phone Number:</strong> {{ $mailData['phone_number'] }}</p>
<p><strong>Address:</strong> {{ $mailData['address'] }}</p>
<p><strong>Address Details:</strong> {{ $mailData['address_detail'] }}</p>
<p><strong>Quantity:</strong> {{ $mailData['quantity'] }}</p>
<p><strong>Delivery Date:</strong> {{ $mailData['del_date'] }}</p>
<p><strong>Message:</strong> {{ $mailData['message'] }}</p>
<p><strong>Total Payment:</strong> {{ $mailData['total'] }}</p>



@component('mail::button', ['url' => 'http://brgymanga.com/'])
Click Here To Visit Page
@endcomponent

@endcomponent
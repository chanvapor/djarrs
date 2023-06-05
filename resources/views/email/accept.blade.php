@component('mail::message')

<h1>{{ $mailData['title'] }}</h1>
<p>{{ $mailData['body'] }}{{ $mailData['total'] }} for you payment. Thank you and have a nice day!</p>

<br>



@component('mail::button', ['url' => 'http://brgymanga.com/'])
Click Here To Visit Page
@endcomponent

@endcomponent
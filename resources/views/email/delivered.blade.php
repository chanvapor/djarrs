@component('mail::message')

<h1>{{ $mailData['title'] }}</h1>
<p>{{ $mailData['body'] }}</p>

<br>



@component('mail::button', ['url' => 'http://brgymanga.com/'])
Click Here To Visit Page
@endcomponent

@endcomponent
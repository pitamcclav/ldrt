@component('mail::message')
# Hi {{ $name }},
{{ $senderMessage }}  
@component('mail::button', ['url' => 'your-website-url'])
Visit Our Website
@endcomponent
Thanks,
{{ config('app.name') }}
@endcomponent
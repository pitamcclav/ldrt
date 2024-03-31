@component('mail::message')
# Name: {{ $name }}
# Email: {{ $email }}

# Subject: {{ $subject }}
Message: {{ $message }}

@component('mail::button', ['url' => 'your-website-url'])
Visit Our Website
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent

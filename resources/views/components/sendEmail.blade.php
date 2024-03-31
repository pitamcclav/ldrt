@component('mail::message')
# Name: {{ $name }}
# Email: {{ $email }}
# Phone: {{ $phone }}

# Subject: Volunteer

Message: {{ $message }}

@component('mail::button', ['url' => 'your-website-url'])
Visit Our Website
@endcomponent

Thanks,
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# Contact Form Message

- Name: {{ $visitorName }}
- Email: {{ $email }}
- Message: {{ $message }}
@endcomponent

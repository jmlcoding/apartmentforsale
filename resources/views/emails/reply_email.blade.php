@component('mail::message')
    # Hi {{ $name }},
{{--    {{  # {{ $senderMessage }}  }}--}}
    Thank you for reaching out to us.

    We have received your inquiry and are currently reviewing the details. Our team will get back to you as soon as possible.

    If you have any urgent concerns or additional information to provide, please feel free to reach out to us directly at +974 44687461 / +974 66346605.

    We appreciate your patience and interest in Steps Investor.
@component('mail::table')
@endcomponent
@component('mail::button', ['url' => $mailData['url']])
        Visit Our Website
@endcomponent
    Best regards,

    {{ config('app.name') }}
@endcomponent

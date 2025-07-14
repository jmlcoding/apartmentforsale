@component('mail::message')
    # Name: {{ $name }}
{{--    # Email: {{ $email }}--}}
    Subject: {{ $sub }}
@component('mail::table')
        | **Name**           |  **Telephone**             |
        | ------------------ |:---------------------------|
        | {{$name}}          |  {{$phone}}                |
@endcomponent
@component('mail::button', ['url'=>'https://www.steps.com.qa/'])
    Visit Our Website
@endcomponent
    Thanks, apartment for sale in qatar
@endcomponent
{{--    <!DOCTYPE html>--}}
{{--<html lang="en">--}}
{{--<head>--}}
{{--    <title>{{ $name }}</title>--}}
{{--</head>--}}
{{--<body>--}}
{{--# Name: {{ $name }}--}}
{{--    # Email: {{ $email }}<br>--}}
{{--    Subject: {{ $sub }} <br><br>--}}
{{--    Message:<br> {{ $mess }}--}}
{{--</body>--}}
{{--</html>--}}


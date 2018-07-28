@component('mail::message')
Welcome to RUBIK Music community.

Thank you for registering an account with us.
We would love you to click on the button below to verify your account and start exploring!!

@component('mail::button', ['url' => $url, 'color' =>'blue'])
Verify Account
@endcomponent

@component('mail::panel')
If you're having trouble clicking the "Verify ACccount" button directly, copy and paste the URL below into your web browser.
@endcomponent

@component('mail::panel')
{{ $url }}
@endcomponent

Regards,<br>
{{ config('app.name') }}
@endcomponent

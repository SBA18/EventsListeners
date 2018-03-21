@component('mail::message')
# Welcome **{{ $user->name }}** to **{{ config('app.name') }}**

Thanks for singing up our application. Enjoy now !

@component('mail::button', ['url' => ''])
My account
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

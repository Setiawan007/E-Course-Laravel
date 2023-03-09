@component('mail::message')
# Welcome

Hi {{$user->name}}
<br>
Welcome to E-Course By Setiawan007, your account has been created successfully. Now you can choose your best match camp!

@component('mail::button', ['url' => route('login')])
Login Here
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

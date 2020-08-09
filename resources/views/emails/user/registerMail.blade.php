@component('mail::message')
Bonjour {{ $data->name }}

Voici votre mot de passe : {{ $data->password }}


@component('mail::button', ['url' => ''])
Button Text
@endcomponent

Thanks,<br>
{{ config('app.name') }}
@endcomponent

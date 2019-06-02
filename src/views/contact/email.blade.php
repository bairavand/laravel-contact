@component('mail::message')

Sender Name: <b> {{$name}} </b>
<br>
Sender Email: <b> {{$email}} </b>
<br/>
Message:
{{$message}}

{{-- @component('mail::button', ['url' => $email])
Reply
@endcomponent --}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent

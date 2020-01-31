@component('mail::message')
# Message Received

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

{{$data['message']}}


From:  {{$data['name']}}

Email: {{$data['email']}}

Thanks,<br>
{{ config('app.name') }}
@endcomponent

@component('mail::message')
# Callback request received

{{--@component('mail::button', ['url' => ''])--}}
{{--Button Text--}}
{{--@endcomponent--}}

@component('mail::table')
| Name          | Email         | Phone    |
| ------------- |:-------------:| --------:|
| {{$data['name']}} | {{$data['email']}}      | {{$data['phone']}}    |
@endcomponent
Thanks,<br>
{{ config('app.name') }}
@endcomponent

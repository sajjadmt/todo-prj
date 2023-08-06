<x-mail::message>
# Todo Creation

{{ $todo->title }} is created.

<x-mail::button :url="'http://127.0.0.1:8000/'">
Go Home
</x-mail::button>

Thanks,<br>
{{ config('app.name') }}
</x-mail::message>

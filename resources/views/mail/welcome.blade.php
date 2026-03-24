<x-mail::message>
# ¡Hello, {{ $user->name }}!

We welcome you to my Homework 8. 
Your account has been succesfully registered with the email: {{ $user->email }}.

<x-mail::button :url="route('dashboard')">
Go to my dashboard
</x-mail::button>

Thank you,<br>
{{ config('app.name') }}
</x-mail::message>
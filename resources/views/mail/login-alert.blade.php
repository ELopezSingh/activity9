<x-mail::message>
# Alerta de Seguridad

Hello, {{ $user->name }}. 

We're notifying you that a new login has just been registered on your account. If it was you, you can ignore this message.

Thank you,<br>
{{ config('app.name') }}
</x-mail::message>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Landing Page</title>
    <script src="https://cdn.tailwindcss.com"></script>
</head>
<body class="bg-gray-100 text-gray-800">

    <nav class="bg-blue-900 p-4 text-white flex justify-between items-center">
        <div class="font-bold text-xl">Activity 9</div>
        <div>
            @guest
                <a href="{{ route('login') }}" class="mr-4 hover:underline">Login</a>
                <a href="{{ route('register') }}" class="hover:underline">Register</a>
            @endguest

            @auth
                <a href="{{ route('dashboard') }}" class="hover:underline">Go to Dashboard</a>
            @endauth
        </div>
    </nav>

    <main class="flex flex-col items-center justify-center h-screen text-center">
        <h1 class="text-5xl font-bold mb-4 text-blue-900">Welcome to our Landing Page</h1>
        <p class="text-xl max-w-2xl mb-8">
            Example landing page for Activity 9 - Web Application Design.
        </p>
        @guest
            <a href="{{ route('register') }}" class="bg-blue-600 text-white px-6 py-3 rounded-lg shadow-lg hover:bg-blue-700 transition">Start now</a>
        @endguest
    </main>

</body>
</html>
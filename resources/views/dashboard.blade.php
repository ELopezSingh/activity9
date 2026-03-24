<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Dashboard') }}
        </h2>
    </x-slot>

    <div class="py-12">
        <div class="max-w-7xl mx-auto sm:px-6 lg:px-8">
            <div class="bg-white overflow-hidden shadow-sm sm:rounded-lg">
                <div class="p-6 text-gray-900">
                    <h2 class="text-2xl font-bold mb-4">Dashboard</h2>
                    <p class="mb-4">Welcome to the protected system</p>
                    
                    <div class="bg-blue-50 border-l-4 border-blue-400 p-4">
                        <p class="text-sm text-blue-700">This space is safe, guest users don't have access to this screen</p>
                    </div>
                </div>
                </div>
        </div>
    </div>
</x-app-layout>
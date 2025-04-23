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
                    <p>Welcome to your dashboard! Here you can:</p>
                    <ul class="list-disc list-inside mt-4">
                        <li>View your courses</li>
                        <li>Track your progress</li>
                        <li>Access your achievements</li>
                        <li>Connect with other learners</li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</x-app-layout>

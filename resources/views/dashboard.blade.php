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
                    {{ __("You're logged in!") }}

                    {{-- Display content based on roles --}}
                    @role('admin')
                        <p class="mt-4 text-green-600">Welcome, Admin! You have full access.</p>
                        <a href="{{ route('users.index') }}" class="text-blue-500 hover:underline">Manage Users</a>
                    @endrole

                    @role('user')
                        <p class="mt-4 text-blue-600">Welcome, Regular User! Enjoy your personalized content.</p>
                    @endrole

                    {{-- Display content based on permissions --}}
                    @can('edit articles')
                        <p class="mt-4 text-purple-600">You have permission to edit articles.</p>
                        <button class="bg-purple-500 text-white px-4 py-2 rounded-md mt-2">Edit Article</button>
                    @endcan

                    @cannot('edit articles')
                        <p class="mt-4 text-red-600">You do not have permission to edit articles.</p>
                    @endcannot
                </div>
            </div>
        </div>
    </div>
</x-app-layout>
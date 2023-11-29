<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Employee List') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg">
        <h2 class="text-2xl font-semibold mb-4">Select a User for Evaluation</h2>

        @if(session('success'))
            <div class="bg-green-100 border-l-4 border-green-500 text-green-700 p-4 mb-4">
                <div class="flex">
                    <div class="py-1">
                        <svg class="w-6 h-6 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M5 13l4 4L19 7"></path>
                        </svg>
                    </div>
                    <div>
                        {{ session('success') }}
                    </div>
                </div>
            </div>
        @endif

        @if(session('error'))
            <div class="bg-red-100 border-l-4 border-red-500 text-red-700 p-4 mb-4">
                <div class="flex">
                    <div class="py-1">
                        <svg class="w-6 h-6 mr-4" xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke="currentColor">
                            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2" d="M6 18L18 6M6 6l12 12"></path>
                        </svg>
                    </div>
                    <div>
                        {{ session('error') }}
                    </div>
                </div>
            </div>
        @endif

        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-4 gap-4">
            @foreach($users as $user)
                <div class="bg-white border rounded-lg overflow-hidden shadow-md hover:shadow-lg transition duration-300 ease-in-out transform hover:-translate-y-1">
                    <div class="p-4">
                        <div class="flex items-center justify-center mb-4">
                            @if ($user->profile_picture)
                                <a href="{{ route('users.show', $user) }}">
                                    <img src="{{ Storage::url($user->profile_picture) }}"
                                        alt="{{ $user->name }} Profile Picture"
                                        class="w-16 h-16 rounded-full object-cover border-4 border-blue-500">
                                </a>
                            @else
                                <a href="{{ route('users.show', $user) }}">
                                    <img src="{{ asset('images/default-profile.jpeg') }}"
                                        alt="{{ $user->name }} Profile Picture"
                                        class="w-16 h-16 rounded-full object-cover border-4 border-blue-500">
                                </a>
                            @endif
                        </div>

                        <h3 class="text-center text-lg font-semibold mb-2">{{ $user->first_name }} {{$user->middle_name}} {{ $user->surname }}</h3>
                        <p class="text-center text-gray-600 mb-2">{{ $user->email }}</p>
                        <p class="text-center text-gray-600">{{ $user->department->name }}</p>

                    </div>
                    <div class="px-4 pb-4">
                        @if (!$user->hasEvaluated(auth()->user()))
                            <div class="flex items-center justify-center">
                                <a href="{{ route('evaluations.form', ['user_id' => $user->id]) }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md transition duration-300 ease-in-out transform hover:scale-105">Evaluate</a>
                            </div>
                        @else
                            <div class="flex items-center justify-center">
                                <span class="text-gray-500">Already Evaluated</span>
                            </div>
                        @endif
                    </div>
                </div>
            @endforeach
        </div>
    </div>
</x-app-layout>

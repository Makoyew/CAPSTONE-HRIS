<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Evaluation Result') }}
        </h2>
    </x-slot>


    <div class="flex justify-left">
        <a href="{{ route('evaluations.index') }}" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">
            Back
        </a>
    </div>

    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg m-2">
        <h1 class="text-2xl font-semibold mb-4">Employee's Information</h1>

        <div class="flex items-center border-b border-gray-300 pb-4 mb-4">
            <!-- Employee Information -->
            <div class="flex-shrink-0 h-20 w-20">
                @if ($user->profile_picture)
                    <img class="h-20 w-20 rounded-full object-cover border-4 border-blue-500" src="{{ Storage::url($user->profile_picture) }}" alt="{{ $user->name }} Profile Picture">
                @else
                    <img class="h-20 w-20 rounded-full object-cover border-4 border-blue-500" src="{{ asset('images/default-profile.jpeg') }}" alt="{{ $user->name }} Profile Picture">
                @endif
            </div>

            <div class="ml-4">
                <div class="text-lg leading-6 font-medium text-gray-900">{{ $user->first_name }} {{$user->middle_name}} {{ $user->surname }}</div>
                <div class="text-sm text-gray-500">{{ $user->email }}</div>
                @if ($user->department)
                    <div class="text-sm text-gray-500">{{ $user->department->name }}</div>
                @else
                    <div class="text-sm text-gray-500">Department Not Assigned</div>
                @endif
            </div>

            <div class="border-l ml-4 border-gray-300"></div>

            <div class="flex-grow bg-gray-100 p-4 border-t border-gray-300">

                <p class="text-sm text-gray-700 leading-6">
                    Thank you for your dedication and hard work! Your performance has been outstanding. Keep up the great work, and feel free to reach out if you have any questions or if there's anything you'd like to discuss further. Your contributions are highly valued.
                </p>
            </div>

        </div>
    </div>

    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg m-2">
        <h2 class="text-2xl font-semibold mb-4 text-center">A. CLASSROOM MANAGEMENT </h2>
        <table class="w-full mb-4">
            <thead>
                <tr>
                    <th class="py-2 px-4 text-center border text-lg">{{ $user->first_name }} {{ $user->middle_name }} {{$user->surname}}</th>
                    <th class="py-2 px-4 text-center border">Excellent (5)</th>
                    <th class="py-2 px-4 text-center border">Very Good (4)</th>
                    <th class="py-2 px-4 text-center border">Good (3)</th>
                    <th class="py-2 px-4 text-center border">Fair (2)</th>
                    <th class="py-2 px-4 text-center border">Poor (1)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4 border">1. Is neat and well-groomed and manifests decency in his/her <br>
                        attire.</td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_1a" value="5" {{ $evaluationData->rating_1a == 5 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_1a" value="4" {{ $evaluationData->rating_1a == 4 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_1a" value="3" {{ $evaluationData->rating_1a == 3 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_1a" value="2" {{ $evaluationData->rating_1a == 2 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_1a" value="1" {{ $evaluationData->rating_1a == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">2. Is free from distracting mannerisms.</td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_2a" value="5" {{ $evaluationData->rating_2a == 5 ? 'checked' : '' }} >
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_2a" value="4" {{ $evaluationData->rating_2a == 4 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_2a" value="3" {{ $evaluationData->rating_2a == 3 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_2a" value="2" {{ $evaluationData->rating_2a == 2 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_2a" value="1" {{ $evaluationData->rating_2a == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">3. Can command respect and attention in the class.</td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_3a" value="5" {{ $evaluationData->rating_3a == 5 ? 'checked' : '' }} >
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_3a" value="4" {{ $evaluationData->rating_3a == 4 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_3a" value="3" {{ $evaluationData->rating_3a == 3 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_3a" value="2" {{ $evaluationData->rating_3a == 2 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_3a" value="1" {{ $evaluationData->rating_3a == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">4. Shows dynamism and enthusiasm in teaching.</td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_4a" value="5" {{ $evaluationData->rating_4a == 5 ? 'checked' : '' }} >
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_4a" value="4" {{ $evaluationData->rating_4a == 4 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_4a" value="3" {{ $evaluationData->rating_4a == 3 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_4a" value="2" {{ $evaluationData->rating_4a == 2 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_4a" value="1" {{ $evaluationData->rating_4a == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">5. delivers the lesson with a well-modulated voice.</td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_5a" value="5" {{ $evaluationData->rating_5a == 5 ? 'checked' : '' }} >
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_5a" value="4" {{ $evaluationData->rating_5a == 4 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_5a" value="3" {{ $evaluationData->rating_5a == 3 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_5a" value="2" {{ $evaluationData->rating_5a == 2 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_5a" value="1" {{ $evaluationData->rating_5a == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">6. establishes eye contact in delivering the lesson.</td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_6a" value="5" {{ $evaluationData->rating_6a == 5 ? 'checked' : '' }} >
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_6a" value="4" {{ $evaluationData->rating_6a == 4 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_6a" value="3" {{ $evaluationData->rating_6a == 3 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_6a" value="2" {{ $evaluationData->rating_6a == 2 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_6a" value="1" {{ $evaluationData->rating_6a == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">7. Manifests a non-threatening personality which enhances <br>
                        student-teacher relationship.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_7a" value="5" {{ $evaluationData->rating_7a == 5 ? 'checked' : '' }} >
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_7a" value="4" {{ $evaluationData->rating_7a == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_7a" value="3" {{ $evaluationData->rating_7a == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_7a" value="2" {{ $evaluationData->rating_7a == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_7a" value="1" {{ $evaluationData->rating_7a == 1 ? 'checked' : '' }}>
                        </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">8. Shows a sense of humor that makes the class alive.</td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_8a" value="5" {{ $evaluationData->rating_8a == 5 ? 'checked' : '' }} >
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_8a" value="4" {{ $evaluationData->rating_8a == 4 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_8a" value="3" {{ $evaluationData->rating_8a == 3 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_8a" value="2" {{ $evaluationData->rating_8a == 2 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_8a" value="1" {{ $evaluationData->rating_8a == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">9. Displays a self-confidence in delivering the lesson.</td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_9a" value="5" {{ $evaluationData->rating_9a == 5 ? 'checked' : '' }} >
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_9a" value="4" {{ $evaluationData->rating_9a == 4 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_9a" value="3" {{ $evaluationData->rating_9a == 3 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_9a" value="2" {{ $evaluationData->rating_9a == 2 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_9a" value="1" {{ $evaluationData->rating_9a == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">10. Exercises tact and show respect and fairness in dealing <br>
                        with the students.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_10a" value="5" {{ $evaluationData->rating_10a == 5 ? 'checked' : '' }} >
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_10a" value="4" {{ $evaluationData->rating_10a == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_10a" value="3" {{ $evaluationData->rating_10a == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_10a" value="2" {{ $evaluationData->rating_10a == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_10a" value="1" {{ $evaluationData->rating_10a == 1 ? 'checked' : '' }}>
                        </td>
                </tr>
            </tbody>
        </table>

        <div class="w-3/4 mr-4">
            <label for="comments_c" class="block text-gray-700 font-semibold">Comments:</label>
            <p>{{ $evaluationData->comments_a ?? 'No comments' }}</p>
        </div>

        <h2 class="text-2xl font-semibold mb-4 mt-5 text-center">B. TEACHER'S KNOWLEDGE OF THE SUBJECT MATTER </h2>
            <table class="w-full mb-4">
                <thead>
                    <tr>
                        <th class="py-2 px-4 text-center border text-lg">{{ $user->first_name }} {{ $user->middle_name }} {{$user->surname}}</th>
                        <th class="py-2 px-4 text-center border">Excellent (5)</th>
                        <th class="py-2 px-4 text-center border">Very Good (4)</th>
                        <th class="py-2 px-4 text-center border">Good (3)</th>
                        <th class="py-2 px-4 text-center border">Fair (2)</th>
                        <th class="py-2 px-4 text-center border">Poor (1)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border">1. Manifests mastery of the topic being discussed.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1b" value="5" {{ $evaluationData->rating_1b == 5 ? 'checked' : '' }} >
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1b" value="4" {{ $evaluationData->rating_1b == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1b" value="3" {{ $evaluationData->rating_1b == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1b" value="2" {{ $evaluationData->rating_1b == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1b" value="1" {{ $evaluationData->rating_1b == 1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">2. Presents the lesson in an interesting and organized matter.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2b" value="5" {{ $evaluationData->rating_2b == 5 ? 'checked' : '' }} >
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2b" value="4" {{ $evaluationData->rating_2b == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2b" value="3" {{ $evaluationData->rating_2b == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2b" value="2" {{ $evaluationData->rating_2b == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2b" value="1" {{ $evaluationData->rating_2b == 1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">3. Aligns the parts of the lesson with the course learning <br>
                            outcomes.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3b" value="5" {{ $evaluationData->rating_3b == 5 ? 'checked' : '' }} >
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3b" value="4" {{ $evaluationData->rating_3b == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3b" value="3" {{ $evaluationData->rating_3b == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3b" value="2" {{ $evaluationData->rating_3b == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3b" value="1" {{ $evaluationData->rating_3b == 1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">4. Sets clear expectations of student's performance.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4b" value="5" {{ $evaluationData->rating_4b == 5 ? 'checked' : '' }} >
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4b" value="4" {{ $evaluationData->rating_4b == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4b" value="3" {{ $evaluationData->rating_4b == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4b" value="2" {{ $evaluationData->rating_4b == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4b" value="1" {{ $evaluationData->rating_4b == 1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">5. Explains the subject matter without completely <br>
                            relying on the references.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5b" value="5" {{ $evaluationData->rating_5b == 5 ? 'checked' : '' }} >
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5b" value="4" {{ $evaluationData->rating_5b == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5b" value="3" {{ $evaluationData->rating_5b == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5b" value="2" {{ $evaluationData->rating_5b == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5b" value="1" {{ $evaluationData->rating_5b == 1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">6. Relates the subject matter to real life situations.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6b" value="5" {{ $evaluationData->rating_6b == 5 ? 'checked' : '' }} >
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6b" value="4" {{ $evaluationData->rating_6b == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6b" value="3" {{ $evaluationData->rating_6b == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6b" value="2" {{ $evaluationData->rating_6b == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6b" value="1" {{ $evaluationData->rating_6b == 1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">7. Clarifies ideas in answer to students' questions <br>
                            regarding the lesson.</td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7b" value="5" {{ $evaluationData->rating_7b == 5 ? 'checked' : '' }} >
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7b" value="4" {{ $evaluationData->rating_7b == 4 ? 'checked' : '' }}>
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7b" value="3" {{ $evaluationData->rating_7b == 3 ? 'checked' : '' }}>
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7b" value="2" {{ $evaluationData->rating_7b == 2 ? 'checked' : '' }}>
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7b" value="1" {{ $evaluationData->rating_7b == 1 ? 'checked' : '' }}>
                            </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">8. Elaborates lessons with current developments <br>
                            or up-to-date information on the subject matter.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8b" value="5" {{ $evaluationData->rating_8b == 5 ? 'checked' : '' }} >
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8b" value="4" {{ $evaluationData->rating_8b == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8b" value="3" {{ $evaluationData->rating_8b == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8b" value="2" {{ $evaluationData->rating_8b == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8b" value="1" {{ $evaluationData->rating_8b == 1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">9. Integrates values in the lesson.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9b" value="5" {{ $evaluationData->rating_9b == 5 ? 'checked' : '' }} >
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9b" value="4" {{ $evaluationData->rating_9b == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9b" value="3" {{ $evaluationData->rating_9b == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9b" value="2" {{ $evaluationData->rating_9b == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9b" value="1" {{ $evaluationData->rating_9b == 1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">10. Maximizes the use of instructional time <br>
                            for students' participation.</td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10b" value="5" {{ $evaluationData->rating_10b == 5 ? 'checked' : '' }} >
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10b" value="4" {{ $evaluationData->rating_10b == 4 ? 'checked' : '' }}>
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10b" value="3" {{ $evaluationData->rating_10b == 3 ? 'checked' : '' }}>
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10b" value="2" {{ $evaluationData->rating_10b == 2 ? 'checked' : '' }}>
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10b" value="1" {{ $evaluationData->rating_10b == 1 ? 'checked' : '' }}>
                            </td>
                    </tr>
                </tbody>
            </table>

        <div class="w-3/4 mr-4">
            <label for="comments_c" class="block text-gray-700 font-semibold">Comments:</label>
            <p>{{ $evaluationData->comments_b ?? 'No comments' }}</p>
        </div>

        <h2 class="text-2xl font-semibold mb-4 mt-5 text-center">C. CLASSROOM MANAGEMENT </h2>
            <table class="w-full mb-4">
                <thead>
                    <tr>
                        <th class="py-2 px-4 text-center border text-lg">{{ $user->first_name }} {{ $user->middle_name }} {{$user->surname}}</th>
                        <th class="py-2 px-4 text-center border">Excellent (5)</th>
                        <th class="py-2 px-4 text-center border">Very Good (4)</th>
                        <th class="py-2 px-4 text-center border">Good (3)</th>
                        <th class="py-2 px-4 text-center border">Fair (2)</th>
                        <th class="py-2 px-4 text-center border">Poor (1)</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td class="py-2 px-4 border">1. Starts and ends the class on time.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1c" value="5" {{ $evaluationData->rating_1c == 5 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1c" value="4" {{ $evaluationData->rating_1c == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1c" value="3" {{ $evaluationData->rating_1c == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1c" value="2" {{ $evaluationData->rating_1c == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1c" value="1" {{ $evaluationData->rating_1c == 1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">2. Checks attendance systematically.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2c" value="5" {{ $evaluationData->rating_2c == 5 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2c" value="4" {{ $evaluationData->rating_2c == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2c" value="3" {{ $evaluationData->rating_2c == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2c" value="2" {{ $evaluationData->rating_2c == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2c" value="1" {{ $evaluationData->rating_2c == 1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">3. Establishes a conductive learning environment.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3c" value="5" {{ $evaluationData->rating_3c == 5 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3c" value="4" {{ $evaluationData->rating_3c == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3c" value="3" {{ $evaluationData->rating_3c == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3c" value="2" {{ $evaluationData->rating_3c == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3c" value="1" {{ $evaluationData->rating_3c == 1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">4. Make sure that order and discipline are being <br>
                            observed in the class.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4c" value="5" {{ $evaluationData->rating_4c == 5 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4c" value="4" {{ $evaluationData->rating_4c == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4c" value="3" {{ $evaluationData->rating_4c == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4c" value="2" {{ $evaluationData->rating_4c == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4c" value="1" {{ $evaluationData->rating_4c == 1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">5. Spends time efficiently by refraining from discussing <br>
                            topics not related to the lesson.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5c" value="5" {{ $evaluationData->rating_5c == 5 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5c" value="4" {{ $evaluationData->rating_5c == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5c" value="3" {{ $evaluationData->rating_5c == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5c" value="2" {{ $evaluationData->rating_5c == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5c" value="1" {{ $evaluationData->rating_5c == 1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">6. Uses varied teaching strategies to achieve <br>
                            the learning outcomes.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6c" value="5" {{ $evaluationData->rating_6c == 5 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6c" value="4" {{ $evaluationData->rating_6c == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6c" value="3" {{ $evaluationData->rating_6c == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6c" value="2" {{ $evaluationData->rating_6c == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6c" value="1" {{ $evaluationData->rating_6c == 1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">7. Motivates the students by giving praises and words <br>
                            of affirmation.</td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7c" value="5" {{ $evaluationData->rating_7c == 5 ? 'checked' : '' }}>
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7c" value="4" {{ $evaluationData->rating_7c == 4 ? 'checked' : '' }}>
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7c" value="3" {{ $evaluationData->rating_7c == 3 ? 'checked' : '' }}>
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7c" value="2" {{ $evaluationData->rating_7c == 2 ? 'checked' : '' }}>
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7c" value="1" {{ $evaluationData->rating_7c == 1 ? 'checked' : '' }}>
                            </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">8. Utilizes varied instructional materials and integrates <br>
                            technology in teaching.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8c" value="5" {{ $evaluationData->rating_8c == 5 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8c" value="4" {{ $evaluationData->rating_8c == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8c" value="3" {{ $evaluationData->rating_8c == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8c" value="2" {{ $evaluationData->rating_8c == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8c" value="1" {{ $evaluationData->rating_8c == 1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">9. Prescribes reasonable course requirements within <br>
                            reasonable time.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9c" value="5" {{ $evaluationData->rating_9c == 5 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9c" value="4" {{ $evaluationData->rating_9c == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9c" value="3" {{ $evaluationData->rating_9c == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9c" value="2" {{ $evaluationData->rating_9c == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9c" value="1" {{ $evaluationData->rating_9c == 1 ? 'checked' : '' }}>
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">10. Evaluates students' performance and informs them <br>
                            of the outcomes.</td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10c" value="5" {{ $evaluationData->rating_10c == 5 ? 'checked' : '' }}>
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10c" value="4" {{ $evaluationData->rating_10c == 4 ? 'checked' : '' }}>
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10c" value="3" {{ $evaluationData->rating_10c == 3 ? 'checked' : '' }}>
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10c" value="2" {{ $evaluationData->rating_10c == 2 ? 'checked' : '' }}>
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10c" value="1" {{ $evaluationData->rating_10c == 1 ? 'checked' : '' }}>
                            </td>
                    </tr>
                </tbody>
            </table>

        <div class="w-3/4 mr-4">
            <label for="comments_c" class="block text-gray-700 font-semibold">Comments:</label>
            <p>{{ $evaluationData->comments_c ?? 'No comments' }}</p>
        </div>

        <h2 class="text-2xl font-semibold mb-4 mt-5 text-center">D. TEACHER'S TECHNIQUES FOR INDEPENDENT LEARNING </h2>
        <table class="w-full mb-4">
            <thead>
                <tr>
                    <th class="py-2 px-4 text-center border text-lg">{{ $user->first_name }} {{ $user->middle_name }} {{$user->surname}}</th>
                    <th class="py-2 px-4 text-center border">Excellent (5)</th>
                    <th class="py-2 px-4 text-center border">Very Good (4)</th>
                    <th class="py-2 px-4 text-center border">Good (3)</th>
                    <th class="py-2 px-4 text-center border">Fair (2)</th>
                    <th class="py-2 px-4 text-center border">Poor (1)</th>
                </tr>
            </thead>
            <tbody>
                <tr>
                    <td class="py-2 px-4 border">1. Incorporates independent study through library work <br>
                        and research activities.</td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_1d" value="5" {{ $evaluationData->rating_1d == 5 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_1d" value="4" {{ $evaluationData->rating_1d == 4 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_1d" value="3" {{ $evaluationData->rating_1d == 3 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_1d" value="2" {{ $evaluationData->rating_1d == 2 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_1d" value="1" {{ $evaluationData->rating_1d == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">2. Promotes teacher-student and student-student interactions.</td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_2d" value="5" {{ $evaluationData->rating_2d == 5 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_2d" value="4" {{ $evaluationData->rating_2d == 4 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_2d" value="3" {{ $evaluationData->rating_2d == 3 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_2d" value="2" {{ $evaluationData->rating_2d == 2 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_2d" value="1" {{ $evaluationData->rating_2d == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">3. Gives interesting and imaginative, stimulating <br>
                        or challenging activities.</td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_3d" value="5" {{ $evaluationData->rating_3d == 5 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_3d" value="4" {{ $evaluationData->rating_3d == 4 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_3d" value="3" {{ $evaluationData->rating_3d == 3 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_3d" value="2" {{ $evaluationData->rating_3d == 2 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_3d" value="1" {{ $evaluationData->rating_3d == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">4. Encourages the students to ask questions, raise problems, <br>
                        and present solutions.</td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_4d" value="5" {{ $evaluationData->rating_4d == 5 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_4d" value="4" {{ $evaluationData->rating_4d == 4 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_4d" value="3" {{ $evaluationData->rating_4d == 3 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_4d" value="2" {{ $evaluationData->rating_4d == 2 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_4d" value="1" {{ $evaluationData->rating_4d == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">5. Asks different types of questions to stimulate analytical <br>
                        and critical thinking.</td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_5d" value="5" {{ $evaluationData->rating_5d == 5 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_5d" value="4" {{ $evaluationData->rating_5d == 4 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_5d" value="3" {{ $evaluationData->rating_5d == 3 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_5d" value="2" {{ $evaluationData->rating_5d == 2 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_5d" value="1" {{ $evaluationData->rating_5d == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">6. Provides appropriate worksheets, exercises, activities, <br>
                        and handouts to students.</td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_6d" value="5" {{ $evaluationData->rating_6d == 5 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_6d" value="4" {{ $evaluationData->rating_6d == 4 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_6d" value="3" {{ $evaluationData->rating_6d == 3 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_6d" value="2" {{ $evaluationData->rating_6d == 2 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_6d" value="1" {{ $evaluationData->rating_6d == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">7. Employs cooperative learning activities to encourage <br>
                        interaction and deepen discussion.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_7d" value="5" {{ $evaluationData->rating_7d == 5 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_7d" value="4" {{ $evaluationData->rating_7d == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_7d" value="3" {{ $evaluationData->rating_7d == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_7d" value="2" {{ $evaluationData->rating_7d == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_7d" value="1" {{ $evaluationData->rating_7d == 1 ? 'checked' : '' }}>
                        </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">8. Motivates students to do reflective thinking and relate <br>
                        learning to daily life.</td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_8d" value="5" {{ $evaluationData->rating_8d == 5 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_8d" value="4" {{ $evaluationData->rating_8d == 4 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_8d" value="3" {{ $evaluationData->rating_8d == 3 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_8d" value="2" {{ $evaluationData->rating_8d == 2 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_8d" value="1" {{ $evaluationData->rating_8d == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">9. Provides an atmosphere that stimulates learning by <br>
                        encouraging students to ask questions, raise problems, <br>
                        and propose solutions.</td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_9d" value="5" {{ $evaluationData->rating_9d == 5 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_9d" value="4" {{ $evaluationData->rating_9d == 4 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_9d" value="3" {{ $evaluationData->rating_9d == 3 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_9d" value="2" {{ $evaluationData->rating_9d == 2 ? 'checked' : '' }}>
                    </td>
                    <td class="py-2 px-4 border text-center">
                        <input type="radio" name="rating_9d" value="1" {{ $evaluationData->rating_9d == 1 ? 'checked' : '' }}>
                    </td>
                </tr>
                <tr>
                    <td class="py-2 px-4 border">10. Encourages students' participation in formulating class <br>
                        rules and leatning activities.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_10d" value="5" {{ $evaluationData->rating_10d == 5 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_10d" value="4" {{ $evaluationData->rating_10d == 4 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_10d" value="3" {{ $evaluationData->rating_10d == 3 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_10d" value="2" {{ $evaluationData->rating_10d == 2 ? 'checked' : '' }}>
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_10d" value="1" {{ $evaluationData->rating_10d == 1 ? 'checked' : '' }}>
                        </td>
                </tr>
            </tbody>
        </table>
        </table>

        <div class="mb-4 flex">
            <div class="w-3/4 mr-4">
                <label for="comments_d" class="block text-gray-700 font-semibold">Comments:</label>
                <p>{{ $evaluationData->comments_d ?? 'No comments' }}</p>
            </div>
        </div>

        <div class="flex justify-end mt-8">
            <div class="bg-gray-200 p-4 rounded-lg">
                <p class="text-lg font-semibold mb-2">Overall Rating:</p>
                <p id="overallRating" class="text-3xl font-bold text-blue-600 text-center">
                    {{ $evaluationData->overall_rating ?? '0.00' }}
                </p>
            </div>
        </div>
    </div>

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            // Assuming jQuery is available, if not, you can use plain JavaScript
            $('input[type=radio]').prop('disabled', true);
        });
    </script>
</x-app-layout>

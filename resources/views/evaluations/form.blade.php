<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-xl text-gray-800 leading-tight">
            {{ __('Evaluate Employee') }}
        </h2>
    </x-slot>

    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg m-4">
        <h2 class="text-2xl font-semibold mb-4">A. TEACHER'S PERSONALITY </h2>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 border-l-4 border-green-500 p-3 mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="bg-green-200 text-green-800 border-l-4 border-green-500 p-3 mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form id="form1" action="{{ route('evaluations.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">
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
                            <input type="radio" name="rating_1" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">2. Is free from distracting mannerisms.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">3. Can command respect and attention in the class.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">4. Shows dynamism and enthusiasm in teaching.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">5. delivers the lesson with a well-modulated voice.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">6. establishes eye contact in delivering the lesson.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">7. Manifests a non-threatening personality which enhances <br>
                            student-teacher relationship.</td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="5">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="4">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="3">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="2">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="1">
                            </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">8. Shows a sense of humor that makes the class alive.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">9. Displays a self-confidence in delivering the lesson.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">10. Exercises tact and show respect and fairness in dealing <br>
                            with the students.</td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="5">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="4">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="3">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="2">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="1">
                            </td>
                    </tr>
                </tbody>
            </table>
            <div class="mb-4 flex">
                <div class="w-3/4 mr-4">
                    <label for="comments1" class="block text-gray-700 font-semibold">Comments:</label>
                    <textarea name="comments" id="comments1" class="form-textarea mt-1 block w-full rounded-md border-gray-300" style="resize: vertical; max-height: 150px;"></textarea>
                </div>

                <div class="w-1/4 mt-3">
                    <p class="text-center text-lg font-semibold mb-2">Total Rating:</p>
                    <p id="totalRating_form1" class="text-3xl font-bold text-center">0</p>
                </div>
            </div>

            {{-- <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">Submit Evaluation</button> --}}
        </form>
    </div>

    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg m-4">
        <h2 class="text-2xl font-semibold mb-4">B. TEACHER'S KNOWLEDGE OF THE SUBJECT MATTER </h2>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 border-l-4 border-green-500 p-3 mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="bg-green-200 text-green-800 border-l-4 border-green-500 p-3 mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form id="form2" action="{{ route('evaluations.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">
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
                            <input type="radio" name="rating_1" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">2. Presents the lesson in an interesting and organized matter.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">3. Aligns the parts of the lesson with the course learning <br>
                            outcomes.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">4. Sets clear expectations of student's performance.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">5. Explains the subject matter without completely <br>
                            relying on the references.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">6. Relates the subject matter to real life situations.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">7. Clarifies ideas in answer to students' questions <br>
                            regarding the lesson.</td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="5">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="4">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="3">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="2">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="1">
                            </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">8. Elaborates lessons with current developments <br>
                            or up-to-date information on the subject matter.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">9. Integrates values in the lesson.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">10. Maximizes the use of instructional time <br>
                            for students' participation.</td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="5">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="4">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="3">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="2">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="1">
                            </td>
                    </tr>
                </tbody>
            </table>
            <div class="mb-4 flex">
                <div class="w-3/4 mr-4">
                    <label for="comments2" class="block text-gray-700 font-semibold">Comments:</label>
                    <textarea name="comments" id="comments2" class="form-textarea mt-1 block w-full rounded-md border-gray-300" style="resize: vertical; max-height: 150px;"></textarea>
                </div>

                <div class="w-1/4 mt-3">
                    <p class="text-center text-lg font-semibold mb-2">Total Rating:</p>
                    <p id="totalRating_form2" class="text-3xl font-bold text-center">0</p>
                </div>
            </div>

            {{-- <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">Submit Evaluation</button> --}}
        </form>
    </div>

    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg m-4">
        <h2 class="text-2xl font-semibold mb-4">C. CLASSROOM MANAGEMENT </h2>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 border-l-4 border-green-500 p-3 mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="bg-green-200 text-green-800 border-l-4 border-green-500 p-3 mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form id="form3" action="{{ route('evaluations.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">
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
                            <input type="radio" name="rating_1" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">2. Checks attendance systematically.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">3. Establishes a conductive learning environment.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">4. Make sure that order and discipline are being <br>
                            observed in the class.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">5. Spends time efficiently by refraining from discussing <br>
                            topics not related to the lesson.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">6. Uses varied teaching strategies to achieve <br>
                            the learning outcomes.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">7. Motivates the students by giving praises and words <br>
                            of affirmation.</td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="5">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="4">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="3">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="2">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="1">
                            </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">8. Utilizes varied instructional materials and integrates <br>
                            technology in teaching.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">9. Prescribes reasonable course requirements within <br>
                            reasonable time.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">10. Evaluates students' performance and informs them <br>
                            of the outcomes.</td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="5">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="4">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="3">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="2">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="1">
                            </td>
                    </tr>
                </tbody>
            </table>
            <div class="mb-4 flex">
                <div class="w-3/4 mr-4">
                    <label for="comments3" class="block text-gray-700 font-semibold">Comments:</label>
                    <textarea name="comments" id="comments3" class="form-textarea mt-1 block w-full rounded-md border-gray-300" style="resize: vertical; max-height: 150px;"></textarea>
                </div>

                <div class="w-1/4 mt-3">
                    <p class="text-center text-lg font-semibold mb-2">Total Rating:</p>
                    <p id="totalRating_form3" class="text-3xl font-bold text-center">0</p>
                </div>
            </div>

            {{-- <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">Submit Evaluation</button> --}}
        </form>
    </div>

    <div class="container mx-auto p-6 bg-white rounded-lg shadow-lg m-4">
        <h2 class="text-2xl font-semibold mb-4">D. TEACHER'S TECHNIQUES FOR INDEPENDENT LEARNING </h2>

        @if(session('success'))
            <div class="bg-green-200 text-green-800 border-l-4 border-green-500 p-3 mb-4">
                {{ session('success') }}
            </div>
        @endif
        @if(session('error'))
            <div class="bg-green-200 text-green-800 border-l-4 border-green-500 p-3 mb-4">
                {{ session('error') }}
            </div>
        @endif

        <form id="form4" action="{{ route('evaluations.submit') }}" method="POST">
            @csrf
            <input type="hidden" name="user_id" value="{{ $user->id }}">
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
                            <input type="radio" name="rating_1" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_1" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">2. Promotes teacher-student and student-student interactions.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_2" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">3. Gives interesting and imaginative, stimulating <br>
                            or challenging activities.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_3" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">4. Encourages the students to ask questions, raise problems, <br>
                            and present solutions.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_4" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">5. Asks different types of questions to stimulate analytical <br>
                            and critical thinking.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_5" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">6. Provides appropriate worksheets, exercises, activities, <br>
                            and handouts to students.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_6" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">7. Employs cooperative learning activities to encourage <br>
                            interaction and deepen discussion.</td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="5">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="4">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="3">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="2">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_7" value="1">
                            </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">8. Motivates students to do reflective thinking and relate <br>
                            learning to daily life.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_8" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">9. Provides an atmosphere that stimulates learning by <br>
                            encouraging students to ask questions, raise problems, <br>
                            and propose solutions.</td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="5">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="4">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="3">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="2">
                        </td>
                        <td class="py-2 px-4 border text-center">
                            <input type="radio" name="rating_9" value="1">
                        </td>
                    </tr>
                    <tr>
                        <td class="py-2 px-4 border">10. Encourages students' participation in formulating class <br>
                            rules and leatning activities.</td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="5">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="4">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="3">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="2">
                            </td>
                            <td class="py-2 px-4 border text-center">
                                <input type="radio" name="rating_10" value="1">
                            </td>
                    </tr>
                </tbody>
            </table>
            <div class="mb-4 flex">
                <div class="w-3/4 mr-4">
                    <label for="comments4" class="block text-gray-700 font-semibold">Comments:</label>
                    <textarea name="comments" id="comments4" class="form-textarea mt-1 block w-full rounded-md border-gray-300" style="resize: vertical; max-height: 150px;"></textarea>
                </div>

                <div class="w-1/4 mt-3">
                    <p class="text-center text-lg font-semibold mb-2">Total Rating:</p>
                    <p id="totalRating_form4" class="text-3xl font-bold text-center">0</p>
                </div>
            </div>
        </form>
    </div>

    <div class="flex justify-end mt-8">
        <div class="bg-gray-200 p-4 rounded-lg">
            <p class="text-lg font-semibold mb-2">Overall Rating:</p>
            <p id="overallRating" class="text-3xl font-bold text-blue-600 text-center">0.00</p>
        </div>
    </div>


    {{-- <div class="flex justify-end">
        <button type="submit" class="bg-blue-500 hover:bg-blue-600 text-white font-semibold py-2 px-4 rounded-md">Submit Evaluation</button>
    </div> --}}

    <script>
        document.addEventListener("DOMContentLoaded", function () {
            function calculateTotalRating(formId) {
                var ratingInputs = document.querySelectorAll('form#' + formId + ' input[name^="rating_"]');

                var totalRatingElement = document.getElementById('totalRating_' + formId);

                var totalRating = Array.from(ratingInputs)
                    .filter(function (input) {
                        return input.checked;
                    })
                    .reduce(function (sum, input) {
                        return sum + parseInt(input.value);
                    }, 0);

                totalRatingElement.textContent = totalRating;
            }

            var form1RatingInputs = document.querySelectorAll('form#form1 input[name^="rating_"]');
            form1RatingInputs.forEach(function (input) {
                input.addEventListener('change', function () {
                    calculateTotalRating('form1');
                    updateOverallRating();
                });
            });

            var form2RatingInputs = document.querySelectorAll('form#form2 input[name^="rating_"]');
            form2RatingInputs.forEach(function (input) {
                input.addEventListener('change', function () {
                    calculateTotalRating('form2');
                    updateOverallRating();
                });
            });

            var form3RatingInputs = document.querySelectorAll('form#form3 input[name^="rating_"]');
            form3RatingInputs.forEach(function (input) {
                input.addEventListener('change', function () {
                    calculateTotalRating('form3');
                    updateOverallRating();
                });
            });

            var form4RatingInputs = document.querySelectorAll('form#form4 input[name^="rating_"]');
            form4RatingInputs.forEach(function (input) {
                input.addEventListener('change', function () {
                    calculateTotalRating('form4');
                    updateOverallRating();
                });
            });

            function updateOverallRating() {
                // Get the total ratings from all forms
                var totalRatingForm1 = parseInt(document.getElementById('totalRating_form1').textContent) || 0;
                var totalRatingForm2 = parseInt(document.getElementById('totalRating_form2').textContent) || 0;
                var totalRatingForm3 = parseInt(document.getElementById('totalRating_form3').textContent) || 0;
                var totalRatingForm4 = parseInt(document.getElementById('totalRating_form4').textContent) || 0;

                // Calculate the overall rating
                var overallRating = (totalRatingForm1 + totalRatingForm2 + totalRatingForm3 + totalRatingForm4) / 4;

                // Display the overall rating
                document.getElementById('overallRating').textContent = overallRating.toFixed(2);
            }
        });
    </script>
</x-app-layout>

<x-app-layout>
    <x-slot name="header">
        <h2 class="font-semibold text-2xl text-gray-800 leading-tight">
            {{ __('Leave Request Details') }}
        </h2>
    </x-slot>

    <div class="py-6">
        <div class="max-w-3xl mx-auto bg-white shadow-md rounded-lg overflow-hidden">
            <div class="px-6 py-4">
                <h2 class="text-xl font-semibold mb-4 text-indigo-600">Leave Request Details</h2>

                <form>
                    <div class="grid grid-cols-2 gap-4">
                        <div>
                            <label class="text-gray-600 font-semibold block mb-1">Full Name:</label>
                            <input type="text" value="{{ $leaveRequest->user->surname }}, {{$leaveRequest->user->first_name}} " readonly class="bg-gray-100 px-3 py-2 rounded-md w-full" />
                        </div>
                        <div>
                            <label class="text-gray-600 font-semibold block mb-1">Department:</label>
                            <input type="text" value="{{ $leaveRequest->user->department->name }}" readonly class="bg-gray-100 px-3 py-2 rounded-md w-full" />
                        </div>
                        <div>
                            <label class="text-gray-600 font-semibold block mb-1">Start Date:</label>
                            <input type="text" value="{{ $leaveRequest->start_date }}" readonly class="bg-gray-100 px-3 py-2 rounded-md w-full" />
                        </div>
                        <div>
                            <label class="text-gray-600 font-semibold block mb-1">End Date:</label>
                            <input type="text" value="{{ $leaveRequest->end_date }}" readonly class="bg-gray-100 px-3 py-2 rounded-md w-full" />
                        </div>
                        <div>
                            <label class="text-gray-600 font-semibold block mb-1">Leave Type:</label>
                            <input type="text" value="{{ $leaveRequest->leave_type }}" readonly class="bg-gray-100 px-3 py-2 rounded-md w-full" />
                            @if ($leaveRequest->leave_type === 'sick' && !empty($leaveRequest->other_reason))
                                <label class="text-gray-600 font-semibold block mb-1 mt-4">Others, please specify:</label>
                                <input type="text" value="{{ $leaveRequest->other_reason }}" readonly class="bg-gray-100 px-3 py-2 rounded-md w-full" />
                            @endif
                        </div>
                        <div>
                            <label class="text-gray-600 font-semibold block mb-1">Reason:</label>
                            @if ($leaveRequest->leave_type === 'sick')
                                <input type="text" value="{{ $leaveRequest->reason }}" readonly class="bg-gray-100 px-3 py-2 rounded-md w-full" />
                            @else
                                <input type="text" value="{{ $leaveRequest->other_reason }}" readonly class="bg-gray-100 px-3 py-2 rounded-md w-full" />
                            @endif
                        </div>
                    </div>
                    <div>
                        <label class="text-gray-600 font-semibold block mb-1 mt-4">Status:</label>
                        <input type="text" value="{{ $leaveRequest->status }}" readonly class="bg-gray-100 px-3 py-2 rounded-md w-full" />
                    </div>
                </form>

                <!-- Actions Buttons (if pending) -->
<!-- Actions Buttons (if pending) -->
@if (
    ($leaveRequest->status === 'pending_supervisor' && auth()->user()->role === 'supervisor' && auth()->user()->department_id === $leaveRequest->user->department_id) ||
    ($leaveRequest->status === 'pending_admin' && auth()->user()->role === 'admin') ||
    ($leaveRequest->status === 'pending_admin_second' && auth()->user()->role === 'admin')
)
<div class="mt-6 flex flex-col items-center">
    <label class="text-gray-600 font-semibold mb-4">What would you like to do?</label>
    <div class="flex items-center">
        <form method="POST" action="{{ route('leave-requests.accept', $leaveRequest) }}" class="mr-4">
            @csrf
            <input type="hidden" name="approval_type" value="{{ auth()->user()->role }}">
            <button type="submit" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded-full">
                Approve
            </button>
        </form>

        <form method="POST" action="{{ route('leave-requests.reject', $leaveRequest) }}">
            @csrf
            <input type="hidden" name="rejection_type" value="{{ auth()->user()->role }}">
            <button type="submit" class="bg-red-500 hover:bg-red-700 text-white font-bold py-2 px-4 rounded-full">
                Reject
            </button>
        </form>
    </div>
</div>
@endif

            </div>
        </div>

        <!-- Back Button -->
        <div class="mt-6 text-center">
            <a href="{{ route('leave-requests.index') }}" class="text-indigo-600 hover:underline">Back to Leave Requests</a>
        </div>
    </div>
</x-app-layout>

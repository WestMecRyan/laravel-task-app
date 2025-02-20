@extends('layouts.app')

@section('content')
    <h1 class="text-2xl font-bold mb-4">All Tasks</h1>

    <ul>
        @forelse($tasks as $task)
            <li class="mb-2">
                {{ $task->task_name }}
            <!-- Link to the show page -->
                <a href="{{ route('tasks.show', $task->id) }}" class="text-blue-500 underline ml-2">
                    View
                </a>
            </li>

        @empty
            <li>No tasks yet.</li>
        @endforelse
    </ul>

    <div class="mt-4">
        <a href="{{ route('tasks.create') }}"
           class="bg-blue-500 text-white px-4 py-2 rounded hover:bg-blue-600">
            Create a New Task
        </a>
    </div>
@endsection
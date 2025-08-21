<!-- resources/views/todos/index.blade.php -->
@extends('layout')

@section('content')
<div class="card p-3 mb-4">
    <form action="{{ route('todos.store') }}" method="POST" class="row g-2 align-items-center">
        @csrf
        <div class="col-sm-8 col-md-9">
            <input type="text" name="title" class="form-control" placeholder="New task..." required>
        </div>
        <div class="col-sm-4 col-md-3">
            <button class="btn btn-primary w-100">Add</button>
        </div>
        @error('title')
            <div class="text-danger small mt-2">{{ $message }}</div>
        @enderror
    </form>
</div>

<ul class="list-group">
@forelse($todos as $todo)
    <li class="list-group-item d-flex justify-content-between align-items-center">
        <div>
            @if($todo->completed)
                <span class="badge bg-success me-2">Done</span>
                <del>{{ $todo->title }}</del>
            @else
                {{ $todo->title }}
            @endif
            <div class="text-muted small">Created {{ $todo->created_at->diffForHumans() }}</div>
        </div>
        <div class="d-flex gap-2">
            <form action="{{ route('todos.toggle', $todo) }}" method="POST">
                @csrf
                <button class="btn btn-outline-secondary btn-sm">
                    {{ $todo->completed ? 'Undo' : 'Complete' }}
                </button>
            </form>
            <form action="{{ route('todos.destroy', $todo) }}" method="POST" onsubmit="return confirm('Delete this task?')">
                @csrf
                @method('DELETE')
                <button class="btn btn-outline-danger btn-sm">Delete</button>
            </form>
        </div>
    </li>
@empty
    <li class="list-group-item text-muted">No tasks yet. Add your first one above.</li>
@endforelse
</ul>
@endsection

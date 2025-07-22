@extends('layouts.main')

@section('title', 'My Todo')

@section('content')
<div class="container py-3">
    <h3 class="text-center mb-4 fw-bold text-primary">🗂️ My Todo List</h3>

    @if (session('success'))
    <div class="alert alert-success alert-dismissible fade show" role="alert">
        {{ session('success') }}
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
    </div>
    @endif

    <div class="d-flex justify-content-between mb-3">
        <a href="/todo/create" class="btn btn-primary btn-sm">
            <i class="bi bi-plus-circle"></i> Add Todo
        </a>
        <div>
            <span class="text-muted">Total: {{ $todos->total() }}</span>
        </div>
    </div>

    {{-- Grid Card --}}
    <div class="row row-cols-1 row-cols-md-2 row-cols-lg-3 g-4">
        @foreach ($todos as $todo)
        <div class="col">
            <div class="card shadow-sm border-0 h-100">
                <div class="card-body">
                    <h5 class="card-title">{{ $todo->name }}</h5>
                    <p class="card-text small text-muted">
                        {!! Str::limit(strip_tags($todo->description), 100) !!}
                    </p>
                    <div class="d-flex justify-content-between align-items-center">
                        <span class="badge {{ $todo->is_done ? 'bg-success' : 'bg-warning text-dark' }}">
                            {{ $todo->is_done ? '✅ Done' : '⏳ Not Done' }}
                        </span>
                        <div class="d-flex gap-2">
                            <a href="/todo/{{$todo->id}}/edit" class="btn btn-sm btn-outline-warning" title="Edit">
                                <i class="bi bi-pencil"></i>
                            </a>
                            <form action="/todo/{{ $todo->id }}" method="post" onsubmit="return confirm('Delete this task?')" class="d-inline">
                                @csrf
                                @method('DELETE')
                                <button class="btn btn-sm btn-outline-danger" title="Delete">
                                    <i class="bi bi-trash3"></i>
                                </button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        @endforeach
    </div>

    {{-- Pagination --}}
    <div class="d-flex justify-content-center mt-4">
        {{ $todos->links() }}
    </div>
</div>
@endsection

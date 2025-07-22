@extends('layouts.main')

@section('title', 'Edit ToDo')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h4 class="card-title text-center fw-bold text-primary mb-3">
                        <i class="bi bi-pencil me-2"></i> Edit ToDo
                    </h4>

                    <a href="/todo" class="btn btn-outline-secondary btn-sm mb-4">
                        <i class="bi bi-arrow-left"></i> Back to Lists
                    </a>

                    <form method="POST" action="/todo/{{ $todo->id }}">
                        @method('put')
                        @csrf

                        {{-- Name --}}
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">List Name</label>
                            <input type="text" id="name" name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name', $todo->name) }}" placeholder="e.g. Selesaikan Mini Project">
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        {{-- Description --}}
                        <div class="mb-3">
                            <label for="description" class="form-label fw-semibold">List Description</label>
                            <input id="description" type="hidden" name="description" value="{{ old('description', $todo->description) }}">
                            <trix-editor input="description"></trix-editor>
                            @error('description')
                            <p class="text-danger small mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Status --}}
                        <div class="mb-4">
                            <label class="form-label fw-semibold mb-2 d-block">Status</label>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="is_done" id="is_done1" value="1" {{ $todo->is_done == 1 ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_done1">✅ Done</label>
                            </div>
                            <div class="form-check form-check-inline">
                                <input class="form-check-input" type="radio" name="is_done" id="is_done2" value="0" {{ $todo->is_done == 0 ? 'checked' : '' }}>
                                <label class="form-check-label" for="is_done2">⏳ Not Done</label>
                            </div>
                        </div>

                        {{-- Buttons --}}
                        <div class="d-flex justify-content-end">
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-save"></i> Update
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

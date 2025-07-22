@extends('layouts.main')

@section('title', 'Create ToDo')

@section('content')
<div class="container py-4">
    <div class="row justify-content-center">
        <div class="col-lg-8">
            <div class="card shadow-sm border-0">
                <div class="card-body">
                    <h4 class="card-title text-center fw-bold text-primary mb-3">
                        <i class="bi bi-pencil-square me-2"></i> Create New ToDo
                    </h4>

                    <a href="/todo" class="btn btn-outline-secondary btn-sm mb-4">
                        <i class="bi bi-arrow-left"></i> Back to Lists
                    </a>

                    <form method="POST" action="/todo">
                        @csrf

                        {{-- Name --}}
                        <div class="mb-3">
                            <label for="name" class="form-label fw-semibold">List Name</label>
                            <input type="text" id="name" name="name"
                                class="form-control @error('name') is-invalid @enderror"
                                value="{{ old('name') }}" placeholder="e.g. Belajar Laravel" autofocus>
                            @error('name')
                            <div class="invalid-feedback">
                                {{ $message }}
                            </div>
                            @enderror
                        </div>

                        {{-- Description --}}
                        <div class="mb-3">
                            <label for="description" class="form-label fw-semibold">List Description</label>
                            <input id="description" type="hidden" name="description" value="{{ old('description') }}">
                            <trix-editor input="description"></trix-editor>
                            @error('description')
                            <p class="text-danger small mt-1">{{ $message }}</p>
                            @enderror
                        </div>

                        {{-- Default Status --}}
                        <input type="hidden" name="is_done" value="0">

                        {{-- Buttons --}}
                        <div class="d-flex justify-content-end mt-4">
                            <button type="reset" class="btn btn-outline-danger me-2">
                                <i class="bi bi-x-circle"></i> Reset
                            </button>
                            <button type="submit" class="btn btn-primary">
                                <i class="bi bi-plus-circle"></i> Create
                            </button>
                        </div>

                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

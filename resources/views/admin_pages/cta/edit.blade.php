@extends('layouts.admin')

@section('title', 'Edit Call to Action')
@section('header', 'Edit Call to Action')
@section('subheader', 'Update call to action details')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.call_to_action.index') }}">Call to Actions</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.call_to_action.update', $call_to_action) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="background_image" class="form-label">Background Image</label>
                <input type="file" class="form-control" id="background_image" name="background_image" accept="image/*">
                @if ($call_to_action->background_image)
                    <img src="{{ asset('storage/' . $call_to_action->background_image) }}" alt="Current Image" class="img-thumbnail mt-2" style="max-width: 150px;">
                @endif
                @error('background_image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $call_to_action->title }}" required>
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="text" class="form-label">Text</label>
                <textarea class="form-control" id="text" name="text" rows="4" required>{{ $call_to_action->text }}</textarea>
                @error('text')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="button_text" class="form-label">Button Text</label>
                <input type="text" class="form-control" id="button_text" name="button_text" value="{{ $call_to_action->button_text }}" required>
                @error('button_text')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="button_url" class="form-label">Button URL</label>
                <input type="url" class="form-control" id="button_url" name="button_url" value="{{ $call_to_action->button_url }}" required>
                @error('button_url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection

@extends('layouts.admin')

@section('title', 'Edit About Section')
@section('header', 'Edit About Section')
@section('subheader', 'Update about section details')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.about.index') }}">About Sections</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.about.update', $about) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="section_title" class="form-label">Section Title</label>
                <input type="text" class="form-control" id="section_title" name="section_title" value="{{ $about->section_title }}" required>
                @error('section_title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="section_subtitle" class="form-label">Section Subtitle</label>
                <textarea class="form-control" id="section_subtitle" name="section_subtitle" rows="4" required>{{ $about->section_subtitle }}</textarea>
                @error('section_subtitle')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $about->title }}" required>
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Subtitle</label>
                <textarea class="form-control" id="subtitle" name="subtitle" rows="4" required>{{ $about->subtitle }}</textarea>
                @error('subtitle')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="list_item_1" class="form-label">List Item 1</label>
                <input type="text" class="form-control" id="list_item_1" name="list_item_1" value="{{ $about->list_item_1 }}" required>
                @error('list_item_1')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="list_item_2" class="form-label">List Item 2</label>
                <input type="text" class="form-control" id="list_item_2" name="list_item_2" value="{{ $about->list_item_2 }}" required>
                @error('list_item_2')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="list_item_3" class="form-label">List Item 3</label>
                <input type="text" class="form-control" id="list_item_3" name="list_item_3" value="{{ $about->list_item_3 }}" required>
                @error('list_item_3')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image_url" class="form-label">Image</label>
                <input type="file" class="form-control" id="image_url" name="image_url" accept="image/*">
                @if ($about->image_url)
                    <img src="{{ asset('storage/' . $about->image_url) }}" alt="Current Image" class="img-thumbnail mt-2" style="max-width: 150px;">
                @endif
                @error('image_url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection

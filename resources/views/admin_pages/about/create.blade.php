@extends('layouts.admin')

@section('title', 'Create About Section')
@section('header', 'Create About Section')
@section('subheader', 'Add a new about section')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.about.index') }}">About Sections</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.about.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="section_title" class="form-label">Section Title</label>
                <input type="text" class="form-control" id="section_title" name="section_title" value="About" required>
                @error('section_title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="section_subtitle" class="form-label">Section Subtitle</label>
                <textarea class="form-control" id="section_subtitle" name="section_subtitle" rows="4" required></textarea>
                @error('section_subtitle')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="subtitle" class="form-label">Subtitle</label>
                <textarea class="form-control" id="subtitle" name="subtitle" rows="4" required></textarea>
                @error('subtitle')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="list_item_1" class="form-label">List Item 1</label>
                <input type="text" class="form-control" id="list_item_1" name="list_item_1" required>
                @error('list_item_1')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="list_item_2" class="form-label">List Item 2</label>
                <input type="text" class="form-control" id="list_item_2" name="list_item_2" required>
                @error('list_item_2')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="list_item_3" class="form-label">List Item 3</label>
                <input type="text" class="form-control" id="list_item_3" name="list_item_3" required>
                @error('list_item_3')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="image_url" class="form-label">Image</label>
                <input type="file" class="form-control" id="image_url" name="image_url" accept="image/*" required>
                @error('image_url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection

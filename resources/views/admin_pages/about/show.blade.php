@extends('layouts.admin')

@section('title', 'About Section Details')
@section('header', 'About Section Details')
@section('subheader', 'View about section details')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.about.index') }}">About Sections</a></li>
    <li class="breadcrumb-item active">Details</li>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <p><strong>Section Title:</strong> {{ $about->section_title }}</p>
        <p><strong>Section Subtitle:</strong> {{ $about->section_subtitle }}</p>
        <p><strong>Title:</strong> {{ $about->title }}</p>
        <p><strong>Subtitle:</strong> {{ $about->subtitle }}</p>
        <p><strong>List Item 1:</strong> {{ $about->list_item_1 }}</p>
        <p><strong>List Item 2:</strong> {{ $about->list_item_2 }}</p>
        <p><strong>List Item 3:</strong> {{ $about->list_item_3 }}</p>
        <p><strong>Image:</strong></p>
        @if ($about->image_url)
            <img src="{{ asset('storage/' . $about->image_url) }}" alt="Image" class="img-thumbnail" style="max-width: 300px;">
        @endif
        <div class="mt-3">
            <a href="{{ route('admin.about.index') }}" class="btn btn-primary">Back to List</a>
            <a href="{{ route('admin.about.edit', $about) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('admin.about.destroy', $about) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection

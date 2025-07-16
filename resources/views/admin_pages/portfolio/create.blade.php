@extends('layouts.admin')

@section('title', 'Create Portfolio Item')
@section('header', 'Create Portfolio Item')
@section('subheader', 'Add a new portfolio item')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.portfolio.index') }}">Portfolio</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" required>
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5" required></textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cost" class="form-label">Cost</label>
                <input type="number" class="form-control" id="cost" name="cost" step="0.01" required>
                @error('cost')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="case_study_url" class="form-label">Case Study URL</label>
                <input type="url" class="form-control" id="case_study_url" name="case_study_url">
                @error('case_study_url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="behance_url" class="form-label">Behance URL</label>
                <input type="url" class="form-control" id="behance_url" name="behance_url">
                @error('behance_url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="mockup_image" class="form-label">Mockup Image</label>
                <input type="file" class="form-control" id="mockup_image" name="mockup_image" accept="image/*">
                @error('mockup_image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="background_video" class="form-label">Background Video</label>
                <input type="file" class="form-control" id="background_video" name="background_video" accept="video/mp4">
                @error('background_video')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="style" class="form-label">Style</label>
                <input type="text" class="form-control" id="style" name="style">
                @error('style')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection

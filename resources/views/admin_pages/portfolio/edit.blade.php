
@extends('layouts.admin')

@section('title', 'Edit Portfolio Item')
@section('header', 'Edit Portfolio Item')
@section('subheader', 'Update portfolio item details')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.portfolio.index') }}">Portfolio</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.portfolio.update', $portfolio) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $portfolio->title }}" required>
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="5" required>{{ $portfolio->description }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="cost" class="form-label">Cost</label>
                <input type="number" class="form-control" id="cost" name="cost" step="0.01" value="{{ $portfolio->cost }}" required>
                @error('cost')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="case_study_url" class="form-label">Case Study URL</label>
                <input type="url" class="form-control" id="case_study_url" name="case_study_url" value="{{ $portfolio->case_study_url }}">
                @error('case_study_url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="behance_url" class="form-label">Behance URL</label>
                <input type="url" class="form-control" id="behance_url" name="behance_url" value="{{ $portfolio->behance_url }}">
                @error('behance_url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="mockup_image" class="form-label">Mockup Image</label>
                <input type="file" class="form-control" id="mockup_image" name="mockup_image" accept="image/*">
                @if ($portfolio->mockup_image)
                    <img src="{{ asset('storage/' . $portfolio->mockup_image) }}" alt="Current Image" class="img-thumbnail mt-2" style="max-width: 150px;">
                @endif
                @error('mockup_image')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="background_video" class="form-label">Background Video</label>
                <input type="file" class="form-control" id="background_video" name="background_video" accept="video/mp4">
                @if ($portfolio->background_video)
                    <video src="{{ asset('storage/' . $portfolio->background_video) }}" class="mt-2" style="max-width: 150px;" controls></video>
                @endif
                @error('background_video')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="style" class="form-label">Style</label>
                <input type="text" class="form-control" id="style" name="style" value="{{ $portfolio->style }}">
                @error('style')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection

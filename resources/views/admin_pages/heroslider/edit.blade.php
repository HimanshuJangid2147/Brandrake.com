@extends('layouts.admin')

@section('title', 'Edit Hero Slider')
@section('header', 'Edit Hero Slider')
@section('subheader', 'Update hero slider details')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.heroslider.index') }}">Hero Sliders</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.heroslider.update', $hero_slider) }}" method="POST" enctype="multipart/form-data">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="image_url" class="form-label">Image</label>
                <input type="file" class="form-control" id="image_url" name="image_url" accept="image/*">
                @if ($hero_slider->image_url)
                    <img src="{{ asset('storage/' . $hero_slider->image_url) }}" alt="Current Image" class="img-thumbnail mt-2" style="max-width: 150px;">
                @endif
                @error('image_url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="is_active" class="form-label">Active</label>
                <select class="form-control" id="is_active" name="is_active" required>
                    <option value="1" {{ $hero_slider->is_active ? 'selected' : '' }}>Yes</option>
                    <option value="0" {{ !$hero_slider->is_active ? 'selected' : '' }}>No</option>
                </select>
                @error('is_active')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection

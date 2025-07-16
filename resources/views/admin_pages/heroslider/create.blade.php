@extends('layouts.admin')

@section('title', 'Create Hero Slider')
@section('header', 'Create Hero Slider')
@section('subheader', 'Add a new hero slider')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.heroslider.index') }}">Hero Sliders</a></li>
    <li class="breadcrumb-item active">Create</li>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.heroslider.store') }}" method="POST" enctype="multipart/form-data">
            @csrf
            <div class="mb-3">
                <label for="image_url" class="form-label">Image</label>
                <input type="file" class="form-control" id="image_url" name="image_url" accept="image/*" required>
                @error('image_url')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="is_active" class="form-label">Active</label>
                <select class="form-control" id="is_active" name="is_active" required>
                    <option value="1">Yes</option>
                    <option value="0">No</option>
                </select>
                @error('is_active')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Save</button>
        </form>
    </div>
</div>
@endsection

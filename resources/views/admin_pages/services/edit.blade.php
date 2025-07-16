@extends('layouts.admin')

@section('title', 'Edit Service')
@section('header', 'Edit Service')
@section('subheader', 'Update service details')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.service.index') }}">Services</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <form action="{{ route('admin.service.update', $service) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3">
                <label for="icon_class" class="form-label">Icon Class</label>
                <input type="text" class="form-control" id="icon_class" name="icon_class" value="{{ $service->icon_class }}" required>
                @error('icon_class')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="box_color" class="form-label">Box Color</label>
                <input type="text" class="form-control" id="box_color" name="box_color" value="{{ $service->box_color }}" required>
                @error('box_color')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="title" class="form-label">Title</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $service->title }}" required>
                @error('title')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <div class="mb-3">
                <label for="description" class="form-label">Description</label>
                <textarea class="form-control" id="description" name="description" rows="4" required>{{ $service->description }}</textarea>
                @error('description')
                    <span class="text-danger">{{ $message }}</span>
                @enderror
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection

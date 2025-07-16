@extends('layouts.admin')

@section('title', 'Service Details')
@section('header', 'Service Details')
@section('subheader', 'View service details')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.service.index') }}">Services</a></li>
    <li class="breadcrumb-item active">Details</li>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <p><strong>Icon Class:</strong> {{ $service->icon_class }}</p>
        <p><strong>Box Color:</strong> {{ $service->box_color }}</p>
        <p><strong>Title:</strong> {{ $service->title }}</p>
        <p><strong>Description:</strong> {{ $service->description }}</p>
        <div class="mt-3">
            <a href="{{ route('admin.service.index') }}" class="btn btn-primary">Back to List</a>
            <a href="{{ route('admin.service.edit', $service) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('admin.service.destroy', $service) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.admin')

@section('title', 'Call to Action Details')
@section('header', 'Call to Action Details')
@section('subheader', 'View call to action details')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.call_to_action.index') }}">Call to Actions</a></li>
    <li class="breadcrumb-item active">Details</li>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <p><strong>Title:</strong> {{ $call_to_action->title }}</p>
        <p><strong>Text:</strong> {{ $call_to_action->text }}</p>
        <p><strong>Button Text:</strong> {{ $call_to_action->button_text }}</p>
        <p><strong>Button URL:</strong> {{ $call_to_action->button_url }}</p>
        <p><strong>Background Image:</strong></p>
        @if ($call_to_action->background_image)
            <img src="{{ asset('storage/' . $call_to_action->background_image) }}" alt="Image" class="img-thumbnail" style="max-width: 300px;">
        @endif
        <div class="mt-3">
            <a href="{{ route('admin.call_to_action.index') }}" class="btn btn-primary">Back to List</a>
            <a href="{{ route('admin.call_to_action.edit', $call_to_action) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('admin.call_to_action.destroy', $call_to_action) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection

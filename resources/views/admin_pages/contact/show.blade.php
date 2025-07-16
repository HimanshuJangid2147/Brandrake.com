@extends('layouts.admin')

@section('title', 'Contact Info Details')
@section('header', 'Contact Info Details')
@section('subheader', 'View contact information details')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.contact.index') }}">Contact Info</a></li>
    <li class="breadcrumb-item active">Details</li>
@endsection

@section('content')
<div class="card">
    <div class="card-body">
        <p><strong>Address:</strong> {{ $contact->address }}</p>
        <p><strong>Phone:</strong> {{ $contact->phone }}</p>
        <p><strong>Email:</strong> {{ $contact->email }}</p>
        <p><strong>Opening Hours:</strong> {{ $contact->opening_hours }}</p>
        <div class="mt-3">
            <a href="{{ route('admin.contact.index') }}" class="btn btn-primary">Back to List</a>
            <a href="{{ route('admin.contact.edit', $contact) }}" class="btn btn-primary">Edit</a>
            <form action="{{ route('admin.contact.destroy', $contact) }}" method="POST" style="display:inline;">
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
            </form>
        </div>
    </div>
</div>
@endsection

@extends('layouts.admin')

@section('title', 'Contact Info Management')
@section('header', 'Contact Info Management')
@section('subheader', 'Manage contact information')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Contact Info</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Contact Info</h4>
        <a href="{{ route('admin.contact.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Email</th>
                        <th>Phone</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($contactInfos as $contact)
                        <tr>
                            <td>{{ $contact->email }}</td>
                            <td>{{ $contact->phone }}</td>
                            <td>
                                <a href="{{ route('admin.contact.show', $contact) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('admin.contact.edit', $contact) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.contact.destroy', $contact) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $contactInfos->links() }}
        </div>
    </div>
</div>
@endsection

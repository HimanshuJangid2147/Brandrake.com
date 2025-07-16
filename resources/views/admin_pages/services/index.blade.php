@extends('layouts.admin')

@section('title', 'Service Management')
@section('header', 'Service Management')
@section('subheader', 'Manage services')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Services</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Services</h4>
        <a href="{{ route('admin.service.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Icon Class</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($services as $service)
                        <tr>
                            <td>{{ $service->title }}</td>
                            <td>{{ $service->icon_class }}</td>
                            <td>
                                <a href="{{ route('admin.service.show', $service) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('admin.service.edit', $service) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.service.destroy', $service) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $services->links() }}
        </div>
    </div>
</div>
@endsection

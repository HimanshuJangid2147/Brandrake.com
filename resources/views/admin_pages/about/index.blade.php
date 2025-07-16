@extends('layouts.admin')

@section('title', 'About Section Management')
@section('header', 'About Section Management')
@section('subheader', 'Manage about sections')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">About Sections</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">About Sections</h4>
        <a href="{{ route('admin.about.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Section Title</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($aboutSections as $about)
                        <tr>
                            <td>{{ $about->title }}</td>
                            <td>{{ $about->section_title }}</td>
                            <td>
                                <a href="{{ route('admin.about.show', $about) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('admin.about.edit', $about) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.about.destroy', $about) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $aboutSections->links() }}
        </div>
    </div>
</div>
@endsection

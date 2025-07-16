@extends('layouts.admin')

@section('title', 'Testimonial Management')
@section('header', 'Testimonial Management')
@section('subheader', 'Manage testimonials')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Testimonials</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Testimonials</h4>
        <a href="{{ route('admin.testimonial.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Author Name</th>
                        <th>Position</th>
                        <th>Rating</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($testimonials as $testimonial)
                        <tr>
                            <td>{{ $testimonial->author_name }}</td>
                            <td>{{ $testimonial->author_position }}</td>
                            <td>{{ str_repeat('★', $testimonial->rating) }}</td>
                            <td>
                                <a href="{{ route('admin.testimonial.show', $testimonial) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('admin.testimonial.edit', $testimonial) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.testimonial.destroy', $testimonial) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $testimonials->links() }}
        </div>
    </div>
</div>
@endsection

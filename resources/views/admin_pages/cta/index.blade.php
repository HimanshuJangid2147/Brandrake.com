@extends('layouts.admin')

@section('title', 'Call to Action Management')
@section('header', 'Call to Action Management')
@section('subheader', 'Manage call to actions')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Call to Actions</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Call to Actions</h4>
        <a href="{{ route('admin.call_to_action.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Title</th>
                        <th>Button Text</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($callToActions as $call_to_action)
                        <tr>
                            <td>{{ $call_to_action->title }}</td>
                            <td>{{ $call_to_action->button_text }}</td>
                            <td>
                                <a href="{{ route('admin.call_to_action.show', $call_to_action) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('admin.call_to_action.edit', $call_to_action) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.call_to_action.destroy', $call_to_action) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $callToActions->links() }}
        </div>
    </div>
</div>
@endsection

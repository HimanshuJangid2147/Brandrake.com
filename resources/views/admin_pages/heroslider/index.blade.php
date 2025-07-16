@extends('layouts.admin')

@section('title', 'Hero Slider Management')
@section('header', 'Hero Slider Management')
@section('subheader', 'Manage hero sliders')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Hero Sliders</li>
@endsection

@section('content')
<div class="card">
    <div class="card-header">
        <h4 class="card-title">Hero Sliders</h4>
        <a href="{{ route('admin.heroslider.create') }}" class="btn btn-primary">Add New</a>
    </div>
    <div class="card-body">
        <div class="table-responsive">
            <table class="table table-hover">
                <thead>
                    <tr>
                        <th>Image</th>
                        <th>Active</th>
                        <th>Actions</th>
                    </tr>
                </thead>
                <tbody>
                    @foreach ($heroSliders as $hero_slider)
                        <tr>
                            <td><img src="{{ asset('storage/' . $hero_slider->image_url) }}" alt="Image" style="max-width: 100px;"></td>
                            <td>{{ $hero_slider->is_active ? 'Yes' : 'No' }}</td>
                            <td>
                                <a href="{{ route('admin.heroslider.show', $hero_slider) }}" class="btn btn-sm btn-info">View</a>
                                <a href="{{ route('admin.heroslider.edit', $hero_slider) }}" class="btn btn-sm btn-primary">Edit</a>
                                <form action="{{ route('admin.heroslider.destroy', $hero_slider) }}" method="POST" style="display:inline;">
                                    @csrf
                                    @method('DELETE')
                                    <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                </form>
                            </td>
                        </tr>
                    @endforeach
                </tbody>
            </table>
            {{ $heroSliders->links() }}
        </div>
    </div>
</div>
@endsection

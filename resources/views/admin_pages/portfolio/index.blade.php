@extends('layouts.admin')

@section('title', 'Portfolio Management')
@section('header', 'Portfolio Management')
@section('subheader', 'Manage portfolio items')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Portfolio</li>
@endsection

@section('content')
<div class="page-wrapper">
    <div class="page-content" style="margin: 0;">
        <div class="container-xxl">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="card">
                <div class="card-header">
                    <h4 class="card-title">Portfolio Items</h4>
                    <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary">Add New</a>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover">
                            <thead>
                                <tr>
                                    <th>Title</th>
                                    <th>Cost</th>
                                    <th>Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($portfolios as $portfolio)
                                    <tr>
                                        <td>{{ $portfolio->title }}</td>
                                        <td>{{ $portfolio->cost }}</td>
                                        <td>
                                            <a href="{{ route('admin.portfolio.edit', $portfolio) }}" class="btn btn-sm btn-primary">Edit</a>
                                            <form action="{{ route('admin.portfolio.destroy', $portfolio) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure?')">Delete</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $portfolios->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

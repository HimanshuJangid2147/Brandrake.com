@extends('layouts.admin')
@section('title', 'Portfolio Management')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">Portfolio Items</h4>
                            </div>
                            <div class="col-auto align-self-center">
                                <a href="{{ route('admin.portfolio.create') }}" class="btn btn-sm btn-outline-primary">Add New Item</a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                @forelse ($portfolios as $portfolio)
                <div class="col-lg-4 col-md-6">
                    <div class="card">
                        @if($portfolio->mockup_image)
                        <img class="card-img-top img-fluid" src="{{ Storage::url($portfolio->mockup_image) }}" alt="{{ $portfolio->title }}">
                        @endif
                        <div class="card-body">
                            <h4 class="card-title">{{ $portfolio->title }}</h4>
                            <p class="card-text text-muted">{{ $portfolio->description }}</p>
                            <a href="{{ route('admin.portfolio.show', $portfolio->id) }}" class="btn btn-sm btn-soft-primary">View Details</a>
                            <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="btn btn-sm btn-soft-success">Edit</a>
                            <form action="{{ route('admin.portfolio.destroy', $portfolio->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure?');">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-sm btn-soft-danger">Delete</button>
                            </form>
                        </div>
                    </div>
                </div>
                @empty
                <div class="col-12">
                    <div class="card">
                        <div class="card-body text-center">
                            <p>No portfolio items found.</p>
                            <a href="{{ route('admin.portfolio.create') }}" class="btn btn-primary">Create the First One</a>
                        </div>
                    </div>
                </div>
                @endforelse
            </div>
             <div class="mt-3 d-flex justify-content-center">
                {{ $portfolios->links() }}
            </div>
        </div>
    </div>
</div>
@endsection

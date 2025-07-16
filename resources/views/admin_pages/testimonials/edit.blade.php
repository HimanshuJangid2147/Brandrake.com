@extends('layouts.admin')

@section('title', 'Edit Testimonial')
@section('header', 'Edit Testimonial')
@section('subheader', 'Update testimonial details')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.testimonial.index') }}">Testimonials</a></li>
    <li class="breadcrumb-item active">Edit</li>
@endsection

@section('content')
<div class="page-wrapper">
    <div class="page-content" style="margin: 0;">
        <div class="container-xxl">
            <div class="card card-h-100">
                <div class="card-body">
                    <form action="{{ route('admin.testimonial.update', $testimonial) }}" method="POST" enctype="multipart/form-data">
                        @csrf
                        @method('PUT')
                        <div class="mb-3">
                            <label for="author_name" class="form-label">Author Name</label>
                            <input type="text" class="form-control" id="author_name" name="author_name" value="{{ $testimonial->author_name }}" required>
                            @error('author_name')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="author_position" class="form-label">Author Position</label>
                            <input type="text" class="form-control" id="author_position" name="author_position" value="{{ $testimonial->author_position }}" required>
                            @error('author_position')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="author_image" class="form-label">Author Image</label>
                            <input type="file" class="form-control" id="author_image" name="author_image" accept="image/*">
                            @if ($testimonial->author_image)
                                <img src="{{ asset('storage/' . $testimonial->author_image) }}" alt="Author Image" class="img-thumbnail mt-2" style="max-width: 150px;">
                            @endif
                            @error('author_image')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="quote" class="form-label">Quote</label>
                            <textarea class="form-control" id="quote" name="quote" rows="5" required>{{ $testimonial->quote }}</textarea>
                            @error('quote')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <div class="mb-3">
                            <label for="rating" class="form-label">Rating</label>
                            <select class="form-control" id="rating" name="rating" required>
                                <option value="1" {{ $testimonial->rating == 1 ? 'selected' : '' }}>1 Star</option>
                                <option value="2" {{ $testimonial->rating == 2 ? 'selected' : '' }}>2 Stars</option>
                                <option value="3" {{ $testimonial->rating == 3 ? 'selected' : '' }}>3 Stars</option>
                                <option value="4" {{ $testimonial->rating == 4 ? 'selected' : '' }}>4 Stars</option>
                                <option value="5" {{ $testimonial->rating == 5 ? 'selected' : '' }}>5 Stars</option>
                            </select>
                            @error('rating')
                                <span class="text-danger">{{ $message }}</span>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Update</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

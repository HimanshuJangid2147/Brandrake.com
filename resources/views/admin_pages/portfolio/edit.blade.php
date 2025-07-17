@extends('layouts.admin')
@section('title', 'Edit Portfolio Item: ' . $portfolio->title)
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Edit Portfolio Case Study</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.portfolio.update', $portfolio->id) }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                @method('PUT')
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Project Title</label>
                                            <input type="text" class="form-control" id="title" name="title" value="{{ old('title', $portfolio->title) }}" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Short Description (for card view)</label>
                                            <textarea class="form-control" id="description" name="description" rows="3" required>{{ old('description', $portfolio->description) }}</textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="full_content" class="form-label">Full Case Study Content</label>
                                            <textarea class="form-control" id="full_content" name="full_content" rows="15">{{ old('full_content', $portfolio->full_content) }}</textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="mockup_image" class="form-label">Main/Featured Image</label>
                                            <input type="file" class="form-control" id="mockup_image" name="mockup_image">
                                            <small class="form-text text-muted">Leave blank to keep current image.</small>
                                            @if($portfolio->mockup_image)
                                                <img src="{{ Storage::url($portfolio->mockup_image) }}" alt="Current Image" class="img-fluid rounded mt-2" style="max-height: 150px;">
                                            @endif
                                        </div>
                                        <hr>
                                        <div class="mb-3">
                                            <label for="gallery_images" class="form-label">Upload New Gallery Images</label>
                                            <input type="file" class="form-control" id="gallery_images" name="gallery_images[]" multiple>
                                            <small class="form-text text-muted">Uploading new images will replace the entire existing gallery.</small>
                                            @if(!empty($portfolio->gallery_images))
                                            <div class="mt-3">
                                                <h6>Current Gallery:</h6>
                                                <div class="row">
                                                    @foreach($portfolio->gallery_images as $image)
                                                    <div class="col-4 mb-2">
                                                        <img src="{{ Storage::url($image) }}" class="img-fluid rounded">
                                                    </div>
                                                    @endforeach
                                                </div>
                                            </div>
                                            @endif
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Portfolio Item</button>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

@push('scripts')
<script>
    ClassicEditor
        .create( document.querySelector( '#full_content' ) )
        .catch( error => {
            console.error( error );
        } );
</script>
@endpush
@endsection

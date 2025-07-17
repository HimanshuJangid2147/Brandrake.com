@extends('layouts.admin')
@section('title', 'Create Portfolio Item')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-12">
                    <div class="page-title-box">
                        <h4 class="page-title">Add New Portfolio Case Study</h4>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-12">
                    <div class="card">
                        <div class="card-body">
                            <form action="{{ route('admin.portfolio.store') }}" method="POST" enctype="multipart/form-data">
                                @csrf
                                <div class="row">
                                    <div class="col-md-8">
                                        <div class="mb-3">
                                            <label for="title" class="form-label">Project Title</label>
                                            <input type="text" class="form-control" id="title" name="title" required>
                                        </div>
                                        <div class="mb-3">
                                            <label for="description" class="form-label">Short Description (for card view)</label>
                                            <textarea class="form-control" id="description" name="description" rows="3" required></textarea>
                                        </div>
                                        <div class="mb-3">
                                            <label for="full_content" class="form-label">Full Case Study Content</label>
                                            <textarea class="form-control" id="full_content" name="full_content" rows="15"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-md-4">
                                        <div class="mb-3">
                                            <label for="mockup_image" class="form-label">Main/Featured Image</label>
                                            <input type="file" class="form-control" id="mockup_image" name="mockup_image" required>
                                        </div>
                                        <hr>
                                        <div class="mb-3">
                                            <label for="gallery_images" class="form-label">Gallery Images</label>
                                            <input type="file" class="form-control" id="gallery_images" name="gallery_images[]" multiple>
                                            <small class="form-text text-muted">You can select multiple images.</small>
                                        </div>
                                    </div>
                                </div>
                                <button type="submit" class="btn btn-primary">Create Portfolio Item</button>
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

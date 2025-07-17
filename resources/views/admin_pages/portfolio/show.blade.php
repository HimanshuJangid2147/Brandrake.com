@extends('layouts.admin')
@section('title', $portfolio->title . ' - Case Study')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">Case Study: {{ $portfolio->title }}</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.portfolio.index') }}">Portfolio</a></li>
                                    <li class="breadcrumb-item active">{{ $portfolio->title }}</li>
                                </ol>
                            </div>
                            <div class="col-auto align-self-center">
                                <a href="{{ route('admin.portfolio.edit', $portfolio->id) }}" class="btn btn-sm btn-soft-primary">
                                    <i class="fas fa-pencil-alt me-2"></i>Edit
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-8">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">Case Study Content</h4>
                        </div>
                        <div class="card-body">
                            {{-- This renders the HTML content from the text editor --}}
                            {!! $portfolio->full_content !!}
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                     <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Featured Image</h4>
                         </div>
                         <div class="card-body">
                             <img src="{{ Storage::url($portfolio->mockup_image) }}" alt="{{ $portfolio->title }}" class="img-fluid rounded">
                         </div>
                     </div>
                     @if(!empty($portfolio->gallery_images))
                     <div class="card">
                         <div class="card-header">
                             <h4 class="card-title">Image Gallery</h4>
                         </div>
                         <div class="card-body">
                             <div class="row">
                                @foreach($portfolio->gallery_images as $image)
                                    <div class="col-6 mb-3">
                                        <a href="{{ Storage::url($image) }}" class="glightbox">
                                            <img src="{{ Storage::url($image) }}" alt="Gallery Image" class="img-fluid rounded">
                                        </a>
                                    </div>
                                @endforeach
                             </div>
                         </div>
                     </div>
                     @endif
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

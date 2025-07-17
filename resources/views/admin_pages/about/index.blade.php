@extends('layouts.admin')
@section('title', 'About Section Management')
@section('content')
<div class="page-wrapper">
    <div class="page-content">
        <div class="container-fluid">
            <!-- Page-Title -->
            <div class="row">
                <div class="col-sm-12">
                    <div class="page-title-box">
                        <div class="row">
                            <div class="col">
                                <h4 class="page-title">About Section</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active">About Section</li>
                                </ol>
                            </div><!--end col-->
                        </div><!--end row-->
                    </div><!--end page-title-box-->
                </div><!--end col-->
            </div><!--end row-->
            <!-- end page title end breadcrumb -->

            <div class="row">
                <div class="col-lg-12">
                    <div class="card">
                        <div class="card-header">
                            <h4 class="card-title">About Section Details</h4>
                            <p class="text-muted mb-0">Manage the content of the "About Us" section on your website.</p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            {{-- This view now correctly handles the single $aboutSection object --}}
                            @if ($aboutSection && $aboutSection->exists)
                                <div class="row">
                                    <div class="col-md-4">
                                        <img src="{{ $aboutSection->image_url ? Storage::url($aboutSection->image_url) : 'https://placehold.co/600x400?text=No+Image' }}" alt="{{ $aboutSection->title }}" class="img-fluid rounded">
                                    </div>
                                    <div class="col-md-8">
                                        <dl class="row">
                                            <dt class="col-sm-3">Section Title</dt>
                                            <dd class="col-sm-9">{{ $aboutSection->section_title ?? 'Not set' }}</dd>

                                            <dt class="col-sm-3">Section Subtitle</dt>
                                            <dd class="col-sm-9">{{ $aboutSection->section_subtitle ?? 'Not set' }}</dd>

                                            <dt class="col-sm-3">Main Title</dt>
                                            <dd class="col-sm-9">{{ $aboutSection->title ?? 'Not set' }}</dd>

                                            <dt class="col-sm-3">Main Subtitle</dt>
                                            <dd class="col-sm-9">{{ $aboutSection->subtitle ?? 'Not set' }}</dd>

                                            <dt class="col-sm-3">List Item 1</dt>
                                            <dd class="col-sm-9">{{ $aboutSection->list_item_1 ?? 'Not set' }}</dd>

                                            <dt class="col-sm-3">List Item 2</dt>
                                            <dd class="col-sm-9">{{ $aboutSection->list_item_2 ?? 'Not set' }}</dd>

                                            <dt class="col-sm-3">List Item 3</dt>
                                            <dd class="col-sm-9">{{ $aboutSection->list_item_3 ?? 'Not set' }}</dd>
                                        </dl>

                                        <div class="mt-3">
                                            <a href="{{ route('admin.about.edit', $aboutSection->id) }}" class="btn btn-sm btn-soft-primary">Edit Section</a>
                                            {{-- The delete button is here for completeness, but you might not want to delete the only about section. --}}
                                            <form action="{{ route('admin.about.destroy', $aboutSection->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this section? This action cannot be undone.');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-soft-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="alert alert-info">
                                    No "About" section has been created yet.
                                    <a href="{{ route('admin.about.create') }}" class="btn btn-sm btn-primary ms-2">Create One Now</a>
                                </div>
                            @endif
                        </div><!--end card-body-->
                    </div><!--end card-->
                </div><!--end col-->
            </div><!--end row-->

        </div><!-- container -->
    </div>
    <!-- end page content -->
</div>
@endsection

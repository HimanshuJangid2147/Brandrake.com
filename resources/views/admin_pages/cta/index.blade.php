@extends('layouts.admin')
@section('title', 'Call to Action Management')
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
                                <h4 class="page-title">Call to Action Section</h4>
                                <ol class="breadcrumb">
                                    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
                                    <li class="breadcrumb-item active">Call to Action</li>
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
                            <h4 class="card-title">Call to Action Details</h4>
                            <p class="text-muted mb-0">Manage the content of the "Call to Action" section on your website.</p>
                        </div><!--end card-header-->
                        <div class="card-body">
                            @if ($callToAction && $callToAction->exists)
                                <div class="row">
                                    <div class="col-md-5">
                                        <h5>Background Image</h5>
                                        <img src="{{ $callToAction->background_image ? Storage::url($callToAction->background_image) : 'https://placehold.co/800x500?text=No+Image' }}" alt="Background" class="img-fluid rounded">
                                    </div>
                                    <div class="col-md-7">
                                        <dl class="row">
                                            <dt class="col-sm-4">Title</dt>
                                            <dd class="col-sm-8">{{ $callToAction->title ?? 'Not set' }}</dd>

                                            <dt class="col-sm-4">Text</dt>
                                            <dd class="col-sm-8">{{ $callToAction->text ?? 'Not set' }}</dd>

                                            <dt class="col-sm-4">Button Text</dt>
                                            <dd class="col-sm-8">{{ $callToAction->button_text ?? 'Not set' }}</dd>

                                            <dt class="col-sm-4">Button URL</dt>
                                            <dd class="col-sm-8"><a href="{{ $callToAction->button_url ?? '#' }}" target="_blank">{{ $callToAction->button_url ?? 'Not set' }}</a></dd>
                                        </dl>

                                        <div class="mt-3">
                                            <a href="{{ route('admin.call_to_action.edit', $callToAction->id) }}" class="btn btn-sm btn-soft-primary">Edit Section</a>
                                            <form action="{{ route('admin.call_to_action.destroy', $callToAction->id) }}" method="POST" class="d-inline" onsubmit="return confirm('Are you sure you want to delete this section?');">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-soft-danger">Delete</button>
                                            </form>
                                        </div>
                                    </div>
                                </div>
                            @else
                                <div class="alert alert-info">
                                    No "Call to Action" section has been created yet.
                                    <a href="{{ route('admin.call_to_action.create') }}" class="btn btn-sm btn-primary ms-2">Create One Now</a>
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

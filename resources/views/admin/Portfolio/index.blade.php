@extends('layouts.admin')

@section('title', 'Manage Portfolio')

@section('content')
    <!-- Page Header -->
    <div class="page-header fade-in d-flex justify-content-between align-items-center">
        <div>
            <h1 class="page-title">
                <i class="bi bi-briefcase-fill"></i>
                <span>Manage Portfolio</span>
            </h1>
            <p class="page-description">
                Here you can add, edit, or delete your portfolio projects.
            </p>
        </div>
        <div>
            <a href="#" class="btn btn-primary">
                <i class="bi bi-plus-circle"></i>
                <span>Add New Item</span>
            </a>
        </div>
    </div>

    <!-- Success Message Alert -->
    <div class="modern-alert alert-success fade-in" style="animation-delay: 0.1s;">
        <h4 class="alert-heading"><i class="bi bi-check-circle-fill"></i>Success!</h4>
        <p>Your portfolio has been updated successfully. The changes are now live.</p>
    </div>

    <!-- Portfolio Table -->
    <div class="content-card fade-in" style="animation-delay: 0.2s;">
        <div class="card-body">
            <div class="table-responsive">
                <table class="table">
                    <thead>
                        <tr>
                            <th>Image</th>
                            <th>Title</th>
                            <th>Style</th>
                            <th>Created At</th>
                            <th class="text-end">Actions</th>
                        </tr>
                    </thead>
                    <tbody>
                        {{-- This would be looped in a real application --}}
                        <tr>
                            <td>
                                <img src="https://placehold.co/100x60/e2e8f0/4a5568?text=Image" alt="Portfolio Item" style="border-radius: var(--border-radius-sm);">
                            </td>
                            <td>Driving ROI with Strategic UX</td>
                            <td><span class="badge bg-light text-dark">Light</span></td>
                            <td>July 14, 2025</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-pencil-fill"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                        <tr>
                            <td>
                                <img src="https://placehold.co/100x60/2d3748/e2e8f0?text=Image" alt="Portfolio Item" style="border-radius: var(--border-radius-sm);">
                            </td>
                            <td>Rebuilding a Reliable Trading Platform</td>
                            <td><span class="badge bg-dark">Dark</span></td>
                            <td>July 10, 2025</td>
                            <td class="text-end">
                                <a href="#" class="btn btn-sm btn-secondary"><i class="bi bi-pencil-fill"></i></a>
                                <a href="#" class="btn btn-sm btn-danger"><i class="bi bi-trash-fill"></i></a>
                            </td>
                        </tr>
                    </tbody>
                </table>
            </div>
        </div>
    </div>
@endsection

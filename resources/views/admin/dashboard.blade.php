@extends('layouts.admin')

@section('title', 'Dashboard')

@section('content')
    <!-- Page Header -->
    <div class="page-header fade-in">
        <h1 class="page-title">
            <i class="bi bi-grid-1x2-fill"></i>
            <span>Dashboard</span>
        </h1>
        <p class="page-description">
            Welcome back, {{ Auth::guard('admin')->user()->name }}! Here's a summary of your site's content.
        </p>
    </div>

    <div class="row">
        <!-- Portfolio Card -->
        <div class="col-lg-4 col-md-6 mb-4 fade-in" style="animation-delay: 0.1s;">
            <div class="modern-card">
                <div class="card-icon" style="background: linear-gradient(135deg, var(--primary-color), var(--primary-dark));">
                    <i class="bi bi-briefcase-fill"></i>
                </div>
                <h3 class="card-title">Portfolio Management</h3>
                <p class="card-description">
                    Add, edit, or remove projects from your company's portfolio.
                </p>
                <a href="#" class="card-button">
                    <span>Manage Portfolio</span>
                    <i class="bi bi-arrow-right-circle"></i>
                </a>
            </div>
        </div>

        <!-- Team Members Card -->
        <div class="col-lg-4 col-md-6 mb-4 fade-in" style="animation-delay: 0.2s;">
            <div class="modern-card">
                <div class="card-icon" style="background: linear-gradient(135deg, var(--accent-color), #38a169);">
                    <i class="bi bi-people-fill"></i>
                </div>
                <h3 class="card-title">Team Members</h3>
                <p class="card-description">
                    Update your team's information, roles, and social media links.
                </p>
                <a href="#" class="card-button">
                    <span>Manage Team</span>
                    <i class="bi bi-arrow-right-circle"></i>
                </a>
            </div>
        </div>

        <!-- Site Settings Card -->
        <div class="col-lg-4 col-md-6 mb-4 fade-in" style="animation-delay: 0.3s;">
            <div class="modern-card">
                <div class="card-icon" style="background: linear-gradient(135deg, var(--warning-color), #d69e2e);">
                    <i class="bi bi-sliders"></i>
                </div>
                <h3 class="card-title">Site Settings</h3>
                <p class="card-description">
                    Manage global site settings like your logo and contact information.
                </p>
                <a href="#" class="card-button">
                    <span>Go to Settings</span>
                    <i class="bi bi-arrow-right-circle"></i>
                </a>
            </div>
        </div>
    </div>

    <!-- Quick Actions Section -->
    <div class="quick-actions mt-3 fade-in" style="animation-delay: 0.4s;">
        <h3 class="quick-actions-title"><i class="bi bi-lightning-charge-fill"></i>Quick Actions</h3>
        <div class="row">
            <div class="col-md-4 mb-3">
                <a href="#" class="action-button">
                    <i class="bi bi-plus-circle-fill"></i>
                    <span>Add New Portfolio Item</span>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                 <a href="#" class="action-button">
                    <i class="bi bi-person-plus-fill"></i>
                    <span>Add New Team Member</span>
                </a>
            </div>
            <div class="col-md-4 mb-3">
                 <a href="#" class="action-button">
                    <i class="bi bi-eye-fill"></i>
                    <span>View Live Site</span>
                </a>
            </div>
        </div>
    </div>
@endsection

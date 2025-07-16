@extends('layouts.admin')
@section('title', 'General Settings')
@section('header', 'General Settings')
@section('subheader', 'Update general settings')
@section('breadcrumbs')
    <li class="breadcrumb-item active">General Settings</li>
@endsection
@section('content')
    <div class="page-wrapper">
        <div class="page-content" style="margin: 0;">
            <div class="container-fluid">
                <div class="row justify-content-center">
                    <div class="col-12 col-xl-10">
                        <div class="card shadow-sm">
                            <div class="card-header bg-primary text-white text-center py-3">
                                <h4 class="card-title mb-0">
                                    <i class="fas fa-cog me-2"></i>General Settings
                                </h4>
                                <small class="opacity-75">Configure your store settings and preferences</small>
                            </div>
                            <div class="card-body p-4">
                                <form action="{{ route('admin.general_settings.update') }}" method="POST"
                                    enctype="multipart/form-data">
                                    @csrf

                                    <!-- Store Details Section -->
                                    <div class="mb-5">
                                        <div class="row align-items-center mb-3">
                                            <div class="col">
                                                <h5 class="text-primary mb-0">
                                                    <i class="fas fa-store me-2"></i>Store Details
                                                </h5>
                                            </div>
                                            <div class="col-auto">
                                                <hr class="flex-grow-1">
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="store_name" class="form-label fw-semibold">
                                                        <i class="fas fa-store-alt me-1 text-muted"></i>Store Name
                                                    </label>
                                                    <input type="text" class="form-control form-control-lg" id="store_name"
                                                        name="store_name" value="{{ $settings->store_name }}" required
                                                        placeholder="Enter your store name">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="store_email" class="form-label fw-semibold">
                                                        <i class="fas fa-envelope me-1 text-muted"></i>Store Email
                                                    </label>
                                                    <input type="email" class="form-control form-control-lg" id="store_email"
                                                        name="store_email" value="{{ $settings->store_email }}" required
                                                        placeholder="store@example.com">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="store_phone" class="form-label fw-semibold">
                                                        <i class="fas fa-phone me-1 text-muted"></i>Store Phone
                                                    </label>
                                                    <input type="text" class="form-control form-control-lg" id="store_phone"
                                                        name="store_phone" value="{{ $settings->store_phone }}" required
                                                        placeholder="+1 (555) 123-4567">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="app_link" class="form-label fw-semibold">
                                                        <i class="fas fa-mobile-alt me-1 text-muted"></i>App Link
                                                    </label>
                                                    <input type="url" class="form-control form-control-lg" id="app_link"
                                                        name="app_link" value="{{ $settings->app_link }}"
                                                        placeholder="https://yourapp.com">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="store_address" class="form-label fw-semibold">
                                                        <i class="fas fa-map-marker-alt me-1 text-muted"></i>Store Address
                                                    </label>
                                                    <textarea class="form-control" id="store_address" name="store_address"
                                                        rows="3" required placeholder="Enter your complete store address">{{ $settings->store_address }}</textarea>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="store_logo" class="form-label fw-semibold">
                                                        <i class="fas fa-image me-1 text-muted"></i>Store Logo
                                                    </label>
                                                    <input type="file" class="form-control" id="store_logo"
                                                        name="store_logo" accept="image/*">
                                                    @if ($settings->store_logo)
                                                        <div class="mt-3">
                                                            <div class="d-inline-block p-2 border rounded bg-light">
                                                                <img src="{{ asset('storage/' . $settings->store_logo) }}"
                                                                    alt="Store Logo" class="img-thumbnail" style="max-width: 150px; max-height: 150px;">
                                                            </div>
                                                            <div class="small text-muted mt-1">Current logo</div>
                                                        </div>
                                                    @endif
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Social Media Links Section -->
                                    <div class="mb-5">
                                        <div class="row align-items-center mb-3">
                                            <div class="col">
                                                <h5 class="text-primary mb-0">
                                                    <i class="fas fa-share-alt me-2"></i>Social Media Links
                                                </h5>
                                            </div>
                                            <div class="col-auto">
                                                <hr class="flex-grow-1">
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="facebook_link" class="form-label fw-semibold">
                                                        <i class="fab fa-facebook-f me-1 text-primary"></i>Facebook Link
                                                    </label>
                                                    <input type="url" class="form-control" id="facebook_link"
                                                        name="facebook_link" value="{{ $settings->facebook_link }}"
                                                        placeholder="https://facebook.com/yourstore">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="twitter_link" class="form-label fw-semibold">
                                                        <i class="fab fa-twitter me-1 text-info"></i>Twitter Link
                                                    </label>
                                                    <input type="url" class="form-control" id="twitter_link"
                                                        name="twitter_link" value="{{ $settings->twitter_link }}"
                                                        placeholder="https://twitter.com/yourstore">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="instagram_link" class="form-label fw-semibold">
                                                        <i class="fab fa-instagram me-1 text-danger"></i>Instagram Link
                                                    </label>
                                                    <input type="url" class="form-control" id="instagram_link"
                                                        name="instagram_link" value="{{ $settings->instagram_link }}"
                                                        placeholder="https://instagram.com/yourstore">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="youtube_link" class="form-label fw-semibold">
                                                        <i class="fab fa-youtube me-1 text-danger"></i>YouTube Link
                                                    </label>
                                                    <input type="url" class="form-control" id="youtube_link"
                                                        name="youtube_link" value="{{ $settings->youtube_link }}"
                                                        placeholder="https://youtube.com/yourstore">
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Maintenance Mode Section -->
                                    <div class="mb-5">
                                        <div class="row align-items-center mb-3">
                                            <div class="col">
                                                <h5 class="text-primary mb-0">
                                                    <i class="fas fa-tools me-2"></i>Maintenance Mode
                                                </h5>
                                            </div>
                                            <div class="col-auto">
                                                <hr class="flex-grow-1">
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="is_maintenance_mode" class="form-label fw-semibold">
                                                        <i class="fas fa-power-off me-1 text-muted"></i>Maintenance Mode
                                                    </label>
                                                    <select class="form-select form-select-lg" id="maintenance_mode"
                                                        name="is_maintenance_mode">
                                                        <option value="0"
                                                            {{ $settings->is_maintenance_mode == 0 ? 'selected' : '' }}>
                                                            <i class="fas fa-check-circle"></i> Disabled
                                                        </option>
                                                        <option value="1"
                                                            {{ $settings->is_maintenance_mode == 1 ? 'selected' : '' }}>
                                                            <i class="fas fa-exclamation-circle"></i> Enabled
                                                        </option>
                                                    </select>
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="maintenance_message" class="form-label fw-semibold">
                                                        <i class="fas fa-comment me-1 text-muted"></i>Maintenance Message
                                                    </label>
                                                    <textarea class="form-control" id="maintenance_message" name="maintenance_message"
                                                        rows="3" placeholder="Enter message to display during maintenance">{{ $settings->maintenance_message }}</textarea>
                                                    <div class="form-text">This message will be shown to visitors when maintenance mode is enabled.</div>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Headings and Descriptions Section -->
                                    <div class="mb-5">
                                        <div class="row align-items-center mb-3">
                                            <div class="col">
                                                <h5 class="text-primary mb-0">
                                                    <i class="fas fa-heading me-2"></i>Headings and Descriptions
                                                </h5>
                                            </div>
                                            <div class="col-auto">
                                                <hr class="flex-grow-1">
                                            </div>
                                        </div>
                                        <div class="row g-3">
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="notification_text" class="form-label fw-semibold">
                                                        <i class="fas fa-bell me-1 text-muted"></i>Notification Text
                                                    </label>
                                                    <input type="text" class="form-control" id="notification_text"
                                                        name="notification_text" value="{{ $settings->notification_text }}"
                                                        placeholder="Enter notification banner text">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="herosection_title" class="form-label fw-semibold">
                                                        <i class="fas fa-star me-1 text-muted"></i>Hero Section Title
                                                    </label>
                                                    <input type="text" class="form-control" id="herosection_title"
                                                        name="herosection_title" value="{{ $settings->herosection_title }}"
                                                        placeholder="Enter main hero title">
                                                </div>
                                            </div>
                                            <div class="col-md-6">
                                                <div class="mb-3">
                                                    <label for="herosection_text" class="form-label fw-semibold">
                                                        <i class="fas fa-text-width me-1 text-muted"></i>Hero Section Text
                                                    </label>
                                                    <input type="text" class="form-control" id="herosection_text"
                                                        name="herosection_text" value="{{ $settings->herosection_text }}"
                                                        placeholder="Enter hero section text">
                                                </div>
                                            </div>
                                            <div class="col-12">
                                                <div class="mb-3">
                                                    <label for="herosection_description" class="form-label fw-semibold">
                                                        <i class="fas fa-align-left me-1 text-muted"></i>Hero Section Description
                                                    </label>
                                                    <textarea class="form-control" id="herosection_description" name="herosection_description"
                                                        rows="3" placeholder="Enter detailed hero section description">{{ $settings->herosection_description }}</textarea>
                                                </div>
                                            </div>
                                        </div>
                                    </div>

                                    <!-- Save Button Section -->
                                    <div class="d-grid gap-2 d-md-flex justify-content-md-end">
                                        <button type="submit" class="btn btn-primary btn-lg px-5">
                                            <i class="fas fa-save me-2"></i>Save Settings
                                        </button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

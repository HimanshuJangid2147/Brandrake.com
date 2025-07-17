@extends('layouts.app')

@section('title', 'Case Study: ' . $portfolio->title)

@section('content')

<main>
    <!-- Hero Section with Breadcrumbs -->
    <div class="position-relative overflow-hidden bg-primary text-white">
        <!-- Background Image -->
        <div class="position-absolute top-0 start-0 w-100 h-100"
             style="background-image: url('{{ $portfolio->mockup_image ? Storage::url($portfolio->mockup_image) : asset('assets/img/page-header.jpg') }}');
                    background-size: cover;
                    background-position: center;
                    opacity: 0.3;">
        </div>

        <!-- Overlay -->
        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark" style="opacity: 0.5;"></div>

        <!-- Content -->
        <div class="container position-relative py-5">
            <div class="row justify-content-center text-center py-5">
                <div class="col-lg-8">
                    <h1 class="display-4 fw-bold mb-3">{{ $portfolio->title }}</h1>
                    <p class="lead mb-4">{{ $portfolio->description }}</p>

                    <!-- Breadcrumb -->
                    <nav aria-label="breadcrumb">
                        <ol class="breadcrumb justify-content-center bg-transparent mb-0">
                            <li class="breadcrumb-item">
                                <a href="{{ route('home') }}" class="text-white text-decoration-none">
                                    <i class="fas fa-home me-1"></i>Home
                                </a>
                            </li>
                            <li class="breadcrumb-item active text-white-50" aria-current="page">
                                Case Study
                            </li>
                        </ol>
                    </nav>
                </div>
            </div>
        </div>
    </div>

    <!-- Portfolio Details Section -->
    <section class="py-5 bg-light">
        <div class="container">
            <div class="row g-5">
                <!-- Main Content -->
                <div class="col-lg-8">
                    <div class="bg-white rounded-3 shadow-sm p-4 h-100">
                        <div class="mb-4">
                            <h2 class="h3 fw-bold text-primary mb-3">
                                <i class="fas fa-document-alt me-2"></i>Case Study Details
                            </h2>
                            <hr class="text-primary">
                        </div>

                        <!-- Portfolio Content -->
                        <div class="portfolio-content">
                            {!! $portfolio->full_content !!}
                        </div>
                    </div>
                </div>

                <!-- Sidebar -->
                <div class="col-lg-4">
                    @if(!empty($portfolio->gallery_images))
                    <div class="bg-white rounded-3 shadow-sm p-4">
                        <h3 class="h4 fw-bold text-primary mb-4">
                            <i class="fas fa-images me-2"></i>Image Gallery
                        </h3>
                        <hr class="text-primary mb-4">

                        <div class="row g-3">
                            @foreach($portfolio->gallery_images as $image)
                                <div class="col-6">
                                    <div class="position-relative overflow-hidden rounded-2 shadow-sm">
                                        <a href="{{ Storage::url($image) }}"
                                           class="glightbox d-block"
                                           data-bs-toggle="tooltip"
                                           data-bs-placement="top"
                                           title="Click to view full image">
                                            <img src="{{ Storage::url($image) }}"
                                                 alt="Gallery Image"
                                                 class="img-fluid w-100 h-100 object-fit-cover"
                                                 style="height: 120px; transition: transform 0.3s ease;">
                                        </a>

                                        <!-- Hover Overlay -->
                                        <div class="position-absolute top-0 start-0 w-100 h-100 bg-dark d-flex align-items-center justify-content-center opacity-0 hover-overlay"
                                             style="transition: opacity 0.3s ease;">
                                            <i class="fas fa-search-plus text-white fs-4"></i>
                                        </div>
                                    </div>
                                </div>
                            @endforeach
                        </div>
                    </div>
                    @endif

                    <!-- Optional: Add more sidebar content -->
                    <div class="bg-white rounded-3 shadow-sm p-4 mt-4">
                        <h4 class="h5 fw-bold text-primary mb-3">
                            <i class="fas fa-info-circle me-2"></i>Project Info
                        </h4>
                        <hr class="text-primary mb-3">

                        <div class="row g-3">
                            <div class="col-12">
                                <small class="text-muted d-block">Project Type</small>
                                <span class="fw-medium">{{ $portfolio->category ?? 'Web Development' }}</span>
                            </div>
                            <div class="col-12">
                                <small class="text-muted d-block">Date</small>
                                <span class="fw-medium">{{ $portfolio->created_at->format('F Y') }}</span>
                            </div>
                            <div class="col-12">
                                <small class="text-muted d-block">Status</small>
                                <span class="badge bg-success">Completed</span>
                            </div>
                        </div>

                        <!-- Action Buttons -->
                        <div class="mt-4 d-grid gap-2">
                            @if($portfolio->live_url)
                            <a href="{{ $portfolio->live_url }}"
                               class="btn btn-primary btn-sm"
                               target="_blank"
                               rel="noopener">
                                <i class="fas fa-external-link-alt me-2"></i>View Live Site
                            </a>
                            @endif

                            @if($portfolio->github_url)
                            <a href="{{ $portfolio->github_url }}"
                               class="btn btn-outline-dark btn-sm"
                               target="_blank"
                               rel="noopener">
                                <i class="fab fa-github me-2"></i>View Code
                            </a>
                            @endif
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Navigation Section -->
    {{-- <section class="py-4 bg-white border-top">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-md-6">
                    <a href="{{ route('portfolio.index') }}" class="btn btn-outline-primary">
                        <i class="fas fa-arrow-left me-2"></i>Back to Portfolio
                    </a>
                </div>
                <div class="col-md-6 text-md-end mt-3 mt-md-0">
                    <div class="d-flex justify-content-md-end gap-2">
                        <button class="btn btn-outline-secondary btn-sm" onclick="window.print()">
                            <i class="fas fa-print me-1"></i>Print
                        </button>
                        <button class="btn btn-outline-secondary btn-sm" onclick="shareProject()">
                            <i class="fas fa-share-alt me-1"></i>Share
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </section> --}}
</main>

@endsection

@push('styles')
<style>
    .portfolio-content {
        line-height: 1.8;
    }

    .portfolio-content h1,
    .portfolio-content h2,
    .portfolio-content h3,
    .portfolio-content h4,
    .portfolio-content h5,
    .portfolio-content h6 {
        color: var(--bs-primary);
        margin-top: 2rem;
        margin-bottom: 1rem;
    }

    .portfolio-content p {
        margin-bottom: 1.5rem;
    }

    .portfolio-content img {
        max-width: 100%;
        height: auto;
        border-radius: 0.375rem;
        box-shadow: 0 0.125rem 0.25rem rgba(0, 0, 0, 0.075);
        margin: 1rem 0;
    }

    .hover-overlay {
        cursor: pointer;
    }

    .glightbox:hover + .hover-overlay,
    .hover-overlay:hover {
        opacity: 1 !important;
    }

    .glightbox:hover img {
        transform: scale(1.1);
    }

    .breadcrumb-item + .breadcrumb-item::before {
        content: ">";
        color: rgba(255, 255, 255, 0.6);
    }

    .object-fit-cover {
        object-fit: cover;
    }

    @media (max-width: 768px) {
        .display-4 {
            font-size: 2rem;
        }

        .py-5 {
            padding-top: 3rem !important;
            padding-bottom: 3rem !important;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    // Initialize tooltips
    document.addEventListener('DOMContentLoaded', function() {
        var tooltipTriggerList = [].slice.call(document.querySelectorAll('[data-bs-toggle="tooltip"]'));
        var tooltipList = tooltipTriggerList.map(function (tooltipTriggerEl) {
            return new bootstrap.Tooltip(tooltipTriggerEl);
        });
    });

    // Share functionality
    function shareProject() {
        if (navigator.share) {
            navigator.share({
                title: '{{ $portfolio->title }}',
                text: '{{ $portfolio->description }}',
                url: window.location.href
            });
        } else {
            // Fallback: copy to clipboard
            navigator.clipboard.writeText(window.location.href).then(function() {
                alert('Link copied to clipboard!');
            });
        }
    }
</script>
@endpush

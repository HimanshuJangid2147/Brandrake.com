@extends('layouts.admin')

@section('title', 'Add New Portfolio Item')

@section('content')
    <!-- Page Header -->
    <div class="page-header fade-in">
        <h1 class="page-title">
            <i class="bi bi-plus-circle-fill"></i>
            <span>Add New Portfolio Item</span>
        </h1>
        <p class="page-description">
            Fill out the form below to add a new project to your portfolio.
        </p>
    </div>

    <div class="content-card fade-in" style="animation-delay: 0.1s;">
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                @include('admin.Portfolio.partials.form')
            </form>
        </div>
    </div>
@endsection

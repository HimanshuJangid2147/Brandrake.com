@extends('layouts.admin')

@section('title', 'Edit Portfolio Item')

@section('content')
    <!-- Page Header -->
    <div class="page-header fade-in">
        <h1 class="page-title">
            <i class="bi bi-pencil-square"></i>
            <span>Edit Portfolio Item</span>
        </h1>
        <p class="page-description">
            Update the details for this project.
        </p>
    </div>

    <div class="content-card fade-in" style="animation-delay: 0.1s;">
        <div class="card-body">
            <form action="#" method="POST" enctype="multipart/form-data">
                @csrf
                @method('PUT') {{-- Important for updates --}}
                @include('admin.Portfolio.partials.form')
            </form>
        </div>
    </div>
@endsection

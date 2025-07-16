@extends('layouts.admin')

@section('title', 'Profile')
@section('header', 'User Profile')
@section('subheader', 'View and manage your profile details')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Profile</li>
@endsection

@section('content')
<div class="page-wrapper">
    <div class="page-content" style="margin: 0;">
        <div class="container-xxl">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="row">
                <!-- Profile Card -->
                <div class="col-lg-4 col-md-6">
                    <div class="card card-h-100">
                        <div class="card-body text-center">
                            <div class="d-flex justify-content-center border-dashed-bottom pb-3">
                                <div class="thumb-xl bg-light rounded-circle mx-auto d-flex align-items-center justify-content-center">
                                    <img src="{{ asset('img/pp.svg') }}" alt="Avatar" class="rounded-circle" style="width: 80px; height: 80px;">
                                </div>
                            </div>
                            <h4 class="mt-3 fw-semibold">{{ Auth::user()->name }}</h4>
                            <p class="text-muted fs-14">{{ Auth::user()->is_admin ? 'Platform Administrator' : 'User' }}</p>
                            <p class="mb-1"><strong>Username:</strong> {{ Auth::user()->username }}</p>
                            <p class="mb-1"><strong>Email:</strong> {{ Auth::user()->email }}</p>
                            <p class="mb-3"><strong>Joined:</strong> {{ Auth::user()->created_at->format('M d, Y') }}</p>
                            <a href="{{ route('admin.settings') }}" class="btn btn-primary btn-sm">Edit Profile</a>
                        </div>
                    </div>
                </div>
                <!-- Recent Activity -->
                <div class="col-lg-8 col-md-6">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h4 class="card-title">Recent Activity</h4>
                        </div>
                        <div class="card-body">
                            <div class="table-responsive">
                                <table class="table table-hover mb-0">
                                    <thead class="table-light">
                                        <tr>
                                            <th scope="col">Time</th>
                                            <th scope="col">Activity</th>
                                            <th scope="col">Details</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <tr>
                                            <td>2 min ago</td>
                                            <td>Your project is uploaded</td>
                                            <td>Details about the new code template.</td>
                                        </tr>
                                        <tr>
                                            <td>10 min ago</td>
                                            <td>Meeting with developers</td>
                                            <td>Discussing new API integrations.</td>
                                        </tr>
                                        <tr>
                                            <td>40 min ago</td>
                                            <td>API task completed</td>
                                            <td>Details about the new endpoint.</td>
                                        </tr>
                                        <tr>
                                            <td>1 hr ago</td>
                                            <td>New project approved</td>
                                            <td>Details about the mobile app template.</td>
                                        </tr>
                                        <tr>
                                            <td>2 hrs ago</td>
                                            <td>Payment processed</td>
                                            <td>Details about the recent transaction.</td>
                                        </tr>
                                    </tbody>
                                </table>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

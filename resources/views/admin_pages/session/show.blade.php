@extends('layouts.admin')

@section('title', 'Session Details')
@section('header', 'Session Details')
@section('subheader', 'View details of a specific session')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item"><a href="{{ route('admin.session.index') }}">Sessions</a></li>
    <li class="breadcrumb-item active">Details</li>
@endsection

@section('content')
<div class="page-wrapper">
    <div class="page-content" style="margin: 0;">
        <div class="container-xxl">
            <div class="card card-h-100">
                <div class="card-header">
                    <h4 class="card-title">Session Details</h4>
                </div>
                <div class="card-body">
                    <div class="row">
                        <div class="col-md-6">
                            <p><strong>User:</strong> {{ $session->user ? $session->user->name : 'Guest' }}</p>
                            <p><strong>IP Address:</strong> {{ $session->ip_address }}</p>
                            <p><strong>User Agent:</strong> {{ $session->user_agent }}</p>
                            <p><strong>Last Activity:</strong> {{ \Carbon\Carbon::createFromTimestamp($session->last_activity)->toDateTimeString() }}</p>
                        </div>
                    </div>
                    <a href="{{ route('admin.session.index') }}" class="btn btn-primary">Back to Sessions</a>
                    <form action="{{ route('admin.session.destroy', $session->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger" onclick="return confirm('Are you sure you want to terminate this session?')">Terminate Session</button>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

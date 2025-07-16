@extends('layouts.admin')

@section('title', 'Session Management')
@section('header', 'Session Management')
@section('subheader', 'View and manage active user sessions')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Sessions</li>
@endsection

@section('content')
<div class="page-wrapper">
    <div class="page-content" style="margin: 0;">
        <div class="container-xxl">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="card card-h-100">
                <div class="card-header">
                    <h4 class="card-title">Active Sessions</h4>
                </div>
                <div class="card-body">
                    <div class="table-responsive">
                        <table class="table table-hover mb-0">
                            <thead class="table-light">
                                <tr>
                                    <th scope="col">User</th>
                                    <th scope="col">IP Address</th>
                                    <th scope="col">User Agent</th>
                                    <th scope="col">Last Activity</th>
                                    <th scope="col">Actions</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($sessions as $session)
                                    <tr>
                                        <td>{{ $session->user ? $session->user->name : 'Guest' }}</td>
                                        <td>{{ $session->ip_address }}</td>
                                        <td>{{ Str::limit($session->user_agent, 50) }}</td>
                                        <td>{{ \Carbon\Carbon::createFromTimestamp($session->last_activity)->diffForHumans() }}</td>
                                        <td>
                                            <a href="{{ route('admin.session.show', $session->id) }}" class="btn btn-sm btn-primary">View</a>
                                            <form action="{{ route('admin.session.destroy', $session->id) }}" method="POST" style="display:inline;">
                                                @csrf
                                                @method('DELETE')
                                                <button type="submit" class="btn btn-sm btn-danger" onclick="return confirm('Are you sure you want to terminate this session?')">Terminate</button>
                                            </form>
                                        </td>
                                    </tr>
                                @endforeach
                            </tbody>
                        </table>
                        {{ $sessions->links() }}
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection

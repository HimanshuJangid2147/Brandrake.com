@extends('layouts.admin')

@section('title', 'Account Settings')
@section('header', 'Account Settings')
@section('subheader', 'Manage your account preferences and security')
@section('breadcrumbs')
    <li class="breadcrumb-item"><a href="{{ route('admin.index') }}">Dashboard</a></li>
    <li class="breadcrumb-item active">Account Settings</li>
@endsection

@section('content')
<div class="page-wrapper">
    <div class="page-content" style="margin: 0;">
        <div class="container-xxl">
            @if (session('success'))
                <div class="alert alert-success">{{ session('success') }}</div>
            @endif
            <div class="row">
                <!-- Update Profile Form -->
                <div class="col-lg-6 col-md-12">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h4 class="card-title">Update Profile</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.settings.profile') }}">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="name" class="form-label fw-semibold">Name</label>
                                    <input type="text" class="form-control" id="name" name="name" value="{{ Auth::user()->name }}" required>
                                    @error('name')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="username" class="form-label fw-semibold">Username</label>
                                    <input type="text" class="form-control" id="username" name="username" value="{{ Auth::user()->username }}" required>
                                    @error('username')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="email" class="form-label fw-semibold">Email</label>
                                    <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email }}" required>
                                    @error('email')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <button type="submit" class="btn btn-primary">Save Changes</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Change Password Form -->
                <div class="col-lg-6 col-md-12">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h4 class="card-title">Change Password</h4>
                        </div>
                        <div class="card-body">
                            <form method="POST" action="{{ route('admin.settings.password') }}">
                                @csrf
                                @method('PUT')
                                <div class="mb-3">
                                    <label for="current_password" class="form-label fw-semibold">Current Password</label>
                                    <input type="password" class="form-control" id="current_password" name="current_password" required>
                                    @error('current_password')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password" class="form-label fw-semibold">New Password</label>
                                    <input type="password" class="form-control" id="password" name="password" required>
                                    @error('password')
                                        <span class="text-danger small">{{ $message }}</span>
                                    @enderror
                                </div>
                                <div class="mb-3">
                                    <label for="password_confirmation" class="form-label fw-semibold">Confirm New Password</label>
                                    <input type="password" class="form-control" id="password_confirmation" name="password_confirmation" required>
                                </div>
                                <button type="submit" class="btn btn-primary">Update Password</button>
                            </form>
                        </div>
                    </div>
                </div>
                <!-- Security Settings -->
                <div class="col-lg-6 col-md-12 mt-4">
                    <div class="card card-h-100">
                        <div class="card-header">
                            <h4 class="card-title">Security Settings</h4>
                        </div>
                        <div class="card-body">
                            <div id="security-settings-form">
                                <div class="form-check form-switch mb-3">
                                    <input class="form-check-input" type="checkbox" id="two_factor_enabled" name="two_factor_enabled" {{ Auth::user()->two_factor_enabled ? 'checked' : '' }}>
                                    <label class="form-check-label fw-semibold" for="two_factor_enabled">Two-Factor Authentication</label>
                                    <p class="text-muted fs-14 mt-1">Add an extra layer of security to your account.</p>
                                </div>
                                <button type="button" class="btn btn-primary" id="update-security-btn">Save Security Settings</button>
                            </div>
                            <div id="security-success" class="alert alert-success mt-3" style="display: none;">
                                Security settings updated successfully!
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>

<script>
document.addEventListener('DOMContentLoaded', function() {
    const updateSecurityBtn = document.getElementById('update-security-btn');
    updateSecurityBtn.addEventListener('click', function() {
        const twoFactorEnabled = document.getElementById('two_factor_enabled').checked;

        // Get CSRF token from meta tag
        const csrfToken = document.querySelector('meta[name="csrf-token"]').getAttribute('content');

        // Send AJAX request
        fetch('{{ route("admin.settings.security") }}', {
            method: 'POST',
            headers: {
                'Content-Type': 'application/json',
                'X-CSRF-TOKEN': csrfToken
            },
            body: JSON.stringify({
                two_factor_enabled: twoFactorEnabled
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.status === 'success') {
                document.getElementById('security-success').style.display = 'block';
                setTimeout(() => {
                    document.getElementById('security-success').style.display = 'none';
                }, 3000);
            }
        })
        .catch(error => {
            console.error('Error:', error);
        });
    });
});
</script>
@endsection

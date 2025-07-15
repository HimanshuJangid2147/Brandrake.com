<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Admin Login - Brandrake</title>
    <link href="{{ asset('5.png') }}" rel="icon">
    <link href="{{ asset('5.png') }}" rel="apple-touch-icon">
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@400;500;600;700;800&display=swap" rel="stylesheet">
    <link href="{{ asset('assets/css/modern_admin.css') }}" rel="stylesheet">
    <style>
        /* Additional styles specific to login page for centering */
        body {
            display: flex;
            align-items: center;
            justify-content: center;
            min-height: 100vh;
        }
    </style>
</head>
<body>
    <div class="login-card">
        <div class="text-center mb-4">
            <a href="#" class="brand-logo">
                <span class="brand-icon"><i class="bi bi-shield-lock-fill"></i></span>
                <span>Brandrake Admin</span>
            </a>
        </div>
        <form method="POST" action="{{ route('admin.login.submit') }}">
            @csrf

            @error('email')
                <div class="alert alert-danger p-2 mb-3 text-center">{{ $message }}</div>
            @enderror

            <div class="form-group">
                <label for="email" class="form-label">Email Address</label>
                <input type="email" class="form-control" id="email" name="email" value="{{ old('email') }}" required autofocus>
            </div>

            <div class="form-group">
                <label for="password" class="form-label">Password</label>
                <input type="password" class="form-control" id="password" name="password" required>
            </div>

            <div class="form-group d-flex justify-content-between align-items-center">
                <div class="form-check">
                    <input class="form-check-input" type="checkbox" name="remember" id="remember">
                    <label class="form-check-label" for="remember">
                        Remember Me
                    </label>
                </div>
            </div>

            <div class="d-grid">
                <button type="submit" class="btn btn-primary">Log In</button>
            </div>
        </form>
    </div>
</body>
</html>

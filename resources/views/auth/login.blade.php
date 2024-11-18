<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login Page</title>
    <!-- Bootstrap 5 CSS -->
    <link href="{{ asset('public/assets/css/bootstrap.min.css') }}" rel="stylesheet">
    <style>
        body {
            background-color: #f7f9fc;
            display: flex;
            align-items: center;
            justify-content: center;
            height: 100vh;
        }
        .login-container {
            max-width: 400px;
            padding: 20px;
            border-radius: 10px;
            background-color: white;
            box-shadow: 0 4px 12px rgba(0, 0, 0, 0.1);
        }
        .login-container h3 {
            text-align: center;
            margin-bottom: 20px;
            font-weight: bold;
        }
        .btn-custom {
            background-color: #007bff;
            color: white;
            font-weight: bold;
        }
        .form-text {
            font-size: 0.9rem;
        }
        .form-control:focus {
            box-shadow: none;
            border-color: #007bff;
        }
    </style>
</head>
<body>

<div class="login-container">
    <h3>Login</h3>
    <form action="{{ route('login') }}" method="POST">
        @csrf
        <!-- Email Input -->
        <div class="mb-3">
            <label for="email" class="form-label">Email address</label>
            <input type="email" name="email" class="form-control" id="email" placeholder="Enter your email" required>
            <div class="form-text">We'll never share your email with anyone else.</div>
        </div>

        <!-- Password Input -->
        <div class="mb-3">
            <label for="password" class="form-label">Password</label>
            <input type="password" name="password" class="form-control" id="password" placeholder="Enter your password" required>
        </div>

        <!-- Remember Me Checkbox -->
        <div class="form-check mb-3">
            <input type="checkbox" class="form-check-input" id="rememberMe">
            <label class="form-check-label" for="rememberMe">Remember me</label>
        </div>

        <!-- Submit Button -->
        <button type="submit" class="btn btn-custom w-100">Login</button>

        <!-- Forgot Password Link -->
        <div class="text-center mt-3">
            <a href="#" class="text-muted">Forgot your password?</a>
        </div>
    </form>
</div>

<!-- Bootstrap JS Bundle -->
<script src="{{ asset('public/assets/js/bootstrap.bundle.min.js') }}"></script>
</body>
</html>

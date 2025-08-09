<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>{{ config('app.name') }} Login</title>
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <!-- Font Awesome CSS -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" rel="stylesheet">
    <!-- Custom CSS -->
    <style>
        body {
            background-color: #1a1d1a;
            height: 100vh;
            display: flex;
            align-items: center;
            justify-content: center;
        }
        .login-card {
            max-width: 400px;
            width: 100%;
            border: none;
            border-radius: 15px;
            box-shadow: 0 8px 16px rgba(0, 0, 0, 0.1);
            background-color: #ffffff;
        }
        .login-card .card-header {
            background-color: #28a745;
            color: white;
            border-radius: 15px 15px 0 0;
            text-align: center;
            padding: 1.5rem;
        }
        .form-control {
            border-radius: 10px;
            padding: 0.75rem 0.75rem 0.75rem 2.5rem;
        }
        .btn-login {
            border-radius: 10px;
            padding: 0.75rem;
            background-color: #28a745;
            border: none;
        }
        .btn-login:hover {
            background-color: #218838;
        }
        .form-label {
            font-weight: 500;
            color: #333;
        }
        .forgot-password {
            color: #28a745;
            text-decoration: none;
        }
        .forgot-password:hover {
            text-decoration: underline;
        }
        .eco-green {
            color: #28a745;
        }
        .input-group .input-group-text {
            border-radius: 10px 0 0 10px;
            background-color: #e8f5e9;
            border: none;
            color: #28a745;
        }
        .btn-login i {
            margin-right: 0.5rem;
        }
    </style>
</head>
<body>
    @yield('content')

    <!-- Bootstrap JS and Popper -->
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.6/dist/umd/popper.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.min.js"></script>
</body>
</html>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link rel="stylesheet" href="{{ asset('bootstrap/css/bootstrap.css') }}">
    <style>
        body {
            background-color: #f8f9fa;
        }
        .login-container {
            max-width: 400px;
            margin: auto;
            padding: 20px;
            background: white;
            border-radius: 8px;
            box-shadow: 0 0 10px rgba(0, 0, 0, 0.1);
        }
        .btn-primary {
            background-color: #007bff;
            border: none;
        }
        .btn-primary:hover {
            background-color: #0056b3;
        }
        .logo {
            max-width: 55px; /* Ukuran logo */
            height: auto; /* Menjaga proporsi */
            display: block; /* Agar berada di tengah */
            margin: 0 auto 20px; /* Jarak bawah */
        }
        .form-group label {
            text-align: left; /* Memastikan label rata kiri */
            margin-bottom: 5px; /* Jarak bawah label */
        }
        .form-group input {
            text-align: left; /* Memastikan input rata kiri */
        }
    </style>
</head>
<body>
    <div class="container mt-5">
        <div class="login-container">
            <img src="{{ asset('images/logo_pku.png') }}" alt="Logo" class="logo">
            <h2 class="text-center mb-4">Login</h2>
            <form action="{{ route('login') }}" method="POST">
                @csrf
                <div class="form-group">
                    <label for="email">Email</label>
                    <input type="email" class="form-control" id="email" name="email" required>
                </div>
                <div class="form-group">
                    <label for="password">Password</label>
                    <input type="password" class="form-control" id="password" name="password" required>
                </div>
                <div class="d-flex justify-content-center mt-4">
                    <button type="submit" class="btn btn-primary">Login</button>
                </div>

                @if ($errors->any())
                    <div class="alert alert-danger mt-3">
                        {{ $errors->first() }}
                    </div>
                @endif
            </form>
        </div>
    </div>
</body>
</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Login</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.2.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">
</head>

<body>
    <div class="form-container">
        <img src="landing/img/logo3.png" alt="Logo">
        @session('status')
            <div class="alert alert-primary" role="alert" style="color: blue">
                {{ $value }}
            </div>
        @endsession
        <h1>Login</h1>
        <form action="{{ url('/proseslogin') }}" method="POST">
            @csrf
            <div class="form-floating">
                <input type="email" class="form-control" name="email" id="floatingInput" placeholder="Email address"
                    required>
                <label for="floatingInput">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" name="password" id="floatingPassword" placeholder="Password"
                    required>
                <label for="floatingPassword">Password</label>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Sign in</button>
            <div class="form-text">
                <a href="#">Forgot password?</a>
            </div>
            <div class="form-text">
                <a href="{{ url('/register') }}">Don't have an account? Register</a>
            </div>
        </form>
    </div>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <title>Register</title>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/5.3.0/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/custom.css">

</head>

<body>
    <div class="form-container">
        <img src="landing/img/logo3.png" alt="Logo">
        <h1>Register</h1>
        <form>
            <div class="form-floating">
                <input type="text" class="form-control" id="floatingName" placeholder="Full name" required>
                <label for="floatingName">Full name</label>
            </div>
            <div class="form-floating">
                <input type="email" class="form-control" id="floatingEmail" placeholder="Email address" required>
                <label for="floatingEmail">Email address</label>
            </div>
            <div class="form-floating">
                <input type="password" class="form-control" id="floatingPassword" placeholder="Password" required>
                <label for="floatingPassword">Password</label>
            </div>
            <button type="submit" class="btn btn-primary mb-3">Register</button>
            <div class="form-text">
                <a href="{{ url('/login') }}">Already have an account? Login</a>
            </div>
        </form>
    </div>
</body>

</html>

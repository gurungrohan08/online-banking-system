<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <style>
       
        .login-card {
            background: rgba(194, 247, 5, 0.9);
            padding: 30px;
            border-radius: 15px;
        }

        .form-control,
        .btn {
            border-radius: 10px;
        }

        h2 {
            color: black;
        }

        label {
            color: black;
        }
    </style>
</head>

<body>
    <x-navbar/>
    <div class="row">
    <div class="col-md-4"></div>
    <div class="col-md-4">
        <div class="login-card">
            <h2 class="text-center mb-4">Login</h2>
            @if (session('error'))
            <div class="alert alert-danger">
                {{ session('error') }}
            </div>
            @endif

            <form>
                @csrf
                <div class="mb-3">
                    <label for="acno" class="form-label">Account Number:</label>
                    <input type="acno" name="acno" id="acno" class="form-control" required autofocus>
                </div>
                <div class="mb-3">
                    <label for="pin" class="form-label">Enter Pin:</label>
                    <input type="password" name="pin" id="pin" class="form-control" required>
                </div>
                <input type="submit" value="Login" name="submit" class="btn btn-primary w-100">
            </form>
        </div>
    </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
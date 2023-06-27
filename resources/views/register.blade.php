<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Register</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <style>
        .card {
            border-radius: 30px;
        }

        .form-control {
            border-radius: 30px;
        }

        .d-grid {
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .btn-primary {
            border-radius: 30px;
        }
    </style>
</head>

<body style="background-color: rgb(0, 124, 165) ">
    <div class="row justify-content-center mt-5">
        <div class="col-lg-4">
            <div class="card">
                <div class="card-header">
                    <h1 class="card-title text-center">Register</h1>
                </div>
                <div class="card-body">
                    @if (Session::has('success'))
                        <div class="alert alert-success" role="alert">
                            {{ Session::get('success') }}
                        </div>
                    @endif
                    <form id="register-form" action="{{ route('register') }}" method="POST">
                        @csrf
                        <div class="mb-3">
                            <input type="text" name="name" class="form-control" id="name"
                                placeholder="Your Name" required>
                        </div>
                        <div class="mb-3">
                            <input type="email" name="email" class="form-control" id="email"
                                placeholder="Email Address" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="password" class="form-control" id="password"
                                placeholder="Password" required>
                        </div>
                        <div class="mb-3">
                            <input type="password" name="confirm_password" class="form-control" id="confirm-password"
                                placeholder="Repeat Password" required>
                            <small id="password-match" class="text-danger d-none">Password does not match!</small>
                        </div>
                        <div class="mb-3">
                            <div class="d-grid">
                                <button type="submit" class="btn btn-primary">Register</button>
                                <br>
                                <div class="mb-3 text-center">
                                    <a href="http://127.0.0.1:8000/login">Have created an account</a>
                                </div>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <script>
        document.getElementById('register-form').addEventListener('submit', function(event) {
            var password = document.getElementById('password').value;
            var confirmPassword = document.getElementById('confirm-password').value;
            var passwordMatch = document.getElementById('password-match');

            if (password !== confirmPassword) {
                event.preventDefault();
                passwordMatch.classList.remove('d-none');
            } else {
                passwordMatch.classList.add('d-none');
            }
        });
    </script>
</body>

</html>

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <style>
        body {
            background-color: rgb(0, 124, 165);
        }

        .container {
            margin-top: 10%;
        }

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

<body>
    <div class="container">
        <div class="row justify-content-center mt-5">
            <div class="col-lg-4">
                <div class="card">
                    <div class="card-header">
                        <h1 class="card-title text-center">Login</h1>
                    </div>
                    <div class="card-body">
                        @if (Session::has('error'))
                            <div class="alert alert-danger" role="alert">
                                {{ Session::get('error') }}
                            </div>
                        @endif
                        <form action="{{ route('login') }}" method="POST">
                            @csrf
                            <div class="mb-3">
                                <input type="email" name="email" class="form-control" id="email"
                                    placeholder="Email Address" required>
                            </div>
                            <div class="mb-3">
                                <input type="password" name="password" class="form-control" id="password"
                                    placeholder="Password">
                            </div>
                            <div class="mb-3">
                                <div class="d-grid">
                                    <button class="btn btn-primary">Login</button>
                                    <br>
                                    <div class="mb-2">
                                        <a href="http://127.0.0.1:8000/register">
                                            <center>Create an account first</center>
                                        </a>
                                    </div>
                                </div>
                            </div>
                    </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</body>

</html>

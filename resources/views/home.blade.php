<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Home</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-KK94CHFLLe+nY2dmCWGMq91rCGa5gtU4mk92HdvYe+M/SXH301p5ILy+dN9+nJOZ" crossorigin="anonymous">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
    <style>
        .nav-item {
            border-radius: 5px;
            background-color: rgb(104, 160, 13);
        }

        .nav-item:hover {
            background-color: rgb(7, 100, 7);
        }

        .text-center {
            margin-top: 5%;
        }
    </style>
</head>

<body
    style="background-image: url('{{ asset('storage/image/bgbiru.webp') }}'); background-size: cover; background-position: center; background-repeat: no-repeat; height: 100vh;">
    <nav class="navbar navbar-expand-lg bg-primary">
        <div class="container">
            <a class="navbar-brand" href="#"></a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav me-auto mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="nav-link active" style="color: whitesmoke" aria-current="page"
                            href="http://localhost:8000/posts">Shop</a>
                    </li>
                </ul>
                <form action="{{ route('logout') }}" method="POST" class="d-flex" role="search">
                    @csrf
                    @method('DELETE')
                    <button class="btn btn-danger" type="submit">Logout</button>
                </form>
            </div>
        </div>
    </nav>

    <div class="container text-center">
        <h1 style="font-family: monserrat;"><b> Welcome to our store, {{ Auth::user()->name }}</b></h1>
    </div>
    <div id="myCarousel" class="carousel slide mt-5" data-bs-ride="carousel" data-bs-interval="5000">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img src="{{ asset('storage/image/diadora.jpeg') }}" alt="Diadora"
                        style="height: 400px; width: 400px; border-radius:30px;">
                </div>
            </div>
            <div class="carousel-item">
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img src="{{ asset('storage/image/nike.jpeg') }}" alt="Nike"
                        style="height: 400px; width: 550px; border-radius:30px;">
                </div>
            </div>
            <div class="carousel-item">
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img src="{{ asset('storage/image/specs.jpeg') }}" alt="specs"
                        style="height: 400px; width: 550px; border-radius:30px;">
                </div>
            </div>
            <div class="carousel-item">
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img src="{{ asset('storage/image/adidas.jpg') }}" alt="specs"
                        style="height: 400px; width: 550px; border-radius:30px;">
                </div>
            </div>
            <div class="carousel-item">
                <div style="display: flex; justify-content: center; align-items: center;">
                    <img src="{{ asset('storage/image/nb.jpg') }}" alt="specs"
                        style="height: 400px; width: 400px; border-radius:30px;">
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#myCarousel" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#myCarousel" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0-alpha3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ENjdO4Dr2bkBIFxQpeoTz1HIcje39Wm4jDKdf19U8gI4ddQ3GYNS7NTKfAdVQSZe" crossorigin="anonymous">
    </script>
</body>

</html>

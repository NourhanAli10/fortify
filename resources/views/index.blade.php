<!doctype html>
<html lang="en">

<head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css"
        integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link href="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">
    <style>
        @import url('https://fonts.googleapis.com/css?family=Open+Sans:300,400,700,800');

        body {
            padding: 0;
            margin: 0;
            font-family: "Open Sans";
        }

        h1 {
            text-align: center;
            font-size: 36px;
        }

        h3 {
            text-align: center;
            font-size: 30px;
            padding: 20px;
            font-weight: 400;
            letter-spacing: 1px;

        }

        input[type=text] {

            padding: 12px 20px;
            margin: 9px 0;
            box-sizing: border-box;
            border-radius: 10px;
            outline: none;
            width: 40%;
            height: 20%;
            boredr: 1px solid #7c7b7b;
        }

        input[type=text]:hover {
            border: 1px solid #000;
            transition: 6s;
        }

        ::placeholder {
            color: #000;
            opacity: 1;
            font-weight: 400;
            font-size: 20px;
            text-align: center;


        }

        button {
            height: 50px;
            padding: 0;
            margin: 0;

        }

        .btn {
            border-radius: 30px;
            width: 14%;
            margin-left: 5px;
            font-size: 20px;

        }

        footer {
            background: #000;
            text-align: center;
            padding: 10px;

        }

        footer p {
            color: #fff;
            padding: 10px;
            margin: 0;
            font-weight: 700;
            font-size: 20px;
        }

        @media(max-width: 992px) {
            .btn {
                width: 20%
            }

            input[type=text] {
                width: 50%;
            }
        }

        @media(max-width: 768px) {
            .btn {
                width: 40%
            }

            input[type=text] {
                width: 90%;
            }
        }

        @media(max-width: 440px) {
            .btn {
                width: 50%;
                font-size: 18px;
            }

            input[type=text] {
                width: 100%;
            }

            h3 {
                font-size: 22px;
            }
        }

        @media(max-width: 373px) {
            h3 {
                font-size: 20px;
                font-weight: 600;
            }

            h1 {
                font-size: 28px;
                font-weight: 400;
            }


        }
    </style>
</head>

<body>
    <div class="container">
        <nav class="navbar navbar-expand-lg navbar-light bg-light">

            <a class="navbar-brand" href="#">Navbar</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
                aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Link</a>
                    </li>
                    @auth
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            {{ Auth::user()->name}}
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href = "{{ route('profile') }}">profile</a>
                            <form action ="{{ route('logout') }}" method="POST">
                                @csrf
                                <button class="dropdown-item">Log out</button>
                            </form>

                        </div>
                    </li>
                    @endauth
                    @guest
                        <button type="submit" class="btn btn-lg">
                            <a href="{{ route('login') }}" class="fw-bold text-body">login</a>
                        </button>
                        <button type="submit" class="btn btn-lg">
                            <a href="{{ route('register') }}" class="fw-bold text-body">register</a>
                        </button>
                    @endguest
                </ul>
            </div>
        </nav>
    </div>

    <div class="container">
        <h1 class="text-center m-5">SUBSCRIBE TO OUR NEWSLETTER</h1>
    </div>


    <section class="bg-success text-center p-5 mt-4">
        <div class="container p-3">
            <h3>SUBSCRIBE NOW</h3>
            <form action="#" method="Post">
                <input type="text" name="text" placeholder="Enter Your Email Id">
                <button type="button" class="btn btn-info">Subscribe</button>
            </form>
        </div>
    </section>







    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js"
        integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous">
    </script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"
        integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous">
    </script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"
        integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous">
    </script>
    <script src="//maxcdn.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <script src="//cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>

</body>

</html>

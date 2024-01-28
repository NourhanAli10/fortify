<!doctype html>
<html lang="en">
  <head>
    <title>Title</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  <style>
     body {
    background-color: #BA68C8
}

.main-verification-input {
    background: #fff;
    padding: 0 120px 0 0;
    border-radius: 1px;
    margin-top: 6px;
}

.fl-wrap {
    float: left;
    width: 100%;
    position: relative;
        border-radius: 4px;
}

.main-verification-input:before {
    content: '';
    position: absolute;
    bottom: -40px;
    width: 50px;
    height: 1px;
    background: rgba(255, 255, 255, 0.41);
    left: 50%;
    margin-left: -25px
}

.main-verification-input-item {
    float: left;
    width: 100%;
    box-sizing: border-box;
    border-right: 1px solid #eee;
    height: 50px;
    position: relative
}

.main-verification-input-item input:first-child {
    border-radius: 100%
}

.main-verification-input-item input {
    float: left;
    border: none;
    width: 100%;
    height: 50px;
    padding-left: 20px
}

.main-verification-button {
    background: #4DB7FE
}

.main-verification-button {
    position: absolute;
    right: 0px;
    height: 50px;
    width: 120px;
    color: #fff;
    top: 0;
    border: none;
        border-top-right-radius: 4px;
    border-bottom-right-radius: 4px;
    cursor: pointer
}

.main-verification-input-wrap {
    max-width: 500px;
    margin: 20px auto;
    position: relative;
        margin-top: 129px;
}

.main-verification-input-wrap ul{

           background-color: #fff;
    padding: 27px;
    color: #757575;
    border-radius: 4px;
}

a{
    text-decoration: none !important;
    color: #9C27B0;
}

:focus {
    outline: 0
}

@media only screen and (max-width: 768px) {
    .main-verification-input {
        background: rgba(255, 255, 255, 0.2);
        padding: 14px 20px 10px;
        border-radius: 10px;
        box-shadow: 0px 0px 0px 10px rgba(255, 255, 255, 0.0)
    }

    .main-verification-input-item {
        width: 100%;
        border: 1px solid #eee;
        height: 50px;
        border: none;
        margin-bottom: 10px
    }

    .main-verification-input-item input {
        border-radius: 6px !important;
        background: #fff
    }

    .main-verification-button {
        position: relative;
        float: left;
        width: 100%;
        border-radius: 6px
    }
}
  </style>
</head>
  <body>
    <div class="row">
        <div class="col-md-12">
            {{ session('status') }}

           <div class="main-verification-input-wrap">
            @if (session('status') == "verification-link-sent")
            <div class="alert alert-success">verification link has been sent to your email </div>
            @endif
             <ul>
            <li>You will recieve a verification code on your mail after you registered. Enter that code below.</li>
            <li>If somehow, you did not recieve the verification email then
                <form method = "POST" action="{{ route('verification.send') }}">
                    @csrf
                    <button class= "btn">resend the verification email</button>
                </form>
            </li>
          </ul>
           </div>
        </div>
      </div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
  </body>
</html>

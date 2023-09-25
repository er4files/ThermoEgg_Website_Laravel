<!doctype html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
        <link rel="stylesheet" href="{{asset('assets/css/login.css')}}">
    <title>Login</title>
</head>
<body>
    <div class="row justify-content-center" style="margin-top: 150px">
        <div class="col-lg-6">
            <main class="form-registration">
                <div>
                    <a class="logo">
                        <img src="{{asset('assets/images/logoweb.png')}}" alt="">
                    </a>
                </div>
                <br>
                @if (session('loginError'))
                    <div class="alert alert-danger" role="alert">
                        {{ session('loginError') }}
                    </div>
                @endif
                <form action="/login" method="POST">
                    @csrf
                    <div class="form-floating">
                        <input type="email" class="form-control" name="email" id="email" required
                            value="{{ old('email') }}" placeholder="name@example.com">
                        <label for="email">Email address</label>
                    </div>
                    <div class="form-floating">
                        <input type="password" class="form-control" name="password" id="password" required
                            placeholder="Password">
                        <label for="password">Password</label>
                    </div>
                    <button class="w-100 btn btn-lg btn-primary mt-3" type="submit">Login</button>
                </form>
                <small class="d-block mt-3">Don't have an account? <a href="/register">Register</a></small>
            </main>
        </div>
    </div>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ka7Sk0Gln4gmtz2MlQnikT1wXgYsOg+OMhuP+IlRH9sENBO0LRn5q+8nbTov4+1p" crossorigin="anonymous">
    </script>
</body>
</html>

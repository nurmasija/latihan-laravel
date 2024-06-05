<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
  </head>
  <body>
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-lg-4">
                <h2>Login</h2>
                @if ($errors->any())
                <ul>
                    @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                    @endforeach
                </ul>
                @endif

                @if (Session::has('login'))
                    <div class="alert alert-primary">
                        {{ Session::get('login') }}
                    </div>
                @endif
                <form action="{{ route('aksi_login') }}" method="post">
                    @csrf
                <div class="mb-3">
                    <label for="nama">Email</label>
                    <input type="text" name="email" class="form-control" placeholder="Masukan Email">
                </div>
                <div class="mb-3">
                    <label for="nama">Password</label>
                    <input type="password" name="password" class="form-control" placeholder="Masukan Password">
                </div>
                <button type="submit" class="btn btn-primary">Login</button>
                </form>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js" integrity="sha384-YvpcrYf0tY3lHB60NNkmXc5s9fDVZLESaAA55NDzOxhy9GkcIdslK1eN7N6jIeHz" crossorigin="anonymous"></script>
  </body>
</html>
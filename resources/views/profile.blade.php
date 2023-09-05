<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Profile')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
@include('include.header')
@yield('content')
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/js/bootstrap.bundle.min.js"></script>
@include('include.errors')
<form action="{{route('profile')}}" method="POST" class="ms-auto me-auto mt-3" style="width: 500px">
    @csrf
    <section class="py-5 text-center container">
        <div class="row py-lg-5">
            <div class="col-lg-6 col-md-8 mx-auto">
                <h1 class="fw-light">Hello, @auth{{auth()->user()->name}}@endauth</h1>
                <p class="lead text-body-secondary">What would you like to do this time?</p>
                <div class="container">
                    <div class="mb-3">
                        <a href="{{route('saved-passwords-post')}}" class="btn btn-primary">Review saved passwords</a>
                    </div>
                </div>
                <div class="container">
                    <div class="mb-3">
                        <a href="{{route('generate-password-post')}}" class="btn btn-success">Generate new password</a>
                    </div>
                </div>
            </div>
        </div>
    </section>
</form>
</body>
</html>

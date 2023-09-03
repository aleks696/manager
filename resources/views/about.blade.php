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

<div class="container">
    @include('include.errors')
</div>
<h1>This application can help you with keeping your security on level.</h1>
<h2>You can create random secure passwords for your needs</h2>
<h2>Or you can save all favourite passwords for further</h2>
</body>
</html>

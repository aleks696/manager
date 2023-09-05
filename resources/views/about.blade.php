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

<div class="container">
    <div class="container w-100 m-auto!important text-center">
        <div class="row row-cols-1 row-cols-lg align-items-stretch g-4 py-5">
            <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column ">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold py-2 ">Password Generator</h3>
                        @csrf
                        <h2 class="fw-bolder">This application can help you with keeping your security level.</h2>
                        <h3 class="fw-light">You can create random password for your needs - Click <a class="text-bg-success text-decoration-underline rounded-2 shadow-lg">Generate Password</a></h3>
                        <h3 class="fw-light">Or save all favourite passwords for further - Click <a class="text-bg-primary text-decoration-underline rounded-2 shadow-lg">Save Password</a></h3>
                        <h4 class="fw-light">It is based by generating password from random symbols that is much more uncrackable.</h4>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>

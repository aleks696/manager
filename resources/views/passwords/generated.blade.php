@extends('layout')
@section('content')
    <!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Password Generator</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<div class="container w-50 m-auto!important text-center">
    <div class="row row-cols-1 row-cols-lg align-items-stretch g-4 py-5">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column ">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold py-2 ">Password Generator</h3>
                    <h2> Your password has been successfully saved. </h2><br><br>
                    <div class="mb-3">
                        <a href="{{route('saved-passwords-post')}}" class="btn btn-primary">Review saved passwords</a>
                    </div>
                    <div class="mb-3">
                        <a href="{{route('generate-password-post')}}" class="btn btn-success">Generate new password</a>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</body>
</html>
@endsection

@extends('layout')
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>@yield('title', 'Profile Passwords')</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.1/dist/css/bootstrap.min.css" rel="stylesheet">
    <meta name="csrf-token" content="{{ csrf_token() }}">
{{--    Allow this if you want to refresh page in some time. By default it is set to 5s--}}
{{--    <meta http-equiv="refresh" content="5;url={{ request()->url() }}">--}}
</head>
<body>
@section('content')
@include('include.errors')
{{--    Code for executing saved passwords from DB and show on the page--}}

    <div class="container w-50 m-auto!important text-center">
        <div class="row row-cols-1 row-cols-lg align-items-stretch g-4 py-5">
            <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column ">
                <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
                    <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                        <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold py-2 ">Password Generator</h3>
                        @csrf
                        <h3>Your saved Passwords:<br></h3><br>
                        <div class="row featurette d-flex border-box">
                            <ul>
                                @foreach ($passwords as $password)
                                    <form method="POST" action="{{ route('delete-password', ['id' => $password->id]) }}">
                                        @csrf
                                        @method('DELETE')
                                        <div class="col-md7 order-md-2">
                                        <span>{{ $password->password }}</span></div>
                                        <div class="col-md7 order-md-1">
                                        <button type="submit" class="btn btn-danger">Delete</button></div>
                                    </form><br>
                                @endforeach
                            </ul>
                        </div>
                        <div class="mb-3">
                            <a href="{{route('generate-password-post')}}" class="btn btn-success">Generate new password</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

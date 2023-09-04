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
{{--container w-50 m-auto!important"--}}
<div class="container w-50 m-auto!important text-center">
    <div class="row row-cols-1 row-cols-lg align-items-stretch g-4 py-5">
        <div class="cover-container d-flex w-100 h-100 p-3 mx-auto flex-column ">
            <div class="card card-cover h-100 overflow-hidden text-bg-dark rounded-4 shadow-lg">
                <div class="d-flex flex-column h-100 p-5 pb-3 text-white text-shadow-1">
                    <h3 class="pt-5 mt-5 mb-4 display-6 lh-1 fw-bold py-2 ">Password Generator</h3>
{{--                    <form id="passwordForm">--}}
{{--                        <label for="passwordLength">Enter password length: </label><br>--}}
{{--                        <input class="text-center rounded-4" type="number" id="passwordLength" name="passwordLength" min="3"><br><br>--}}
{{--                        <button class="btn btn-success w-50 py-2" type="button" id="generateBtn">Generate Password</button>--}}
{{--                    </form><br>--}}
{{--                    <h3>Generated Password: </h3><br>--}}
{{--                    <div id="generatedPassword"></div><br><br>--}}
{{--                    <form action="{{route('savePassword')}}">--}}
{{--                        <input class="text-center rounded-4" type="text" id="passwordLength" name="name" ><br><br>--}}
{{--                        <button class="btn btn-primary w-100 py-2" type="submit" id="saveBtn" name="saveBtn" style="display: none;">Save Password</button><br>--}}
{{--                    </form>--}}

                    <form method="POST" action="{{ route('generate-password') }}">
                        @csrf
                        <label for="passwordLength">Enter password length: </label>
                        <input type="number" id="passwordLength" name="passwordLength" min="1">
                        <button type="submit">Generate Password</button>
                    </form>

                    @isset($randomPassword)
                        <div>
                            Generated password: {{ $randomPassword }}
                            <form method="POST" action="{{ route('save-password') }}">
                                @csrf
                                <input type="hidden" name="password" value="{{ $randomPassword }}">
                                <button type="submit">Save Password</button>
                            </form>
                        </div>
                    @endisset
                </div>
            </div>
        </div>
    </div>
</div>
<script src="{{ asset('js/script.js') }}" defer></script>

</body>
</html>
@endsection

@extends('layout')
@section('content')
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Generated Password</title>
    <script src="{{ asset('js/script.js') }}" defer></script>
    <meta name="csrf-token" content="{{ csrf_token() }}">
</head>
<body>
<h1>Generated Password</h1>
<p>Generated password: {{ $randomPassword }}</p>
<button id="saveBtn">Save Password</button>
</body>
</html>
@endsection

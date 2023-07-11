<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<body>
    <h2>Halo ini adalah halaman home</h2>

    <h4>Halloo {{ auth()->user()->name }}</h4>
    {{-- <h5>Ini adalah username anda :  {{ $user->username }}</h5> --}}

    <a href="#" onclick="
        event.preventDefault();
        document.getElementById('logout-form').submit();
    ">Logout</a>
    
    <form id="logout-form" action="{{ route('logout') }}" method="post">
        @csrf
    </form>
</body>
</html>

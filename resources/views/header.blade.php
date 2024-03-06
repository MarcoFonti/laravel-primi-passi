<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Laravel Primi Passi</title>
</head>
<body>
    {{-- RECUPERO TITOLO --}}
    <h1>{{ $title }}</h1>
    {{-- RECUPERO I VARI ELEMENTI PER POTER NAVIGARE TRA LORO --}}
    <ul>
        <li><a href=" {{ route('home_page') }} ">{{ $home_page }}</a></li>
        <li><a href=" {{ route('contacts') }} ">{{ $contacts }}</a></li>
        <li><a href=" {{ route('information') }} ">{{ $information }}</a></li>
    </ul>
</body>
</html>
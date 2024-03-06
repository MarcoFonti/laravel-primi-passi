<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Contact</title>
</head>
<body>
    {{-- RECUPERO IL TITOLO --}}
    <h1>{{ $title }}</h1>
    {{-- CICLO PER RECUPERARE TUTTI GLI ELEMENTI --}}
    <ul>
        @foreach ( $contacts as $contact )
            <li>{{ $contact['name'] }} {{ $contact['surname'] }} : {{ $contact['number'] }} </li>
        @endforeach
    </ul>
    {{-- LINK PER TORNARE ALLA PAGINA INIZIALE --}}
    <a href=" {{ route('header') }} "> Torna all'header</a>
</body>
</html>
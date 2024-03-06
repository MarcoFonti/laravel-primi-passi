<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>HomePage</title>
</head>
<body>
    {{-- RECUPERO DESCRIZIONE --}}
    <h1>{{ $description }}</h1>
    {{-- LINK PER TORNARE ALLA PAGINA INIZIALE --}}
    <a href=" {{ route('header') }} "> Torna all'header</a>
</body>
</html>
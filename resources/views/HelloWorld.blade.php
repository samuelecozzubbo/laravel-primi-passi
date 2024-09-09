<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-QWTKZyjpPEjISv5WaRU9OFeRpok6YctnYmDr5pNlyT2bRjXh0JMhjY6hW+ALEwIH" crossorigin="anonymous">
    <title>HelloWorld</title>
</head>

<body>
    <div class="container">
        <h1>{{ $titolo }}</h1>
        <h2>{{ $sottotitolo }}</h2>

        {{-- Ciclo For Each --}}
        <h3>Ciclo foreach</h3>
        <ul style="list-style: none">
            @if (count($colori) > 0)
                @foreach ($colori as $colore)
                    <li>{{ $loop->iteration }}: {{ $colore }}</li>
                @endforeach
            @else
                <h3>Non ci sono colori</h3>
            @endif
        </ul>
    </div>



</body>

</html>

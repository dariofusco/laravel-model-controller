<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    @vite(['resources/scss/app.scss', 'resources/js/app.js'])
    <title>Document</title>
</head>

<body>

    <div class="container">
        <h1 class="text-center">Movies</h1>
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-4 py-3">
                    <div class="card" style="width: 18rem;">
                        <ul class="list-group list-group-flush">
                            <li class="list-group-item">ID: {{ $movie->id }}</li>
                            <li class="list-group-item">Titolo: {{ $movie->title }}</li>
                            <li class="list-group-item">Titolo Originale: {{ $movie->original_title }}</li>
                            <li class="list-group-item">Nazionalità: {{ $movie->nationality }}</li>
                            <li class="list-group-item">Data: {{ $movie->date }}</li>
                            <li class="list-group-item">Voto: {{ $movie->vote }}</li>
                        </ul>
                    </div>
                </div>
            @endforeach
        </div>
    </div>

</body>

</html>

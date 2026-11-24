<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <title>Album photo</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav>
        <a href="{{ route('index') }}">Accueil</a>
        <a href="{{ route('albums') }}">Les albums</a>
    </nav>

    <main>
        @yield("content")
    </main>
</body>
</html>
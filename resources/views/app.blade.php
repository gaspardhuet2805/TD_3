<!DOCTYPE html>
<html lang="fr">
<head>
    <meta charset="UTF-8">
    <title>Mon Album</title>
    <link rel="stylesheet" href="{{ asset('css/style.css') }}">
</head>

<body>
    <nav>
        <span class="logo">Mon Album</span>
        <div class="liens">
            <a href="{{ route('albums') }}">Albums</a>
        </div>
    </nav>

    <main>
        @yield("content")
    </main>
</body>
</html>
@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/submissionform.css">
    <title>Articles</title>
</head>
<body>
    <h1>Articles</h1>
    
    <ul>
        @foreach($articles as $article)
            <li>
                <strong>Title:</strong> {{ $article->title }}<br>
                <strong>Author:</strong> {{ $article->user->name }}<br>
                <!-- Itt megjelenítheted további cikkinformációkat vagy a szükséges adatokat -->
            </li>
            <hr>
        @endforeach
    </ul>
</body>
</html>
@endsection

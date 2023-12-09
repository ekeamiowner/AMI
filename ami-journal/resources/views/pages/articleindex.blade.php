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
                <strong>Author:</strong> {{ optional($article->user)->name }}<br>
                <strong>Editor:</strong> {{ optional($article->editor)->name }}<br>
                <strong>Abstract:</strong> {{ $article->abstract }}<br>
                <strong>Language:</strong> {{ $article->language }}<br>
            </li>
            <hr>
        @endforeach
    </ul>

    <div class="pagination">
        {{ $articles->links() }}
    </div>
</body>
</html>
@endsection

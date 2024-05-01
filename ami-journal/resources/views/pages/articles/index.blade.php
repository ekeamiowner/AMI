@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/articleindex.css">
    <title>Articles</title>
    @vite('resources/css/app.css')
</head>
<body>
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif
    
    <h1>Articles</h1>
    <form action="{{ route('articles.index') }}" method="GET" class="form-inline">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search articles" value="{{ $search }}">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
    <br></br>
        @foreach($articles->where('state', 'ACCEPTED') as $article)
            <div class="article-container">
                <div class="header-section">
                    <h3> {{ $article->title }}</h3>
                    <div class="author-reviewer">
                        <span class="author">Author: {{ optional($article->user)->name }}</span>
                        <span class="editor">Editor: {{ optional($article->editor)->name }}</span>
                    </div>
                </div>
                <div class="abstract-section">
                    <div class="abstract-content">{{ $article->abstract }}</div>
                    <div class="language">{{ $article->language }}</div>
                </div>
            </div>
            <hr>
        @endforeach
    <div class="pagination">
        {{ $articles->links() }}
    </div>
</body>
</html>
@endsection

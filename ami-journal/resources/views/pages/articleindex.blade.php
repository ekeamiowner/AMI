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
<style>
    .article-container 
    {
    margin-bottom: 10px;
    padding: 10px;
    border: 1px solid #ccc;
    }

    .header-section 
    {
        background-color: #f2f2f2;
        padding: 10px;
    }

    .abstract-section 
    {
        background-color: #e3ff54;
        padding: 10px;
    }

    .language 
    {
        font-weight: bold;
    }

    .author-reviewer 
    {
    margin-top: 5px;
    }

    .author,
    .reviewer 
    {
    display: inline-block;
    margin-right: 10px;
    }
</style>
<body>
    <h1>Articles</h1>
    <form action="{{ route('pages.articleindex') }}" method="GET">
        <input type="text" name="search" placeholder="Search articles">
        <button type="submit">Search</button>
    </form>
    <br></br>
    <ul>
        @foreach($articles as $article)
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
    </ul>

    <div class="pagination">
        {{ $articles->links() }}
    </div>
</body>
</html>
@endsection

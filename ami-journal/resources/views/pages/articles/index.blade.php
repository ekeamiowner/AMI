@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/articleindex.css">
    <title>Articles</title>
</head>
<body>
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
    @endif
    
    <form action="{{ route('articles.index') }}" method="GET" class="form-inline">
        <div class="input-group" style="margin-bottom: 10px;">
            <input type="text" name="search" class="form-control" placeholder="Search articles" value="{{ $search }}">
            <div class="input-group-append">
                <button type="submit" class="btn custom-search-btn" style="margin-left: 5px;">Search</button>
            </div>
        </div>
    </form>
    <div style="margin-bottom: 30px;"></div>
        @foreach($articles->where('state', 'ACCEPTED') as $article)
            <div class="article-container" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
                <div class="header-section">
                    <h3 class="bold"> {{ $article->title }}</h3>
                    <div class="author-reviewer">
                        <span class="author">Author: {{ optional($article->user)->name }}</span>
                        <span class="editor">Editor: {{ optional($article->editor)->name }}</span>
                    </div>
                </div>
                <div class="abstract-section">
                    <div class="abstract-content">{{ $article->abstract }}</div>
                    <div class="bold">{{ $article->language }}</div>
                </div>
            </div>
        @endforeach
    <div class="pagination">
        {{ $articles->appends(['search' => $search])->links() }}
    </div>
</body>
</html>
@endsection

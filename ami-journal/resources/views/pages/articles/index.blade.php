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
                    <a href="{{ route('open-article') }}?file={{ $article->source }}" class="font-bold text-lg">
                        {{ $article->title }}
                    </a>
                    <div class="author-reviewer">
                        <span>Author:</span> {{ optional($article->user)->name }}
                    </div>
                    <div class="author-reviewer italic">
                        <span>Editor:</span> {{ optional($article->editor)->name }}
                    </div>
                </div>
                <div class="abstract-section">
                    <div class="row">
                        <div class="col-md-12">
                            <div class="abstract-content">{{ $article->abstract }}</div>
                        </div>
                    </div>
                    <div class="row">
                        <div class="col-md-6 mt-4">
                            <span>DOI:</span><span class="bold"> {{ $article->doi }}</span>
                        </div>
                        <div class="col-md-6 mt-4">
                            <div class="abstract-content text-right">{{ $article->updated_at }}</div>
                        </div>
                    </div>
                </div>
            </div>
        @endforeach
    <div class="py-6">
        {{ $articles->appends(['search' => $search])->links() }}
    </div>
</body>
</html>
@endsection

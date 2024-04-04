@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/articleindex.css">
    <title>Editor Page</title>
</head>
<body>
    @if(Session::has('success'))
    <div class="alert alert-success">
        {{ Session::get('success') }}
    </div>
@endif
@if(Session::has('error'))
    <div class="alert alert-danger">
        {{ Session::get('error') }}
    </div>
@endif
    <h1>Articles to Edit</h1>
    <form action="{{ route('editor.index') }}" method="GET" class="form-inline">
        <div class="input-group">
            <!-- <input type="text" name="search" class="form-control" placeholder="Search articles" value="{ { $search }}"> -->
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
    <br>
    <div class="dropdown">
        <button class="btn btn-warning dropdown-toggle" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
          State to show
        </button>
        <div class="dropdown-menu" aria-labelledby="dropdownMenuButton">
            <a class="dropdown-item" href="#">All</a>
            <a class="dropdown-item" href="#">Accepted</a>
            <a class="dropdown-item" href="#">Submitted</a>
            <a class="dropdown-item" href="#">Rejected</a>
            <a class="dropdown-item" href="#">Under Review</a>
        </div>
      </div>

      
    </br>
        <!-- Jelenjen meg minden olyan article ami a dropdown-ban lett kiválasztva -->

    <!--   EREDETI FOREACH (hibakódot dobott, mert nem találja a változókat) 
    
    </br>
    @ foreach($articles->where('state', 'ACCEPTED') as $article)
        <div class="article-container">
            <div class="header-section">
                <h3> { { $article->title }}</h3>
                <div class="author-reviewer">
                    <span class="author">Author: { { optional($article->user)->name }}</span>
                    <span class="editor">Editor: { { optional($article->editor)->name }}</span>
                </div>
            </div>
            <div class="abstract-section">
                <div class="abstract-content">{ { $article->abstract }}</div>
                <div class="language">{ { $article->language }}</div>
            </div>
        </div>
        <hr>
    @ endforeach
    -->
    <div class="pagination">
        <!-- { { $articles->links() }} -->
    </div>
</body>
</html>
@endsection

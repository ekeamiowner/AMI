@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/about.css">
    <title>Reviews</title>
    @vite('resources/views/css/app.css')
</head>
<body>
    <div class="content">
        <h1>Reviews</h1>
        
        <div>
            @foreach ($reviews as $review)
                <div>
                    <p>Revision ID: {{ $review->revision_id }}</p>
                    <p>Created At: {{ $review->created_at }}</p>
                    <p>Article ID: {{ $review->revision->article_id }}</p>
                    <p>Article Author: {{ $review->article->user->name }}</p>
                    <p>Article Title: {{ $review->article->title }}</p>
                    <p>Reviewer: {{ $review->user->name }}</p>
                    <p>Content: {{ $review->content }}</p>
                    <p>State: {{ $review->state }}</p>
                </div>
            @endforeach
        </div>

        {{ $reviews->links() }}
    </div>
</body>
</html>
@endsection

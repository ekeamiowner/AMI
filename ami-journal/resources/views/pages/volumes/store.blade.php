@extends('layouts.app')

@section('content')
<div class="container">
    <h1>{{ $volume->title }}</h1>
    <img src="{{ asset('covers/' . $volume->cover) }}" alt="Cover image">
    
    <form action="{{ route('volumes.updateArticles', $volume->id) }}" method="POST">
        @csrf
        @method('PUT')
        
        <h2>Kötethez tartozó cikkek</h2>
        @foreach($volumeArticles as $article)
            <div>
                <input type="checkbox" name="articles[]" value="{{ $article->id }}" checked>
                {{ $article->title }}
            </div>
        @endforeach
        
        <h2>Elérhető cikkek</h2>
        @foreach($availableArticles as $article)
            <div>
                <input type="checkbox" name="articles[]" value="{{ $article->id }}">
                {{ $article->title }}
            </div>
        @endforeach
        
        <button type="submit">Submit</button>
    </form>
</div>
@endsection
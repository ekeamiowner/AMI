@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-between">
        <div class="col">
            <h1>Volumes</h1>
        </div>
        <div class="col text-right">
            <a href="{{ route('volumes.create') }}" class="btn btn-primary">Create a new volume</a>
        </div>
    </div>
    @if($volumes->isEmpty())
        <p>Nincsenek kötetek.</p>
    @else
        @foreach ($volumes as $volume)
            <div class="card mt-3">
                <div class="card-header">
                    {{ $volume->title }}
                    <a href="{{ route('volumes.edit', $volume->id) }}" class="btn btn-success float-right">Edit</a>
                </div>
                <div class="card-body">
                    <h5>Articles</h5>
                    @if($volume->articles->isEmpty())
                        <p>Nincsenek cikkek ebben a kötetben.</p>
                    @else
                        <ul>
                            @foreach ($volume->articles as $article)
                                <li>{{ $article->title }} by {{ $article->author ?? 'Unknown author' }} - Updated at: {{ $article->updated_at->format('Y-m-d H:i') }}</li>
                            @endforeach
                        </ul>
                    @endif
                </div>
            </div>
        @endforeach
    @endif
</div>
@endsection
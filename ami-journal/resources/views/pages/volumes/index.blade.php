{{-- resources/views/pages/volumes/index.blade.php --}}

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
    @foreach ($volumes as $volume)
        <div class="card mt-3">
            <div class="card-header">
                {{ $volume->title }}
                <a href="{{ route('volumes.store', $volume->id) }}" class="btn btn-success float-right">Store</a>
            </div>
            <div class="card-body">
                <h5>Articles</h5>
                <ul>
                    @foreach ($volume->articles as $article)
                        <li>{{ $article->title }} - Updated at: {{ $article->updated_at }}</li>
                    @endforeach
                </ul>
            </div>
        </div>
    @endforeach
</div>
@endsection
@extends('layouts.main')

@section('content')

@if(session('success'))
    <div class="alert alert-success">
        {{ session('success') }}
    </div>
@endif

@if(session('error'))
    <div class="alert alert-danger">
        {{ session('error') }}
    </div>
@endif

<h1>Articles to Edit</h1>
<link rel="stylesheet" href="/css/articleindex.css">

<form action="{{ route('editor.index') }}" method="GET" class="form-inline">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search articles to edit" value="{{ $search }}" style="width: 50%">
        <input type="text" name="search" class="form-control disabled" placeholder="Status:" style="width: 1%;background-color:white;" disabled>
        <select name="status" class="form-select" aria-label="Status" style="width: 7%;border-left:2px solid lightgray">
            @foreach(['SUBMITTED', 'ACCEPTED', 'REJECTED', 'UNDER_REVIEW', 'ALL'] as $option)
                <option value="{{ $option }}" {{ $status === $option ? 'selected' : '' }}>{{ ucfirst(strtolower($option)) }}</option>
            @endforeach
        </select>
        <div class="input-group-append">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </div>
</form>

<br><br>

@foreach($articles as $article)
    <div class="article-container">
        <div class="header-section d-flex">
            <div class="p-2 w-100">
                <h3>{{ $article->title }}</h3>
                <div class="author-reviewer">
                    <span class="author">Author: {{ optional($article->user)->name }}</span>
                    <span class="editor">Editor: {{ $article->editor ? $article->editor->name : '' }}</span>
                    <span class="recommended_editor">Recommended editor: {{ $article->recommended_editor ? $article->recommended_editor->name : '' }}</span>
                </div>
            </div>
            <div class="p-2 flex-shrink-1 justify-content-end">
                <form method="POST" action="{{ route('editor.download') }}">
                    @csrf
                    <button type="submit" name="file" value="{{ $article->source }}">Download PDF file</button>
                    <button type="submit" name="file" value="{{ $article->latex_path }}">Download latex file</button>
                </form>
                @csrf
                <form action="{{ route('editor.update') }}" method="POST" class="form-inline">
                    @csrf
                    @method('PUT')
                    <input type="hidden" name="article_id" value="{{ $article->id }}">
                    <select name="status" class="form-select" aria-label="Status" style="border-left:2px solid lightgray">
                        @foreach(['SUBMITTED', 'ACCEPTED', 'REJECTED', 'UNDER_REVIEW'] as $option)
                            <option value="{{ $option }}" {{ $article->state === $option ? 'selected' : '' }}>{{ ucfirst(strtolower($option)) }}</option>
                        @endforeach
                    </select>
                    <input type="submit" value="SUBMIT">
                </form>
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

@endsection

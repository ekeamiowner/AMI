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

@php
    $status = request()->has('status') ? request('status') : 'SUBMITTED';
@endphp

<h1>Articles to Edit</h1>
<link rel="stylesheet" href="/css/articleindex.css">

<form action="{{ route('editor.index') }}" method="GET" class="form-inline">
    <div class="input-group">
        <input type="text" name="search" class="form-control" placeholder="Search articles to edit" value="{{ $search }}" style="width: 50%">
        <input type="text" name="search" class="form-control disabled" placeholder="Status:" style="width: 1%;background-color:white;" disabled>
        <select name="status" class="form-select" aria-label="Status" style="width: 7%;border-left:2px solid lightgray">
            <option selected value="SUBMITTED" {{ $status === 'SUBMITTED' ? 'selected' : '' }}>Submitted</option>
            <option value="ALL" {{ $status === 'ALL' ? 'selected' : '' }}>All</option>
            <option value="ACCEPTED" {{ $status === 'ACCEPTED' ? 'selected' : '' }}>Accepted</option>
            <option value="REJECTED" {{ $status === 'REJECTED' ? 'selected' : '' }}>Rejected</option>
            <option value="UNDER_REVIEW" {{ $status === 'UNDER_REVIEW' ? 'selected' : '' }}>Under Review</option>
        </select>
        <input type="text" name="search" class="form-control disabled" placeholder="Sort:" style="width: 1%;background-color:white;" disabled>
        <select name="sort" class="form-select" aria-label="Sort" style="width: 10%;border-left:2px solid lightgray">
            <option value="title" selected>Article title ↓</option>
            <option value="reviewer">Prefered Reviewer ↓</option>
        </select>
        <div class="input-group-append">
            <button type="submit" class="btn btn-primary">Search</button>
        </div>
    </div>
</form>

<br><br>
@if ($status=="ALL") 
    @foreach($articles as $article)
    <div class="article-container">
        <div class="header-section  d-flex">
            <div class="p-2 w-100">
                <h3>{{ $article->title }}</h3>
                <div class="author-reviewer">
                    <span class="author">Author: {{ optional($article->user)->name }}</span>
                    <span class="editor">Editor: {{ optional($article->editor)->name }}</span>
                </div>
            </div>
            <div class="p-2 flex-shrink-1 d-flex justify-content-end">
                <a class="btn btn-warning align-self-center " role="button" aria-disabled="false">Review</a>
            </div>
        </div>
        <div class="abstract-section">
            <div class="abstract-content">{{ $article->abstract }}</div>
            <div class="language">{{ $article->language }}</div>
        </div>
    </div>
    <hr>
@endforeach
@else
    @foreach($articles->where('state', $status !== '*' ? $status : '*') as $article)
    <div class="article-container">
        <div class="header-section  d-flex">
            <div class="p-2 w-100">
                <h3>{{ $article->title }}</h3>
                <div class="author-reviewer">
                    <span class="author">Author: {{ optional($article->user)->name }}</span>
                    <span class="editor">Editor: {{ optional($article->editor)->name }}</span>
                </div>
            </div>
            <div class="p-2 flex-shrink-1 d-flex justify-content-end">
                <a class="btn btn-warning align-self-center " role="button" aria-disabled="false">Review</a>
            </div>
        </div>
        <div class="abstract-section">
            <div class="abstract-content">{{ $article->abstract }}</div>
            <div class="language">{{ $article->language }}</div>
        </div>
    </div>
    <hr>
@endforeach
@endif

<!-- @ Foreach($articles->where('state', $status !== '*' ? $status : '*') as $article) -->
    

<div class="pagination">
    {{ $articles->links() }}
</div>

@endsection

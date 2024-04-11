<?php 
    if (isset($_GET['status']))
    {
        $status = $_GET['status'];
    }
    else
    {
        $status = "SUBMITTED";
    }
    if (isset($_GET['sort']))
    {
        $status = $_GET['sort'];
    } 
    else
    {
        $status = "title";
    }
 ?>

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
            <input type="text" name="search" class="form-control" placeholder="Search articles to edit" value="{{ $search }}" style="width: 50%">
            <input type="text" name="search" class="form-control disabled" placeholder="Status:" style="width: 1%;background-color:white;" disabled>
            <select name="status" class="form-select" aria-label="Status" style="width: 7%;border-left:2px solid lightgray">
                
                <option selected value="*">All</option>
                <option value="ACCEPTED">Accepted</option>
                <option value="SUBMITTED">Submitted</option>
                <option value="REJECTED">Rejected</option>
                <option value="UNDER_REVIEW">Under Review</option>
            </select>
            <input type="text" name="search" class="form-control disabled" placeholder="Sort:" style="width: 1%;background-color:white;" disabled>
            <select name="sort" class="form-select" aria-label="Sort" style="width: 10%;border-left:2px solid lightgray">
                
                <option selected value="title">Article title ↓</option>
                <option value="reviewer">Prefered Reviewer ↓</option>
            </select>
            <div class="input-group-append">
                <button  type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
    <br>
    </br>
    
    </br>
    @foreach($articles->where('state', "$status") as $article)
        <div class="article-container">
            <div class="header-section  d-flex">
                <div class="p-2 w-100">
                    <h3> {{ $article->title }}</h3>
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
    <div class="pagination">
        {{ $articles->links() }}
    </div>
</body>
</html>
@endsection

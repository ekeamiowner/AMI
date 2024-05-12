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

<link rel="stylesheet" href="/css/articleindex.css">

<!-- Search form -->
<form action="{{ route('editor.index') }}" method="GET" class="mt-6 mb-8">
    <div class="flex items-center">
        <input type="text" name="search" class="form-input mr-2 w-1/2" placeholder="Search articles to edit" value="{{ $search }}">
        <select name="status" class="form-select mr-2 w-1/6">
            @foreach(['SUBMITTED', 'ACCEPTED', 'REJECTED', 'UNDER_REVIEW', 'ALL'] as $option)
                <option value="{{ $option }}" {{ $status === $option ? 'selected' : '' }}>{{ ucfirst(strtolower($option)) }}</option>
            @endforeach
        </select>
        <button type="submit" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Search</button>
    </div>
</form>

<div class="sorting-links mb-4" style="padding-top: 10px;">
    <a href="{{ route('editor.index', ['sort' => 'title', 'direction' => 'asc'] + request()->all()) }}" class="sort-link mr-4">Sort by Title ↑</a>
    <a href="{{ route('editor.index', ['sort' => 'title', 'direction' => 'desc'] + request()->all()) }}" class="sort-link mr-4">Sort by Title ↓</a>
    <a href="{{ route('editor.index', ['sort' => 'recommended_editor', 'direction' => 'asc'] + request()->all()) }}" class="sort-link mr-4">Sort by Recommended Editor ↑</a>
    <a href="{{ route('editor.index', ['sort' => 'recommended_editor', 'direction' => 'desc'] + request()->all()) }}" class="sort-link">Sort by Recommended Editor ↓</a>
</div>

<!-- Warning Message -->
<div class="bg-yellow-100 border-l-4 border-yellow-500 text-yellow-700 p-4 mb-4" role="alert">
    <p class="font-bold">Warning:</p>
    <p>If articles are moved to ACCEPTED or REJECTED status, they will be finalized and cannot be modified later.</p>
</div>


@foreach($articles as $article)
    <div class="article-container bg-white shadow-md rounded-md p-6 mb-6" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <div class="header-section">
            <h3 class="font-bold text-lg">{{ $article->title }}</h3>
            <div class="author-reviewer mt-2">
                <!-- Author and Editor Details -->
                <div>
                    <span class="font-semibold">Author:</span> {{ optional($article->user)->name }}
                </div>
                <div>
                    <span class="font-semibold">Editor:</span> {{ optional($article->editor)->name }}
                </div>
                <div class="recommended_editor">
                    <span class="font-semibold">Recommended editor:</span> {{ $article->recommended_editor ? $article->recommended_editor->name : '-' }}
                </div>
            </div>
        </div>
        <div class="abstract-section mt-4">
            <!-- Article Details -->
            <div class="abstract-content">
                <!-- Keywords semi-bold -->
                <div><span class="font-semibold">Abstract:</span> {{ $article->abstract }}</div>
                <div><span class="font-semibold">Note:</span> {{ $article->note }}</div>
                <div><span class="font-semibold">Pages:</span> {{ $article->page_count }}</div>
                <div><span class="font-semibold">DOI:</span> {{ $article->doi }}</div>
                <div><span class="font-semibold">Language:</span> {{ $article->language }}</div>
                <div><span class="font-semibold">Uploaded at:</span> {{ $article->created_at }}</div>
            </div>

            <!-- Editor Actions Form -->
            <form action="{{ route('editor.update') }}" method="POST" class="mt-4">
                @csrf
                @method('PUT')
                <input type="hidden" name="article_id" value="{{ $article->id }}">
                <label for="status" class="font-semibold">Current Status:</label>
                <select name="status" class="form-select mr-2 w-32">
                    @foreach(['SUBMITTED', 'ACCEPTED', 'REJECTED', 'UNDER_REVIEW'] as $option)
                        <option value="{{ $option }}" {{ $article->state === $option ? 'selected' : '' }}>{{ ucfirst(strtolower($option)) }}</option>
                    @endforeach
                </select>
                <label for="comment" class="font-semibold">Comment:</label>
                <textarea name="comment" class="form-textarea block w-full mt-2" id="comment" rows="3" placeholder="Enter your comment..."></textarea>

                <!-- Submit Button (for updating status and comment) -->
                <input type="submit" value="SUBMIT" class="bg-green-500 hover:bg-green-700 text-white font-bold py-2 px-4 rounded mt-4">
            </form>

            <!-- Download Buttons -->
            <div class="mt-4">
                <form method="POST" action="{{ route('editor.download') }}">
                    @csrf
                    <button type="submit" name="file" value="{{ $article->source }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded">Download PDF file</button>
                    <button type="submit" name="file" value="{{ $article->latex_path }}" class="bg-blue-500 hover:bg-blue-700 text-white font-bold py-2 px-4 rounded ml-2">Download LaTeX file</button>
                </form>
            </div>
        </div>
    </div>
@endforeach


<div class="pagination justify-content-center">
    {{ $articles->appends(['search' => $search, 'status' => $status])->links('pagination::bootstrap-4') }}
</div>

@endsection

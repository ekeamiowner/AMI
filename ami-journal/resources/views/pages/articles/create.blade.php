@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/submissionform.css">
    <title>Submissions</title>
    @vite('resources/views/css/app.css')
</head>
<body>
    @if ($errors->any())
        <div class="alert alert-danger">
            An error occurred during upload
        </div>
    @endif

    <div class="createSubmission" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
            @csrf 
            @method('POST')
            <div class="form-header">SUBMIT AN ARTICLE</div>
            <div class="form-row">
                <label for="title">Title:</label>
                <input type="text" name="title" id="title" placeholder="Title">
            </div>
            <div class="form-row">
                <label for="abstract">Abstract:</label>
                <textarea name="abstract" id="abstract" placeholder="Abstract"></textarea>
            </div>
            <div class="form-row">
                <label for="type_id">Select Type:</label>
                <select name="type_id" id="type_id">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-row">
                <label for="note">Note:</label>
                <textarea name="note" id="note" placeholder="Note"></textarea>
            </div>
            <div class="form-row">
                <label for="upload">Upload PDF file:</label>
                <input type="file" name="upload" id="upload">
            </div>
            <div class="form-row">
                <label for="upload2">Upload LaTeX file:</label>
                <input type="file" name="upload2" id="upload2">
            </div>
            <div class="form-row">
                <label for="recommended_editor_id">Select reviewer (optional):</label>
                <select name="recommended_editor_id" id="recommended_editor_id">
                    <option value="">No preference</option>
                    @foreach ($recommended_editors as $editor)
                        <option value="{{ $editor->id }}">{{ $editor->name }}</option>
                    @endforeach
                </select>
            </div>
            <div class="form-row">
                <button type="submit">Submit</button>
            </div>
        </form>
    </div>
</body>
</html>
@endsection

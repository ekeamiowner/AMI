@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/submissionform.css">
    <title>Submissions</title>
</head>
<body>
    <div class="createSubmission">
    <form method="POST" action="{{ route('articles.store') }}" enctype="multipart/form-data">
    @csrf 
    @method('POST')
    <table style="margin-left: auto; margin-right: auto;">
        <header style="height: 50px">Create Article Form</header>
        <tr>
            <td><input type="text" name="title" id="title" placeholder="Title"></td>
        </tr>
        <tr>
            <td><textarea name="abstract" id="abstract" placeholder="Abstract"></textarea></td>
        </tr>
        <tr>
            <td>
                <label for="type_id">Select Type:</label>
                <select name="type_id" id="type_id">
                    @foreach ($types as $type)
                        <option value="{{ $type->id }}">{{ $type->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td><textarea name="note" id="note" placeholder="Note"></textarea></td>
        </tr>
        <tr>
            <td><input type="file" name="upload" id="upload">Upload PDF file</td>
        </tr>
        <tr>
            <td><input type="file" name="upload2" id="upload2">Upload LaTeX file</td>
        </tr>
        <tr>
            <td>
                <label for="recommented_editor_id">Select reviewer (optional):</label>
                <select name="recommented_editor_id" id="recommented_editor_id">
                    <option value="">No preference</option>
                    @foreach ($recommented_editors as $editor)
                        <option value="{{ $editor->id }}">{{ $editor->name }}</option>
                    @endforeach
                </select>
            </td>
        </tr>
        <tr>
            <td><button type="submit" class="btn btn-primary">Submit</button></td>
        </tr>
    </table>
    </form>
    </div>
</body>
</html>
@endsection

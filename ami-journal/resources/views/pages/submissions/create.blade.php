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
    <form method="POST" action="{{ route('submissions.store') }}" enctype="multipart/form-data">
    @csrf 
    @method('POST')
    <table style="margin-left: auto; margin-right: auto;">
        <tr>
            <td style="background: #CECECE; height: 50px;"><label style="margin-left: 20px;">Create Article Form</label></td>
        </tr>
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
            <td><button type="submit" class="btn btn-primary">Submit</button></td>
        </tr>
    </table>
    </form>
    </div>
</body>
</html>
@endsection

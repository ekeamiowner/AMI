@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/submissions.blade.css">
    <title>Submissions</title>
</head>
<body>
    <table class="btn">
        <a href="{{ route ('submissions.create') }}">
            <button type="submit" class="btn btn-primary">Create New Submission</button>
        </a>
        <br></br>
        <a href="{{ route ('articles.index') }}">
            <button type="submit" class="btn btn-primary">Search In The Journal</button>
        </a>
    </table>
</body>
</html>
@endsection
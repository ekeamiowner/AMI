@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Submissions</title>
</head>
<style>
    .btn{
        width:100%;
        margin-right:auto;
        margin-left:auto;
    }
</style>
<body>
    <table class="btn">
        <button type="submit" class="btn btn-primary" onclick="window.location.href='http://127.0.0.1:8000/submissions/create'">Create New Submission</button>
        <br></br>
        <button type="submit" class="btn btn-primary" onclick="window.location.href='http://127.0.0.1:8000/articles'">Search In The Journal</button>
    </table>
</body>
</html>
@endsection
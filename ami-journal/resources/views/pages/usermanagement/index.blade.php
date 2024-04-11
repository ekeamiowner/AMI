@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/articleindex.css">
    <title>Usermanagement</title>
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
    <h1>Usermanagement</h1>
    <form action="{{ route('usermanagement.index') }}" method="GET" class="form-inline">
        <div class="input-group">
            <input type="text" name="search" class="form-control" placeholder="Search users" value="{{ $search }}">
            <div class="input-group-append">
                <button type="submit" class="btn btn-primary">Search</button>
            </div>
        </div>
    </form>
    <br></br>
        @foreach($users as $user)
            <div class="user-container">
                <div class="username"><h3> {{ $user->name }}</h3></div>
                <div class="accepted_reviewer">{{ $user->accepted_reviewer }}</div>
            </div>
            <hr>
        @endforeach
    <div class="pagination">
        {{ $users->links() }}
    </div>
</body>
</html>
@endsection

@extends('layouts.main')

@section('content')
<!DOCTYPE html>
<html>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/css/usermanagements.css">
    <title>Usermanagement</title>
    @vite('resources/views/css/app.css')
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
    <div class="user-management-section bg-gray-100 p-6 rounded-lg shadow-md">
    <form action="{{ route('usermanagement.index') }}" method="GET" class="search-form flex items-center mb-4">
        <input type="text" name="search" class="form-input rounded-l-lg border-gray-300 py-2 px-4 focus:outline-none focus:border-blue-400" placeholder="Search users" value="{{ $search }}">
        <button type="submit" class="btn btn-primary rounded-r-lg py-2 px-4 ml-2 bg-blue-500 hover:bg-blue-600 text-white font-bold">Search</button>
    </form>

    <div class="user-list">
        @foreach($users as $user)
            <div class="user-container bg-white rounded-lg shadow-md mb-4 p-4">
                <div class="username">
                    <h3 class="user-name text-xl font-bold">{{ $user->name }}</h3>
                </div>
                <div class="user-info mt-2">
                    @if($user->accepted_reviewer)
                        <span class="accepted bg-green-500 text-white font-semibold py-1 px-2 rounded">Reviewer</span>
                    @else
                        <span class="not-accepted bg-red-500 text-white font-semibold py-1 px-2 rounded">Not reviewer</span>
                    @endif
                    <form method="POST" action="{{ route('usermanagement.update') }}">
                        @csrf
                        <input type="hidden" name="user" value="{{$user->id}}">
                        @auth
                            @if(Auth::user()->id !== $user->id)
                                <button type="submit" class="action-button bg-blue-500 hover:bg-blue-600 text-white font-bold py-2 px-4 rounded mt-2">
                                    @if($user->accepted_reviewer)
                                        Demote
                                    @else
                                        Promote
                                    @endif
                                </button>
                            @endif
                        @endauth
                    </form>
                </div>
            </div>
        @endforeach
    </div>

    <div class="pagination mt-4">
        {{ $users->appends(['search' => $search])->links() }}
    </div>
</div>

</body>
</html>
@endsection

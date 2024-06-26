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
        <button type="submit" class="btn custom-search-btn py-2 px-4 ml-2">Search</button>
    </form>
    
    <div class="user-list" data-aos="fade-up" data-aos-duration="1000" data-aos-delay="200">
        @foreach($users as $user)
            <div class="user-container bg-white rounded-lg shadow-md mb-4 p-4">
                <div class="username">
                    <h3 class="user-name text-xl font-bold">{{ $user->name }}</h3>
                </div>
                <div class="user-info mt-2">
                    @if($user->accepted_reviewer)
                    <div class="flex items-center">
                        <span class="accepted bg-green-500 text-white font-semibold py-1 px-2 rounded mr-2">Reviewer</span>
                        <div class="font-semibold" style="background-color: #ffed4a; padding: 3px 6px; border-radius: 4px;">Completed reviews: {{ $user->completed_review }}</div>
                    </div>
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

    <div class="py-6">
        {{ $users->appends(['search' => $search])->links() }}
    </div>
</div>

</body>
</html>
@endsection

<link rel="stylesheet" href="/css/navbar.css">
<div class="nav sticky-top" id="navbar">
    <div class="nav-items">
        <a href="{{ route('welcome.index') }}">Home</a>
        <a href="{{ route('articles.index') }}">Browse</a>
        @guest
            <a href="{{ route('login') }}">New Submission</a>
        @else
            <a href="{{ route('articles.create') }}">New Submission</a>
            <a class="nav-link" href="{{ route('submissions.index') }}">My Submissions</a>
        @endguest
        <a href="{{ route('about.index') }}">About us</a>
        @auth
            @if(Auth::user()->accepted_reviewer > 0)
                <a href="{{ route('editor.index') }}">Editor</a>
            @endif
            @if(Auth::user()->isAdmin())
                <a href="{{ route('usermanagement.index') }}">Users</a>
                <a href="{{ route('volumes.index') }}">Volumes</a>
            @endif
            @if(Auth::user()->accepted_reviewer > 0 || Auth::user()->isAdmin())
                <a href="{{ route('pages.reviews.index') }}">Reviews</a>
            @endif
        @endauth
    </div>
    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
        @csrf
        @method('DELETE')
        <button type="submit">
            Logout
        </button>
    </form>
    <div class="nav-icons">
        @guest
            <a href="{{ route('login') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                    <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
                </svg>
            </a>
        @else
            <a href="{{ route('pages.profile.edit') }}">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                    <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6a5 5 0 0 1 10 0H3z"/>
                </svg>
            </a>
            <a href="{{ route('logout') }}" onclick="event.preventDefault(); document.getElementById('logout-form').submit();">
                <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                    <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                    <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
                </svg>
            </a>
        @endguest
    </div>
</div>

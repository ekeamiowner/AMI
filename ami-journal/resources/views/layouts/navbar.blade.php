<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/navbar.css">
<div class="nav">
        <a href="http://127.0.0.1:8000/">Home</a>
        <a>Browse</a>
        <a href="http://127.0.0.1:8000/submissions">Submissions</a>
        <a href="http://127.0.0.1:8000/about">About</a>
        <input style="height: 30px; margin-top: auto; margin-bottom: auto; margin-left: auto;"></input>
        <a href="{{ asset('login') }}" style=" margin-left: auto;">Login</a>
</div>
<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/navbar.css">
<div class="nav">
    <a href="http://127.0.0.1:8000/">Home</a>
    <a>Browse</a>
    <a>Submissions</a>
    <a href="http://127.0.0.1:8000/about">About</a>
    <input style="height: 30px; margin-top: auto; margin-bottom: auto; margin-left: auto;"></input>

    @guest
        <a href="{{ route('login') }}" style="margin-left: auto;">Login</a>
    @else
        <a href="{{ route('logout') }}"
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();"
           style="margin-left: auto;">
            Logout
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            @method('DELETE')
                <button class="btn btn-danger" type="submit">Logout</button>
        </form>
    @endguest
</div>
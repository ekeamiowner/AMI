<link rel="stylesheet" href="/css/navbar.css">
<div class="nav" id="navbar">
    <table id="navbar_table">
        <tr>
            <td style="border-right: 2px solid black;"><a href="{{ route('welcome.index') }}">Home</a></td>
            <td style="border-right: 2px solid black;"><a href="{{ route('articles.index') }}">Browse</a></td>
            <td style="border-right: 2px solid black;">@guest
                <a href="{{ route('login') }}">New submission</a>
                @else
                <a href="{{ route('submissions.create') }}">New submission</a>
                @endguest
            </td>
            <td><a href="{{ route('about.index') }}">About</a></td>
        </tr>
    </table>

    <table style="margin-left: auto">
        <tr>
            <td><input style="height: 30px; margin-top: auto; margin-bottom: auto; margin-left: auto;"></input></td>
            <td><button style="width: 40px; height: 40px; background-color: #feff99; border: 0px; margin-top: 8px"><img src="img/searchicon.png" style="max-width: 100%; height: auto;"></button></td>
        </tr>
    </table>
    

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

<script src="/js/navbarscript.js"></script>
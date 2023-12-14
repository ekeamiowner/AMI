<link rel="stylesheet" href="/css/bootstrap.min.css">
<link rel="stylesheet" href="/css/navbar.css">
<div class="nav" id="navbar">
    <table id="navbar_table">
        <tr>
            <td style="border-right: 2px solid black;"><a href="http://127.0.0.1:8000/">Home</a></td>
            <td style="border-right: 2px solid black;"><a href="http://127.0.0.1:8000/articles">Browse</a></td>
            <td style="border-right: 2px solid black;">@guest
                <a href="http://127.0.0.1:8000/login">Submissions</a>
                @else
                <a href="http://127.0.0.1:8000/submissions">Submissions</a>
                @endguest
            </td>
            <td><a href="http://127.0.0.1:8000/about">About</a></td>
        </tr>
    </table>

    <table style="margin-left: auto">
        <tr>
            <td><input style="height: 30px; margin-top: auto; margin-bottom: auto; margin-left: auto;"></input></td>
            <td><button style="width: 40px; height: 40px; background-color: #feff99; border: 0px; margin-top: 8px"><img src="img/searchicon.png" style="width: 30px; height: 60px;"></button></td>
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
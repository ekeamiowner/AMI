<link rel="stylesheet" href="/css/navbar.css">
<div class="nav sticky-top" id="navbar">
    <table id="navbar_table">
        <tr>
            <td style="border-right: 2px solid black;"><a href="{{ route('welcome.index') }}">Home</a></td>
            <td style="border-right: 2px solid black;"><a href="{{ route('articles.index') }}">Browse</a></td>
            <td style="border-right: 2px solid black;">@guest
                <a href="{{ route('login') }}">New submission</a>
                @else
                <a href="{{ route('articles.create') }}">New submission</a>
                @endguest
            </td>

            <td><a href="{{ route('about.index') }}">About</a></td>
            
            @auth
                @if(Auth::user()->accepted_reviewer > 0)
                    <td style="border-left: 2px solid black;">
                        <a href="{{ route('editor.index') }}">Editor</a>
                    </td>
                    <td style="border-left: 2px solid black;">
                        <a href="{{ route('usermanagement.index') }}">Users</a>
                    </td>
                @endif
            @endauth
              
        </tr>
    </table>

    <!--  SEARCHBAR --

    <table style="margin-left: auto">
        <tr>
            <td><input style="height: 30px; margin-top: auto; margin-bottom: auto; margin-left: auto;"></input></td>
            <td><button style="width: 40px; height: 40px; background-color: #feff99; border: 0px; margin-top: 8px"><img src="img/searchicon.png" style="max-width: 100%; height: auto;"></button></td>
        </tr>
    </table>
    
     -- END SEARCHBAR -->

    @guest
        <a href="{{ route('login') }}" style="margin-left: auto; padding-right:25px;">
            <!-- Login icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-in-right" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 3.5a.5.5 0 0 1 .5-.5h8a.5.5 0 0 1 .5.5v9a.5.5 0 0 1-.5.5h-8a.5.5 0 0 1-.5-.5v-2a.5.5 0 0 0-1 0v2A1.5 1.5 0 0 0 6.5 14h8a1.5 1.5 0 0 0 1.5-1.5v-9A1.5 1.5 0 0 0 14.5 2h-8A1.5 1.5 0 0 0 5 3.5v2a.5.5 0 0 0 1 0z"/>
                <path fill-rule="evenodd" d="M11.854 8.354a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H1.5a.5.5 0 0 0 0 1h8.793l-2.147 2.146a.5.5 0 0 0 .708.708z"/>
            </svg>
            <!-- END ICON -->
        </a>
    @else
        <a href="{{ route('profile.edit') }}" style="margin-left: auto; padding-right: auto">
        <!-- Profile icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-person" viewBox="0 0 16 16">
                <path d="M8 8a3 3 0 1 0 0-6 3 3 0 0 0 0 6zm-5 6a5 5 0 0 1 10 0H3z"/>
            </svg>
        <!-- END ICON -->
        </a>
        <a href="{{ route('logout') }} "
           onclick="event.preventDefault(); document.getElementById('logout-form').submit();" 
           style="padding-right:25px;">
            <!-- Logout icon -->
            <svg xmlns="http://www.w3.org/2000/svg" width="25" height="25" fill="currentColor" class="bi bi-box-arrow-left" viewBox="0 0 16 16">
                <path fill-rule="evenodd" d="M6 12.5a.5.5 0 0 0 .5.5h8a.5.5 0 0 0 .5-.5v-9a.5.5 0 0 0-.5-.5h-8a.5.5 0 0 0-.5.5v2a.5.5 0 0 1-1 0v-2A1.5 1.5 0 0 1 6.5 2h8A1.5 1.5 0 0 1 16 3.5v9a1.5 1.5 0 0 1-1.5 1.5h-8A1.5 1.5 0 0 1 5 12.5v-2a.5.5 0 0 1 1 0z"/>
                <path fill-rule="evenodd" d="M.146 8.354a.5.5 0 0 1 0-.708l3-3a.5.5 0 1 1 .708.708L1.707 7.5H10.5a.5.5 0 0 1 0 1H1.707l2.147 2.146a.5.5 0 0 1-.708.708z"/>
            </svg>
            <!-- END ICON -->
        </a>
        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
            @csrf
            @method('DELETE')
                <button class="btn btn-danger"  type="submit">
                    
                </button>
        </form>
    @endguest
</div>

<script src="/js/navbarscript.js"></script>
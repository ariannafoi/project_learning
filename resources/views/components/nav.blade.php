<div class="nav-custom">
    <div class="div2-nav-custom">
        <ul class="ul-nav-custom">
            @auth
            <li class="li-nav-custom">
                {{-- ucfirst() displays the first letter of name always in uppercase--}}
                <a>Ciao {{ucfirst(Auth::user()->name)}}!</a>
            </li>
            @endauth
            <li class="li-nav-custom">
                <a href="{{route('welcome')}}">HOME</a>
            </li>
            @guest
            <li class="li-nav-custom">
                <a href="{{route('login')}}">LOGIN</a>
            </li>
            <li class="li-nav-custom">
                <a href="{{route('register')}}">REGISTER</a>
            </li>
            @endguest
            <li class="li-nav-custom">
                <a href="{{route('logout')}}" onclick="event.preventDefault();document.getElementById('logout-form').submit()">LOGOUT</a>
            </li>
            <form action="{{route('logout')}}" id="logout-form" method="POST" class="d-none">
            @csrf
            </form>
            
        </ul>
    </div>
</div>
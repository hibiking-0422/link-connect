    <header>
        <h1 class="headline">
            <a>Link Connect</a>
        </h1>
        <ul class="nav-list">
            <span class="nav-right">
            @if (Auth::check())
            <li class="nav-list-item">
                <a href="{{ action('LinkController@index') }}">Link</a>
            </li>
            <li class="nav-list-item">
                <a href="{{ action('TreeController@index') }}">Tree</a>
            </li>
            <li class="nav-list-item">
                <a href="{{ action('HomeController@logout') }}">Logout</a>
            </li>
            @else
            <li class="nav-list-item">
                <a  href="{{ route('login') }}">Login</a>
            </li>
            <li class="nav-list-item">
                <a href="{{ route('register') }}">{{ __('Register') }}</a>
            </li>
            @endif
        </span>
        </ul>
    </header>
<nav class="navbar navbar-expand-lg navbar-light bg-ligth shadow-sm">
    <a class="navbar-brand" href="{{ route('home') }}">
        {{ config('app.name') }}
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
        aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
        <ul class="nav nav-pills ml-auto">
            <li class="nav-item">
                <a class="nav-link {{ setActive('home') }}" href="{{ route('home') }}">@lang('Home')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ setActive('projects.*') }}"
                    href="{{ route('projects.index') }}">@lang('Projects')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ setActive('about') }}" href="{{ route('about') }}">@lang('About')</a>
            </li>
            <li class="nav-item">
                <a class="nav-link {{ setActive('contact') }}" href="{{ route('contact') }}">@lang('Contact')</a>
            </li>
            @guest
                <li class="nav-item">
                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                </li>
            @else
                <li class="nav-item">
                    <a class="nav-link dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                          document.getElementById('logout-form').submit();">
                        {{ __('Logout') }}
                    </a>
                </li>
            @endguest
        </ul>
    </div>
</nav>
<form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
    @csrf
</form>

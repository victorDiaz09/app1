<nav class="navbar navbar-light navbar-expand-lg shadow-sm">
    <div class="container">
    <a class="navbar-brand pt-0" href="{{ route('home') }}"><img class="img-fluid" height="20px;" width="40px;" src="/img/laragon.png" alt="Desarrollo web">Victordiaz Code</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="true" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>
    
<div class="collapse navbar-collapse" id="navbarSupportedContent"> 
        <ul class="nav nav-pills">
        <li class="nav-item"><a class="nav-link {{ setActive('home')}}" href="{{ route('home') }}">@lang('Home')</a></li>
        <li class="nav-item"><a class="nav-link {{ setActive('about')}}" href="{{ route('about') }}">@lang('about')</a></li>
        <li class="nav-item"><a class="nav-link {{ setActive('projects.*')}}" href="{{ route('projects.index') }}">@lang('Projects')</a></li>
        <li class="nav-item"><a class="nav-link {{ setActive('contact')}}" href="{{ route('contact') }}">@lang('Contact')</a></li>
        @guest
        <li class="nav-item"><a class="nav-link {{ setActive('login')}}" href="{{ route('login') }}">login</a></li>
        @else
        <li class="nav-item"><a class="nav-link" href="#" onclick="event.preventDefault();
            document.getElementById('logout-form').submit();">Cerrar session</a></li>
        @endguest
        </ul>
</div>
</div>
</nav>


<form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
    {{ csrf_field() }}
</form>
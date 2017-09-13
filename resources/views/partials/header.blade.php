<header>
    <div class="uk-container">
        <nav class="uk-navbar-container uk-navbar-transparent" uk-navbar>
            <div class="uk-navbar-left">
                <a class="uk-navbar-item uk-logo" href="{{ url('/') }}">
                    {{-- {{ config('app.name', 'Larsdfavel') }} --}}
                    Jim Nieters
                </a>
                {{-- <ul class="uk-navbar-nav">
                    @foreach ($categories as $cat)
                        @if (count($cat->articles))
                            
                            <li class="">
                                <a class="" href="/category/{{$cat->slug}}">{{$cat->title}}</a>
                            </li>
                        @endif
                    @endforeach
                    
                </ul> --}}
            
                
            </div>
    
            <div class="uk-navbar-right">
                {{-- <ul class="uk-navbar-nav">
                    @guest
                        <li><a href="{{ route('login') }}">Login</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                    @else
                        <li>
                            <a href="#">
                                {{ Auth::user()->name }}
                            </a>
                            <div class="uk-navbar-dropdown">
                                <ul class="uk-nav uk-navbar-dropdown-nav" role="menu">
                                    <li>
                                        <a href="{{ route('logout') }}"
                                            onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                            Logout
                                        </a>
                
                                        <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                            {{ csrf_field() }}
                                        </form>
                                    </li>
                                </ul>
                            </div>
                            
                        </li>
                    @endguest
                </ul> --}}
                <ul class="uk-navbar-nav">
                    @foreach ($categories as $cat)
                        @if (count($cat->articles))
                            
                            <li class="">
                                <a class="" href="/category/{{$cat->slug}}">{{$cat->title}}</a>
                            </li>
                        @endif
                    @endforeach
                    <li class="">
                        <a class="" href="/tags">Tags</a>
                    </li>
                    
                </ul>
            </div>
        </nav>
    </div>
</header>
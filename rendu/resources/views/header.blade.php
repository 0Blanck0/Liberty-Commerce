@section('header')
    <div class="logo_container">
        <img class="logo" src="{{ asset('img/logo/logo.png') }}" alt="logo">
    </div>

    <h1 class="title">Subtech</h1>

    <div class="nav_container">
        <nav>
            <ul>
                <li class="h_btn_box"><a href="{{ route('welcome') }}" class="nav_btn" alt="Welcome"></a></li>
                @auth
                    <li class="h_btn_box"><a href="{{ route('home') }}" class="nav_btn" alt="Home"></a></li>
                @endauth
                <li class="h_btn_box"><a href="{{ route('catalogue') }}" class="nav_btn" alt="Catalogue"></a></li>
                <li class="h_btn_box"><a href="{{ route('panier') }}" class="nav_btn" alt="Panier"></a></li>
                @auth
                    <li class="h_btn_box"><a href="{{ route('admin') }}" class="nav_btn" alt="Admin"></a></li>
                @endauth
                @guest
                    @if (Route::has('login'))
                        <li class="h_btn_box">
                            <a class="nav_btn" href="{{ route('login') }}" alt="{{ __('Login') }}"></a>
                        </li>
                    @endif

                    @if (Route::has('register'))
                        <li class="h_btn_box">
                            <a class="nav_btn" href="{{ route('register') }}" alt="{{ __('Register') }}"></a>
                        </li>
                    @endif
                @endguest
            </ul>
        </nav>
    </div>

    @auth
        <div class="user_container">

            <div class="dropdown">
                <ul>
                    <li>{{ Auth::user()->login }}</li>

                    <div class="sous_dropdown">
                        <ul>
                            <li>
                                <a class="dropdown-item" href="{{ route('logout') }}"
                                   onclick="event.preventDefault();
                                   document.getElementById('logout-form').submit();">
                                    {{ __('Logout') }}
                                </a>

                                <form id="logout-form" action="{{ route('logout') }}" method="POST" class="none">
                                    @csrf
                                </form>
                            </li>
                        </ul>
                    </div>
                </ul>
            </div>

        </div>
    @endauth
@endsection

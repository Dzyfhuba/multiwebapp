<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="shortcut icon" type="image/png" href="/favicon.png" />
    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/tailwind.css') }}" rel="stylesheet">
</head>
<body>
    <div id="app">
        <nav class="sticky top-0 z-50 flex flex-wrap items-center content-between py-3 px-4 text-black bg-white shadow-sm">
            <div class="container mx-auto sm:px-4 grid-cols-2 grid">
                <a class="inline-flex pt-1 pb-1 mr-4 text-lg whitespace-no-wrap col-start-1" href="{{ url('/') }}">
                    <img src="{{asset('storage/logo/himatif-logo.png')}}" class="w-32 h-auto">
                </a>
                <button class="object-right btn dropdown-toggle col-start-3 col-end-auto" type="button" id="dropdownMenuButton" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    @guest
                    {{_('Account')}}
                    @endguest
                    @auth('web')
                    {{ Auth::user()->name }}
                    @endauth
                    {{_(Route::has('login'))}}
                </button>

                <div class="hidden items-center dropdown-menu origin-top-right dropdown-menu-right" aria-labelledby="dropdownMenuButton">
                    <!-- Right Side Of Navbar -->
                    @guest
                    @if (Route::current()->uri == 'register')
                    <div class="hover:bg-gray-100">
                        <!-- Authentication Links -->
                        
                        <a class="inline-block py-2 px-4 no-underline" href="{{ route('login') }}">{{ __('Login') }}</a>
                        
                    </div>
                    @endif
                    @if (Route::current()->uri == 'login')
                    <div class="hover:bg-gray-100">
                        
                        <a class="inline-block py-2 px-4 no-underline" href="{{ route('register') }}">{{ __('Register') }}</a>
                        
                    </div>
                    @endif
                    @else
                    <div class="hover:bg-gray-100">
                        <a class="inline-block py-2 px-4 no-underline" href="#">
                            {{ _('Profile') }}
                        </a>
                    </div>
                    <div class="hover:bg-gray-100">
                        <a class="inline-block py-1 px-6 no-underline" href="{{ route('logout') }}"
                        onclick="event.preventDefault();
                        document.getElementById('logout-form').submit();">{{ __('Logout') }}</a>
                        <div>
                            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="hidden">
                                @csrf
                            </form>
                        </div>
                    </div>
                    @endguest
                </div>
            </div>
        </div>
    </nav>

    <main class="py-4">
        @yield('content')
    </main>
</div>
</body>
</html>

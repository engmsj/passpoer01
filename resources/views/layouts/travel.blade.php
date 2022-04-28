<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>{{ __('site.app_name') }}</title>
    <!-- Scripts -->{{-- 
    <script src="{{ asset('js/app.js') }}" defer></script> --}}

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <!-- Styles -->
    <link rel="stylesheet" href="{{asset('assets/css/all.css')}}">{{-- --}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/media.css')}}">
    {{-- <link href="{{ asset('css/app.css') }}" rel="stylesheet"> --}}
    @yield('styles')
</head>
<body>
    <div id="app">
        <div style="position: absolute;top: 50%;left: 2%;"class="infos">
            <button>
            <a class="btn btn-link" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                                     document.getElementById('logout-form').submit();">
                {{ __('Logout') }}
            </a>
            </button>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                @csrf
            </form>
        </div>
        <main class="">
            @yield('content')
        </main>
    </div>
    <script src="{{ asset('assets/js/jquery-3.5.1.min.js') }}" ></script> 
    <script src="{{ asset('assets/js/popper.min.js') }}"></script>
    <script src="{{ asset('assets/js/main.js') }}"></script>
    <script src="{{ asset('assets/js/alert.js') }}"></script>
    <script>
        $(document).ready(function(){
            setTimeout(function() {
            $('#logout-form').trigger('submit');
            }, 600000);
        });
    </script>
    @yield('scripts')
</body>
</html>

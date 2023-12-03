<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.bunny.net/css?family=Nunito" rel="stylesheet">

    <!-- PWA -->

    <meta name="theme-color" content="#6777ef"/>

    <link rel="apple-touch-icon" href="{{ asset('logo.PNG') }}"">

    <link rel="manifest" href="{{ asset('/manifest.json') }}">

    <!-- Scripts -->
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    
    <div id="app">
        <div class="d-flex" id="wrapper">
        
            <div id="page-content-wrapper" class="col-md-12 col-lg-12 col-xs-12">

                @include('layouts.nav')

                <main class="container-fluid">
                    <div class="pt-4">
                        @yield('content')                        

                    </div>
                </main>

                {{-- @include('layouts.footer') --}}
            </div>

            
    
            @stack('scripts')
        </div>
    </div>
<script src="{{ asset('/sw.js') }}"">

</script>

<script>

    if (!navigator.serviceWorker.controller) {
        navigator.serviceWorker.register("/sw.js").

        then(function (reg) {

            console.log("Service worker has been registered for scope:" + reg.scope);

        });
    }

</script>


</body>
</html>

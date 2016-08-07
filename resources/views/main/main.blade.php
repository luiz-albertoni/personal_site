<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Albertoni</title>

        <link rel="stylesheet" href="{{ elixir('css/vendor.css') }}">
        <script src="{{ elixir('js/vendor.js') }}"></script>
        <script src="{{ asset('js/app.js') }}"></script>
    </head>

    <body ng-app="app">
        <div id="wrapper">
            <div>
                @include('default.left_side_bar')
            </div>

            <div class="wrapper wrapper-content">
                @yield('content')
            </div>
        </div>
    </body>

</html>

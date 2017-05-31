<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <title>Albertoni</title>

        <link rel="stylesheet" href="{{ elixir('css/vendor.css') }}">
        @include('default.includeJavaScript')
    </head>

    <body ng-app="app" style="background-color: #eee">
        <div id="wrapper" ng-controller="ApiControllerUserShow as vm">

            <div>
                @include('default.top_side_bar')
            </div>

            @include('default.messages')

            @include('default.mail')

            @include('default.footer')

        </div>
    </body>

</html>

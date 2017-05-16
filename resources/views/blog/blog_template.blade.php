<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Blog Albertoni</title>

    <link rel="stylesheet" href="{{ elixir('css/vendor.css') }}">
    <script src="{{ elixir('js/vendor.js') }}"></script>
    <script src="{{ asset('js/app.js') }}"></script>
</head>

<body ng-app="app" style="background-color: #eee">
<div id="wrapper" ng-controller="ApiControllerUserShow as vm">
    <div>
        @include('default.blog_top_menu')
    </div>

    @include('default.messages')

    @include('default.mail')

    @include('default.footer')

</div>
</body>
</html>

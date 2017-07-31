<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Blog Albertoni</title>

    @include('default.includeJavaScript')
    <link rel="stylesheet" href="{{ elixir('css/vendor.css') }}">
</head>

<body ng-app="app" style="background-color: #eee">
<div id="wrapper" ng-controller="ApiControllerUserShow as vm">
    <div>
        @include('default.blog_top_menu')
    </div>

    @include('default.messages')
    
</div>
</body>
</html>

@extends('blog.blog_template')
@section('content')
    <style>


    </style>
    <div class="panel panel-default" style="margin-left: 1%; background-color: #ffffff; border: 1px solid #e7e7e7; color: #838383; width: 90%; margin-left: 5%;
        min-height: 1200px" ng-controller="PostController as vm"  ng-cloak>


        <div class="panel-body" style="width:20%; min-height: 1200px; border: 2px solid #e7e7e7; float: left; background-color: #dcf3dc " >

           <div style="height: 55px; width: 100%; border-bottom: 2px solid #e7e7e7;">
              <label style="text-align: center; width: 100%;">  Outros Posts </label>
           </div>

            <div style="margin-top: 15px; ">
            <input
                    type="search"
                    name="search_post"
                    class="form-control"
                    placeholder="Procure um post..."
                    value="{{ request('search_post', '') }}"
                    style="max-width: 150px; float: left;"
                    ng-model="vm.search_post"
            >
            <span class="input-group-btn">
                <button class="btn " ng-click="vm.searchPosts()" type="submit">Procurar</button>
            </span>

            </div>

            <div style="margin-top: 15px; min-height: 100%; ">
                <div ng-repeat="side_post in vm.posts" style="margin-left: 10px; margin-top: 15px;" ng-cloak>
                    <a style="color: #838383;" href="/albertoni/blog/show/post/<%side_post.id %>" >
                        <img  style="max-width: 30px; max-height: 30px" src="/images/<% side_post.tag %>.png">
                        &nbsp;<% side_post.title %>
                    </a>
                </div>
            </div>

        </div>

        <div class="panel-body" style="width:80%; min-height: 1200px;float: right;  border: 2px solid #e7e7e7;" >

            <div class="ibox-title" style="text-align: center;  margin-bottom: 20px; border-bottom: 1px solid #e7e7e7;">
                <h2 style="margin-top: 10px">{{ $post->title}}</h2>
            </div>
            <div>
            {!! $post->body!!}
            </div>
            
            @include('blog.discuss')

        </div>
    </div>

@endsection
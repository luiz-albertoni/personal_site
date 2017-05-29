@extends('blog.blog_template')
@section('content')
    <style>


    </style>
    <div class="panel panel-default" style="margin-left: 1%; background-color: #ffffff; border: 1px solid #e7e7e7; color: #838383; width: 90%; margin-left: 5%;
        min-height: 1200px">


        <div class="panel-body" style="width:20%; min-height: 1200px; border: 2px solid #e7e7e7; float: left; background-color: #dcf3dc " >

           <div style="height: 55px; width: 100%; border-bottom: 2px solid #e7e7e7;">
              <label style="text-align: center; width: 100%;">  Outros Posts </label>
           </div>

            <div style="margin-top: 15px; min-height: 100%; ">
                @foreach ($posts as $item)
                    <div style="margin-left: 10px; margin-top: 5px">
                    <a style="color: #838383;" href="/albertoni/blog/show/post/{{ $item->id }}" >
                        <img  style="max-width: 30px; max-height: 30px" src="/images/laravel.png">
                        &nbsp;{{$item->title}}

                        </a>
                    </div>
                @endforeach
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
@extends('blog.blog_template')
@section('content')


    <div class="panel panel-default" style="margin-left: 1%; background-color: #caf0fa; color: #838383; width: 98%; min-height: 800px">
        <div class="panel-body" >
            <form action="{{ route('blog') }}" method="GET" style="margin-bottom: 70px;">
                <div class="col-md-12">
                    <input
                            type="search"
                            name="search_post"
                            class="form-control"
                            placeholder="Procure um post..."
                            value="{{ request('search_post', '') }}"
                            style="max-width: 200px; float: left;"
                    >
                <span class="input-group-btn">
                    <button class="btn " type="submit">Procurar</button>
                </span>

                </div>

            </form>

            @foreach ($posts as $item)

            <div class="col-md-4">

                <div class="panel panel-default dashboard-panel metamaster-dashboard" style="max-width: 450px; max-height: 400px">
                    <div class="panel-heading" style="text-align: center">
                        {{$item->title}}
                    </div>

                    <div class="panel-body">
                            <div style="margin-left: 10px; margin-top: 5px">
                                <a style="color: #838383;" href="/albertoni/blog/show/post/{{ $item->id }}" >
                                <img  style="max-width: 100px; max-height: 100px" src="/images/{{ strtolower($item->tag) }}.png">
                                    &nbsp;{{$item->description}}
                                </a>
                            </div>
                    </div>
                </div>
            </div>
            @endforeach
            {{ $posts->links() }}
        </div>
    </div>

@endsection
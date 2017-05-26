@extends('blog.blog_template')
@section('content')

    <div class="panel panel-default" style="margin-left: 1%; background-color: #caf0fa; color: #838383; width: 98%; min-height: 800px">
        <div class="panel-body" >
            <form action="{{ route('blog_index') }}" method="GET">
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
                    <button class="btn " type="submit">Go!</button>
                </span>

                </div>

            </form>

            <div class="col-md-12" style="margin-top: 20px;" >
                <a href="{{ route('create_index')}}"
                   class="btn btn-primary">
                   Crie um novo post.
                    <span class="fa fa-forward"></span>
                </a>
            </div>

            <div class="row">
                @if (count($posts) > 0)
                    @forelse ($posts as $post)
                        <div class="col-sm-6 col-md-6 col-lg-4 post-tactic-item"
                        style="     margin-top: 30px;
                                    margin-left: 20px;
                                    background: #f5f5f5;
                                    text-overflow: ellipsis;
                                    border-color:#dddddd;
                                     "
                        >
                            <div class="ibox" style=" height: 100%; width: 100%" ;>

                                <div class="ibox-title">
                                    Post
                                </div>
                                <div class="ibox-content" style="background: #ffffff">
                                    <table class="table">
                                        <tr>
                                            <td class="font-bold" style="min-width: 80px;">
                                               Post titulo:
                                            </td>
                                            <td>{{ $post->title }}</td>
                                        </tr>
                                        <tr>
                                            <td class="font-bold">Data Criação</td>
                                            <td class="">
                                                {{ $post->created_at }}
                                            </td>
                                        </tr>
                                    </table>
                                    <div class="text-right" style="margin-bottom: 10px" >

                                        <form action="{{ route('blog_delete', $post->id) }}" method="POST" style="display: inline;"
                                              onsubmit="if(confirm('Delete? Are you sure?')) { return true } else {return false };"><input
                                                    type="hidden" name="_method" value="DELETE"><input type="hidden" name="_token"
                                                                                                       value="{{ csrf_token() }}">
                                            <button  class="channel-delete-btn btn btn-danger" type="submit">Delete</button>
                                        </form>

                                        <a href="/albertoni/blog/edit/post/{{ $post->id }}"
                                           class="btn btn-warning">
                                            Edit
                                            <span class="fa fa-trash"></span>
                                        </a>

                                        <a href="/albertoni/blog/show/post/{{ $post->id }}"
                                           class="btn btn-primary">
                                            Detalhes
                                            <span class="fa fa-forward"></span>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                @else
                    <br><br>
                    None
                @endif

            </div>
        </div>
    </div>

@endsection
<?php

namespace App\Http\Controllers;

use App\Post;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Log;
use JavaScript;

class PostController extends Controller
{


    public function index(Request $request)
    {
        $query = Post::orderBy('created_at', 'desc');

        if($search_post = $request->get('search_post'))
        {
            $query->where('title', 'like', '%' . $search_post . '%');
        }

        $posts = $query->get();

        return view('blog/index_post', compact('posts'));
    }

    public function newPost(Request $request)
    {

        $body           = $request->get('body');
        $title          = $request->get('title');
        $tags           = $request->get('tag');
        $description    = $request->get('description');
        

        $post = new Post ();

        $body = str_replace('../', '',$body);
        $body = str_replace('upload-/images/', '/upload-images/',$body);

        $post->body         = $body;
        $post->title        = $title;
        $post->tag          = $tags;
        $post->description  = $description;

        $post->save();

        return redirect()->route('blog_index')->with('message', 'Post saved!!');

    }
    
    public function show($id)
    {
        $post  = Post::find($id);
        $posts = Post::get(['id', 'title', 'tag']);

        JavaScript::put([
            'post'   => $post,
            'posts'  => $posts
        ]);

        return view('blog/post', compact('post', 'posts'));
    }

    public function searchPost(Request $request)
    {
        $search_post    = $request->get('searchPost');

        $posts          = Post::orderBy('created_at', 'desc')->where('title', 'like', '%' . $search_post . '%')->get();

        return response()->json(['result' => $posts]);

    }

    public function edit($id)
    {
        $post = Post::find($id);
        return view('blog/edit', compact('post'));
    }

    public function update($id, Request $request)
    {
        $body           = $request->get('body');
        $title          = $request->get('title');
        $tags           = $request->get('tag');
        $description    = $request->get('description');

        $post = Post::find($id);

        $body = str_replace('../', '',$body);
        $body = str_replace('upload-images/', '/upload-images/',$body);
        $body = str_replace('<img', '<img class="img-responsive" ',$body);

        $post->body         = $body;
        $post->title        = $title;
        $post->tag          = $tags;
        $post->description  = $description;

        $post->save();

        return redirect()->route('blog_index')->with('message', 'Post edited!!');

    }

    public function delete($id)
    {
        $post = Post::find($id);
        $post->delete();
        return redirect()->route('blog_index')->with('message', 'Post deleted!!');
    }

}
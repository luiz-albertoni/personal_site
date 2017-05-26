<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use App\Post;
use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class BlogController extends Controller
{
    public function index(Request $request)
    {
        try{

            $query = Post::orderBy('created_at', 'desc');

            if($search_post = $request->get('search_post'))
            {
                $query->where('title', 'like', '%' . $search_post . '%');
            }

            $posts = $query->orderBy('updated_at', 'desc')->paginate(9);

            return view('blog.blog_main', compact('posts'), ['is_blog' => true, 'posts']);

        } catch (\Exception $message)
        {

            return redirect()->route('home')->with('error', 'Error to send mail.');

        }
    }

}
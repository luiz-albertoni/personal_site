<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
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

            return view('blog.blog_main', ['is_blog' => true]);

        } catch (\Exception $message)
        {

            return redirect()->route('home')->with('error', 'Error to send mail.');

        }
    }

}
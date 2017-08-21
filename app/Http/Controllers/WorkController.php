<?php
/**
 * Created by PhpStorm.
 * User: luiz.albertoni
 * Date: 18/08/17
 * Time: 15:20
 */

namespace App\Http\Controllers;


use Illuminate\Support\Facades\App;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class WorkController  extends Controller
{
    function __construct()
    {
        $this->middleware('web');
    }

    public function index()
    {
        try{
           
            return view('default.workStuff');

        } catch (\Exception $message)
        {
            Log::error($message->getMessage());
            Log::error($message->getTraceAsString());
            return redirect()->route('home')->with('error', 'Error to access the Blog.');

        }
    }

}
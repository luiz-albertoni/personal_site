<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\Log;
use Illuminate\Support\Facades\Session;

class FileController extends Controller
{
    public function getCurriculum()
    {

        $language = Session::get('locale', Config::get('app.locale'));
        $filename = '/app/public/Luiz-Resume.pdf';
        
        if($language == "br"){
            $filename = '/app/public/Luiz Albertoni-CV-PT.pdf';
        }else if ($language == "br")
        {
            $filename = '/app/public/Luiz Albertoni-CV-PT.pdf';
        }

        $pathToFile = storage_path($filename);
        return response()->file($pathToFile);
    }

    public function rest()
    {
        return response()->json(['name' => 'Abigail', 'state' => 'CA']);
    }


}
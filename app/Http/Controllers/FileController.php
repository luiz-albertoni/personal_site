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
        }else if ($language == "es")
        {
            $filename = '/app/public/Luiz Albertoni-CV-PT.pdf';
        }

        $pathToFile = storage_path($filename);
        return response()->file($pathToFile);
    }

    public function getApp($app_type, $app_name)
    {
        $path_to_file = sprintf('/app/public/apps/%s/%s', $app_type, $app_name);
        $path_to_file = storage_path($path_to_file, ['Content-Type'=>'application/vnd.android.package-archive',
                                                     'Content-Disposition: attachment; filename="'.$app_name.'"']);
       // return response()->file($path_to_file);
        return response()->download($path_to_file, $app_name, ['Content-Type'=>'application/vnd.android.package-archive',
            'Content-Disposition: attachment; filename="'.$app_name.'"']);
    }

}
<?php

namespace App\Http\Controllers;


use App\Http\Controllers\Controller;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Log;

class FileController extends Controller
{
        public function getCurriculum()
        {
            $filename = '/app/public/Luiz-Resume.pdf';
            $pathToFile = storage_path($filename);
            return response()->file($pathToFile);
        }
}
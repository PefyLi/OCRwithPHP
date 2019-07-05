<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;

class ocrController extends Controller
{
    public function index(){
        $path = dirname(dirname(dirname(dirname(__FILE__))));
        $output = (new TesseractOCR($path.'/resources/image/text.png'))
        ->run();
        echo $output;
    }
}

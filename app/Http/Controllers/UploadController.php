<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use thiagoalessio\TesseractOCR\TesseractOCR;

class UploadController extends Controller
{
    public function uploadFile(){
      return view('uploadfile');
    }
   /** Example of File Upload */
    public function uploadFilePost(Request $request){
        $path = "C:/xampp/htdocs/firstLaravel/storage/app/ocrImage";

        $request->validate([
            'fileToUpload' => 'required|file|max:1024',
        ]);
        
        $fileName = $request->fileToUpload->getClientOriginalName();
      // $fileName = "fileName".time().'.'.request()->fileToUpload->getClientOriginalExtension();

        $request->fileToUpload->storeAs('ocrImage',$fileName);
        $filePath =  $path."/".$fileName;
 
        $output = (new TesseractOCR($filePath))
        ->lang('eng','chi_tra','chi_tra_all')
        ->run();
        return back()
            ->with('success',$output);

    }
   
}

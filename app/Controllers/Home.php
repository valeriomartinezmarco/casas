<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }


    public function casa_naranja()
    {
            
            $json_array = array();
            $data = array();
            $contador=0;
            $dir = 'vendor/assets/img/gallery/';
              // Check if the directory exists
              if (file_exists($dir) && is_dir($dir) ) {
                
                  // Get the files of the directory as an array
                  $scan_arr = scandir($dir);
                  $files_arr = array_diff($scan_arr, array('.','..') );
                  // echo "<pre>"; print_r( $files_arr ); echo "</pre>";
                  // Get each files of our directory with line break
                  foreach ($files_arr as $file) {
                    $contador+1;
                    //Get the file path
                    $file_path = "vendor/assets/img/gallery/".$file;
                    // Get the file extension
                    $file_ext = pathinfo($file_path, PATHINFO_EXTENSION);
                    if ($file_ext=="jpg" || $file_ext=="png" || $file_ext=="JPG" || $file_ext=="PNG") {
                        //echo $file."<br/>";
                        $json_Array[]=$file;
                    }
                  }
              }
        return view('casa_naranja');
    }
}



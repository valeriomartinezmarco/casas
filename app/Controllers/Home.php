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

        helper('filesystem'); 
        $map = directory_map('./vendor/assets/img/gallery', 1);
        
        echo '<pre>';
        print_r($map);
      
        echo '</pre>';
      
      
        return view('casa_naranja');
    }
}



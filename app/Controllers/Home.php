<?php

namespace App\Controllers;

class Home extends BaseController
{
    public function index()
    {
        
        
        return view('welcome_message');
        

        
        
    }


    public function casanaranja()
    {
            
          
              echo view('/template/header');
              echo view('casa_naranja');
              echo view('/template/footer');

    }
}



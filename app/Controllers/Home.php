<?php

namespace App\Controllers;
use App\Models\casasModel;


class Home extends BaseController
{


    //protected $userModel;

    public function __construct()
    {
        
    }


    public function index()
    {
        
        return view('welcome_message');
        
    }


    public function casanaranja()
    {
        $casasModel = new casasModel();
        $data['casas'] = $casasModel->find();
        
        return  view('casa_naranja',$data);   
    }

    public function galerianaranja()
    { 
        return  view('gallery_casa_naranja');   
    }
}



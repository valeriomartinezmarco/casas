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

    public function casa($casa=null)
    {
      
      
      
        $casasModel = new casasModel();
        $data['casas'] = $casasModel->where('id',$casa)->find();
        $propiedad=($data['casas'][0]['tagCasa']);
       
        return  view($propiedad,$data);   
    }


    public function casanaranja()
    {
        $casasModel = new casasModel();
        $data['casas'] = $casasModel->find();
        //print_r($data['casas']);
       //exit();
        return  view('casa_naranja',$data);   
    }

    public function galerianaranja()
    { 
        return  view('gallery_casa_naranja');   
    }
}



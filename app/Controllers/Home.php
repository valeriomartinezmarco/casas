<?php

namespace App\Controllers;
use App\Models\casasModel;
use App\Models\casasinicioModel;


class Home extends BaseController
{


    //protected $userModel;

    public function __construct()
    {
        
    }


    public function index()
    {
        $casasModel = new casasModel();
        $data['casas'] = $casasModel->find();
        //$propiedad=($data['casas'][0]['tagCasa']);
      //echo print_r($data);
    
        return view('welcome_message',$data);
        
    }


    public function usuario($usuario=null)
    {
        
        $casasinicioModel = new casasinicioModel();
        $casasModel = new casasModel();
        $data['casas'] = $casasModel->where('idCliente',$usuario)->find();
        return view('welcome_message',$data);  
           
    }


    public function casa($casa=null)
    {
      
        $casasModel = new casasModel();
        $data['casas'] = $casasModel->where('id',$casa)->find();
        $propiedad=($data['casas'][0]['tagCasa']);
        return  view('casa',$data);   
    }


    public function galeria($casa=null)
    { 

        $casasModel = new casasModel();
        $data['casas'] = $casasModel->where('id',$casa)->find();
        //$galeria='gallery_'.$data['casas'][0]['tagCasa'];
        return  view('galeria',$data);
           
    }
}



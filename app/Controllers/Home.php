<?php

namespace App\Controllers;
use App\Models\casausuarioModel;
use App\Models\casasModel;
use App\Models\asesoresModel;



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

        $casasModel = new casasModel();
        $asesoresModel = new asesoresModel();
        $casausuarioModel = new casausuarioModel();
                //determina si existe
        $datas['casass'] = $asesoresModel->where('userasesor',$usuario)->countAllResults();
        
        if ($datas['casass']==0){
            echo 'no existe';
        }else{
            //echo 'si existe';
            $query= $casausuarioModel->select('idCasa')->where('idAsesor',$usuario)->findAll();
            $data['casas']= $casasModel->whereIn('id' ,[1,2,3])->findAll();
            //print_r($data['casas']);


            return view('welcome_message',$data);  
            
        }


        
           
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



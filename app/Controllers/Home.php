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
            $dato='';
                $query= $casausuarioModel->select('idCasa')->where('idAsesor',$usuario)->findAll();
                $cuenta=$casausuarioModel->select('idCasa')->where('idAsesor',$usuario)->CountAll();
                //print_r($query);
                $count=0;
                $sep='';
                //   $items = array();
            foreach($query as $username) {

                $count= $count+1;

                //echo $count.'/'.$cuenta;        
                if ($count==$cuenta){
                $sep='';
                }else{
                    $sep=',';
                }
                
                 $dato .= $username['idCasa'].$sep;
                 $datoprueba = array($dato); 
            }
            //exit();
            //print_r(is_string($datoprueba[0]));
            //exit();
            $data['casas']= $casasModel->whereIn('id' ,strval($datoprueba))->findAll();
            
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



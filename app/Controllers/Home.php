<?php

namespace App\Controllers;
use App\Models\casausuarioModel;
use App\Models\casasModel;
use App\Models\asesoresModel;

class Home extends BaseController
{

    public function __construct()
    {
        $this->session = \Config\Services::session();
        
    }

    public function index()
    {
        

        $casasModel = new casasModel();
        $data['casas'] = $casasModel->find();
        //print_r($data);
        return view('welcome_message',$data);
        
    }

    public function usuario($usuario=null)
    {

        //session_start();
        //$_SESSION['asesor'] = 'marco';
        //$session = \Config\Services::session($config);
//$session->start();
        $_SESSION['asesor'] = $usuario;

  //      exit();
        $casasModel = new casasModel();
        $asesoresModel = new asesoresModel();
        $casausuarioModel = new casausuarioModel();
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
                $categories = array();
            foreach($query as $username) {
                $count= $count+1;
                //echo $count.'/'.$cuenta;        
                $comas=("'");
                if ($count==$cuenta){
                $sep='';
                }else{
                    $sep=',';
                }

                $categories[] = $username['idCasa'];
            }
            
     $data['casas']= $casasModel->whereIn('id',$categories)->findAll();            
            return view('welcome_message',$data);  
        }
    }


    public function casa($casa=null)
    {
      
        $casasModel = new casasModel();
        $data['casas'] = $casasModel->where('id',$casa)->find();
        //obtiene el IDTEL
        //$asesoresModel = new asesoresModel();
        
        //$datas['casass'] = $asesoresModel->where('userasesor',$usuario)->findAll();
        print_r($_SESSION);

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



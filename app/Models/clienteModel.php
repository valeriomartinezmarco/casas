<?php

namespace App\Models;

use CodeIgniter\Model;

class clienteModel extends Model
{
    protected $table      = 'cliente';
    //protected $primaryKey = 'id';

    protected $useAutoIncrement = true;

    //protected $returnType     = 'array';
    //protected $useSoftDeletes = true;

    protected $allowedFields = ['id','tagCasa','tituloCasa','introCasa',  'botonCasaCel', 'tituloDescCasa',  'descCasa' ,  'descJardin' ,'footerCasa','infoCasa','categoriaCasa' , 'adminCasa','fotosfechaCasa','ligafotosCasa' ];


    // Dates
    protected $useTimestamps = false;
    protected $dateFormat    = 'datetime';
    protected $createdField  = 'created_at';
    protected $updatedField  = 'updated_at';
    protected $deletedField  = 'deleted_at';

    // Validation
    protected $validationRules      = [];
    protected $validationMessages   = [];
    protected $skipValidation       = false;
    protected $cleanValidationRules = true;

    // Callbacks
    protected $allowCallbacks = true;
    protected $beforeInsert   = [];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];
}
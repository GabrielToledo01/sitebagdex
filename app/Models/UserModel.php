<?php

namespace App\Models;

use CodeIgniter\Model;

class UserModel extends Model
{
    protected $DBGroup          = 'default';
    protected $table            = 'usuarios';
    protected $primaryKey       = 'id';
    protected $useAutoIncrement = true;
    protected $returnType       = 'object';
    protected $useSoftDeletes   = false;
    protected $protectFields    = true;
    protected $allowedFields    = ['usuario','email','phone','doc','senha','perfil'];

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
    protected $beforeInsert   = ['hashSenha'];
    protected $afterInsert    = [];
    protected $beforeUpdate   = [];
    protected $afterUpdate    = [];
    protected $beforeFind     = [];
    protected $afterFind      = [];
    protected $beforeDelete   = [];
    protected $afterDelete    = [];

    // metodo senha criptografada
    protected function hashSenha($data){
       $data['data']['senha']= password_hash($data['data']['senha'],PASSWORD_DEFAULT);
        return $data;    
    }

    public function check($usuario, $senha){

	    //Buscar o usuario
	    $buscaUsuario = $this->where('usuario', $usuario)->first();
        
	    if(is_null($buscaUsuario)){
		    return false;
	    }

	    //Validar a senha
	    if(! password_verify($senha, $buscaUsuario->senha)){
		    return false;
	    }
	    return $buscaUsuario;
    }
}

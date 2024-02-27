<?php

namespace App\Models;

use CodeIgniter\Model;

Class Convidados_Confirmados extends Model {

    protected $table      = 'convidados_confirmados';
    protected $primaryKey = 'cc_id';

    protected $useAutoIncrement = true;

    protected $returnType     = 'array';
    protected $useSoftDeletes = false;

    protected $allowedFields = ['cc_nome'];

    // Dates
    protected $useTimestamps = false;

    public function salvar(array $convidados){

        return $this->save($convidados);
    }

}
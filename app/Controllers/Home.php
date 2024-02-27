<?php

namespace App\Controllers;

use App\Models\Convidados_Confirmados;

class Home extends BaseController
{
    public function index(): string
    {
        return view('welcome_message');
    }

    public function confirmarPresenca(){

        $convidados['cc_nome'] = $_POST['nome'];

        $obj = new Convidados_Confirmados();

        $retorno = $obj->salvar($convidados);
    
        if($retorno == 1){
        $ret['msg'] = 'Presença confirmada !';
        $ret['status'] = 1;
        
        } else {
            
        $ret['msg'] = 'Ocorreu um erro ao confirmar sua presença, tente novamente mais tarde !';
        $ret['status'] = 0; 
        }

        echo json_encode($ret);
    }

    function validarRG($rg) {
        
        // Remover caracteres não numéricos
        $rg = preg_replace("/[^0-9]/", "", $rg);
        
        // Verificar se tem 9 dígitos
        if (strlen($rg) != 9) {
            return false;
        }

        if($rg == '000000000'){
            return false;
        }
        
        // Calcular dígito verificador
        $sum = 0;
        for ($i = 0; $i < 8; $i++) {
            $sum += intval($rg[$i]) * (9 - $i);
        }
        
        $dv = ($sum % 11);

        if ($dv == 10) {
            $dv = 0;
        }

        // Verificar se o dígito verificador é válido
        if ($dv == intval($rg[8])) {
            return true;
        } else {
            return false;
        }
    }
}
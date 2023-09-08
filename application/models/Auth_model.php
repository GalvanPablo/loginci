<?php

class Auth_model extends CI_Model {
    function __construct()     {
        parent::__construct();
    }

    public function login($usuario, $pass){
        $consulta = $this->db->query("SELECT usuario, contraseña FROM user  WHERE usuario = '" . $usuario. "' and contraseña='" . $pass."'");
        if ($consulta->num_rows() == 1) {
            return true;
        }else{
            return false;
        }
    }


}

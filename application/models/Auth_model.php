<?php

class Auth_model extends CI_Model {
    function __construct()     {
        parent::__construct();
    }

    public function login($usuario, $pass){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $usuario);

        // admin - 123
        // user - 456

        $user = $this->db->get()->result();
        if($user != null){
            if(password_verify($pass, $user[0]->passwd)){
                return true;
            }
            echo "<script>alert('Contraseña incorrecta')</script>";
        } else {
            echo "<script>alert('El usuario no existe')</script>";
        }
        return false;
    }
}

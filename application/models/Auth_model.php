<?php

class Auth_model extends CI_Model {
    function __construct()     {
        parent::__construct();
    }

    public function login($usuario, $pass){
        $this->db->select('*');
        $this->db->from('user');
        $this->db->where('username', $usuario);

        // admin - 123 - $2y$10$Z/rBlJgr0GgaRjJp/p3Bn.s/RPwwnwA3Lo4WUIhVIuFkWliPZgimq
        // user - 456 - $2y$10$ah7BqgJG6LsXtbhHyZALVemlcqf6rq9QT2olULXW3n/Na/8/UCdzm

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

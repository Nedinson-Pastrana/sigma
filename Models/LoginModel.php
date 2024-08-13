<?php

class LoginModel extends Mysql
{
    private $intIdUsuario;
    private $intIdentificacion;
    private $strPassword;


    public function loginUser(string $identificacion, string $password)
    {
        $this->strUsuario = $usuario;
        $this->strPassword = $password;
        $sql = "SELECT ide_usuario ,estado FROM tbl_usuarios WHERE
					identificacion = '$this->identificacion' and
					password = '$this->strPassword' and
					estado != 0 ";
        $request = $this->select($sql);
        return $request;
    }


    

}

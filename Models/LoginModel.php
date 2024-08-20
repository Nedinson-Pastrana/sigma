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



    public function sessionLogin(int $iduser)
    {
        $this->intIdUsuario = $iduser;
        //BUSCAR ROL
        $sql = "SELECT p.ide_usuario,
							p.identificacion,
							r.idrol,
                            r.nombrerol,
							p.status
					FROM tbl_usuarios p
					INNER JOIN rol r
					ON p.rolid = r.idrol
					WHERE p.ide_usuario = $this->intIdUsuario";
        $request = $this->select($sql);
        $_SESSION['userData'] = $request;
        return $request;
    }
}







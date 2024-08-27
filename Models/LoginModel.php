<?php

class LoginModel extends Mysql
{
    private $intIdUsuario;
    private $intIdentificacion;
    private $strPassword;


    public function loginUser(string $usuario, string $password)
    {
        $this->strUsuario = $usuario;
        $this->strPassword = $password;
        $sql = "SELECT ideusuario ,status FROM tbl_usuarios WHERE
					identificacion = '$this->strUsuario' and
					password = '$this->strPassword' and
					status != 0 ";
        $request = $this->select($sql);
        return $request;
    }



    public function sessionLogin(int $iduser)
    {
        $this->intIdUsuario = $iduser;
        //BUSCAR ROL
        $sql = "SELECT p.ideusuario,
							p.identificacion,
							r.idrol,
                            r.nombrerol,
							p.status
					FROM tbl_usuarios p
					INNER JOIN rol r
					ON p.rolid = r.idrol
					WHERE p.ideusuario = $this->intIdUsuario";
        $request = $this->select($sql);
        $_SESSION['userData'] = $request;
        return $request;
    }
}







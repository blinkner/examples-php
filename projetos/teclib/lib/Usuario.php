<?php

class Usuario
{
    private $id_usuario;
    public $login;
    private $senha;
    public $sagas;
    public $nivel_acesso;
    public $conectado;

    public function __construct($login, $senha)
    {
        $this->login = $login;
        $this->setSenha(sha1($senha));
    }
    public function getUsuario()
    {
        return $this->id_usuario;
    }
    public function setUsuario($id_usuario)
    {
        $this->id_usuario = $id_usuario;
    }
    public function setSenha($senha)
    {
        $this->senha = $senha;
    }
    public function getSenha()
    {
        return $this->senha;
    }
    public function limpar()
    {
        setUsuario("");
        $this->login = "";
        $this->sagas = "";
        $this->nivel_acesso = "";
    }
    public function login($conexao)
    {
        // Área para gravação no banco de dados.
        $query = "  SELECT id_usuario, login, sagas, nivel_acesso FROM usuarios
                    WHERE (login='$this->login') && (senha='$this->senha')";
        $resultado = mysqli_query($conexao,$query);
        $linha_login = mysqli_fetch_array($resultado);

        $this->setSenha("");

        if ($linha_login['id_usuario'])
        {
            $this->setUsuario($linha_login['id_usuario']);
            $this->login = $linha_login['login'];
            $this->sagas = $linha_login['sagas'];
            $this->nivel_acesso = $linha_login['nivel_acesso'];
            $this->conectado = true;
        }
        else
        {
            $this->conectado = false;
        }
    }
    public function logout()
    {
        $this->conectado = false;
        $this->limpar();
    }
}

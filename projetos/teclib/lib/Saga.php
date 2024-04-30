<?php

class Saga
{
    private $id_saga;
    public $nome;
    public $desenvolvedor;
    public $ano;
    public $tipo;
    public $categoria;
    public $sinopse;
    public $img;

    public function getSaga()
    {
        return $this->id_saga;
    }
    public function setSaga($id_saga)
    {
        $this->id_saga = $id_saga;
    }
    public function postSaga($nome, $desenvolvedor, $ano, $tipo, $categoria, $sinopse, $img)
    {
        $this->nome = $nome;
        $this->desenvolvedor = $desenvolvedor;
        $this->ano = $ano;
        $this->tipo = $tipo;
        $this->categoria = $categoria;
        $this->sinopse = $sinopse;
        $this->img = $img;
    }
    public function limpar()
    {
        $this->id_saga = "";
        $this->nome = "";
        $this->desenvolvedor = "";
        $this->ano = "";
        $this->tipo = "";
        $this->categoria = "";
        $this->sinopse = "";
        $this->img = "";
    }
    public function cadastrar($conexao)
    {
        // Área para gravação no banco de dados.
        if($this->nome and $this->desenvolvedor and $this->ano and $this->tipo and $this->tipo)
        {
            $query =   "INSERT INTO sagas
                        VALUES(NULL,'$this->nome','$this->desenvolvedor','$this->ano','$this->tipo',
                        '$this->categoria','$this->sinopse','$this->img')";
            $resultado = mysqli_query($conexao, $query);

            $resultado_sql = mysqli_query($conexao, "SELECT COUNT(id_saga) as total FROM sagas");
            $data = mysqli_fetch_assoc($resultado_sql);
            $total = $data['total'];

            $num;
            for($i = 1; $i <= $total; $i++)
            {
                if($i == 1)
                {
                    $num = '\''.$i.'\'';
                }
                else
                {
                    $num .= ','.'\''.$i.'\'';
                }
            }
            $query_modify = "ALTER TABLE usuarios MODIFY COLUMN sagas
                        set($num) null";
            $resultado_modify = mysqli_query($conexao, $query_modify);

            $this->limpar();

            echo '<script>alert("Saga cadastrada com sucesso!")</script>';
        }
        else
        {
            echo '<script>alert("Preencha os dados corretamente!")</script>';
        }
    }
}

<?php

class Temporada
{
    private $id_temporada;
    public $id_saga;
    public $nome;
    public $ano;
    public $total_episodios;
    public $img;

    public function getTemporada()
    {
        return $this->id_temporada;
    }
    public function setTemporada($id_temporada)
    {
        $this->id_temporada = $id_temporada;
    }
    public function postTemporada($id_saga, $nome, $ano, $total_episodios, $img)
    {
        $this->id_saga = $id_saga;
        $this->nome = $nome;
        $this->ano = $ano;
        $this->total_episodios = $total_episodios;
        $this->img = $img;
    }
    public function limpar()
    {
        $this->id_temporada = "";
        $this->id_saga = "";
        $this->nome = "";
        $this->ano = "";
        $this->total_episodios = "";
        $this->img = "";
    }
    public function cadastrar($conexao)
    {
        // Área para gravação no banco de dados.
        if($this->id_saga and $this->nome and $this->ano and $this->total_episodios)
        {
            $query =   "INSERT INTO temporadas
                        VALUES(NULL,'$this->id_saga','$this->nome','$this->ano','$this->total_episodios',
                        '$this->img')";
            $resultado = mysqli_query($conexao, $query);

            $this->limpar();

            echo '<script>alert("Temporada cadastrada com sucesso!")</script>';
        }
        else
        {
            echo '<script>alert("Preencha os dados corretamente!")</script>';
        }
    }
}

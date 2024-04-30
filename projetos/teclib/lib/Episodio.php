<?php

class Episodio
{
    private $id_episodio;
    private $id_usuario;
    private $id_saga;
    private $id_temporada;
    public $valor;
    public $estado;

    public function postEpisodio($id_usuario, $id_saga, $id_temporada, $valor, $estado)
    {
        $this->id_usuario = $id_usuario;
        $this->id_saga = $id_saga;
        $this->id_temporada = $id_temporada;
        $this->valor = $valor;
        $this->estado = $estado;
    }
    public function getEpisodio()
    {
        return $this->id_episodio;
    }
    public function setEpisodio($id_episodio)
    {
        $this->id_episodio = $id_episodio;
    }
    public function limpar()
    {
        $this->id_episodio = "";
        $this->id_usuario = "";
        $this->id_saga = "";
        $this->id_temporada = "";
        $this->valor = "";
        $this->estado = "";
    }
    public function editEpisodio($conexao, $totalEps)
    {
        $query = "  SELECT id_episodio FROM episodios
                    WHERE id_usuario='$this->id_usuario' && id_saga='$this->id_saga' && id_temporada='$this->id_temporada'";
        $resultado = mysqli_query($conexao, $query);
        $linha = mysqli_fetch_array($resultado);

        if($this->valor == 0) {
            $this->estado = "Lista";
        }
        else if($this->valor < $totalEps) {
            $this->estado = "Em Andamento";
        }
        else {
            $this->estado = "Concluído";
        }

        // Verifica se já possui registro.
        if ($linha['id_episodio']) {
            
            $this->id_episodio = $linha['id_episodio'];

            $query_edit = " UPDATE episodios SET valor='$this->valor', estado='$this->estado'
                            WHERE id_episodio='$this->id_episodio'";
            $resultado_edit = mysqli_query($conexao, $query_edit);
        }
        else {
            $query_edit = " INSERT INTO episodios
                            VALUES(NULL,'$this->id_usuario','$this->id_saga','$this->id_temporada','$this->valor','$this->estado')";
            $resultado_edit = mysqli_query($conexao, $query_edit);
        }

        $this->limpar();
        echo '<script>alert("Atualizado com sucesso!")</script>';
    }
}

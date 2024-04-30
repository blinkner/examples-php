<?php
class ContaBanco
{
    public $num_conta;
    protected $tipo;
    private $saldo;
    private $dono;
    private $status;

    public function getNumConta() {
        return $this->num_conta;
    }
    public function setNumConta($num_conta) {
        $this->num_conta = $num_conta;
    }
    public function getTipo() {
        return $this->tipo;
    }
    public function setTipo($tipo) {
        $this->tipo = $tipo;
    }
    public function getSaldo() {
        return $this->saldo;
    }
    public function setSaldo($saldo) {
        $this->saldo = $saldo;
    }
    public function getDono() {
        return $this->dono;
    }
    public function setDono($dono) {
        $this->dono = $dono;
    }
    public function getStatus() {
        return $this->status;
    }
    public function setStatus($status) {
        $this->status = $status;
    }
    public function __construct() {
        $this->setStatus(false);
        $this->setSaldo(0);
    }
    public function abrirConta($tipo) {
        $this->setTipo($tipo);
        $this->setStatus(true);

        if ($tipo == "CC") {
            $this->setSaldo(50);
        } elseif ($tipo == "CP") {
            $this->setSaldo(150);
        }
    }
    public function fecharConta() {
        if ($this->getSaldo() > 0) {
            echo "<p>Conta ainda possui dinheiro.</p>";
        } elseif ($this->getSaldo() < 0) {
            echo "<p>Conta em débito.</p>";
        } else {
            $this->setStatus(false);
            echo "<p>Conta de {$this->getDono()} fechada com sucesso.</p>";
        }
    }
    public function depositar($valor) {
        if ($this->getStatus()) {
            $this->setSaldo($this->getSaldo() + $valor);
            echo "<p>Depósito de R\$ {$valor} na conta de {$this->getDono()}.</p>";
        } else {
            echo "<p>Conta fechada! Não é possível despositar!</p>";
        }
        
    }
    public function sacar($valor) {
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Saque de R\$ {$valor} autorizado na conta de {$this->getDono()}.</p>";
            } else {
                echo "Saldo insuficiente";
            }
        } else {
            echo "Impossível sacar";
        }
    }
    public function pagarMensal() {
        if ($this->getTipo() == "CC") {
            $valor = 12;
        } elseif ($this->getTipo() == "CP") {
            $valor = 20;
        }
        if ($this->getStatus()) {
            if ($this->getSaldo() >= $valor) {
                $this->setSaldo($this->getSaldo() - $valor);
                echo "<p>Mensalidade de R\$ {$valor} debitada na conta de {$this->getDono()}.</p>";
            } else {
                echo "<p>Saldo insuficiente!</p>";
            }
        } else {
            echo "<p>Impossível pagar!</p>";
        }
    }
}
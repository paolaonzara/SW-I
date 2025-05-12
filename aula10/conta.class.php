<?php
    class conta{
        public $nome;
        public $cpf;
       private $saldo;

        public function sacar($valor){
            if ($this->saldo<$valor){
                return"Saldo insuficiente";
            } else{
            $this->saldo = $this->saldo - $valor;
            $texto = "Saque Realizado. Saldo atual é de R$ ". $this->saldo;
            return $texto;
        }
        }
        public function Depositar($valor){
            $this->saldo += $valor;
            $texto = "Deposito Realizado. Saldo atual é de R$ ". $this->saldo;
            return $texto;
        }
        public function MostrarSaldo(){
            echo"Nome do cliente: ". $this->Nome ."<br>";
            echo"Cpf do cliente: ". $this->cpf ."<br>";
            echo"Saldo diponivel: R$: ". $this->saldo ."<br>";
        }
    }






?>
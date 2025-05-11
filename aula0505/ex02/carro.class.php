<?php
    class Carro{
        public $Fabricante;
        public $Marca;
        public $Modelo;
        public $Cor;
        public $Status;

        public function Ligar(){
            $this->Status= True;
        }
        public function Desligar(){
            $this->Status= False;
        }

        public function MostrarDados(){
            echo "Fabricante: ". $this->Fabricante ."<br>";
            echo "Marca: ". $this->Marca ."<br>";
            echo "Modelo: ". $this->Modelo ."<br>";
            echo "Cor: ". $this->Cor ."<br>";
            if($this->Status == True){
                echo "Está novo?; SIM <br>";
            }else{
                echo "Está novo?; NAO <br>";
            }
            
        }

    }



?>
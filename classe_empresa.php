<?php
    class Empresa{

        public $vendas;

        public function imprimir(){

            echo "Vendas";

            for ($i=0; $i<count($this->vendas); $i++){

                echo "<br>" .
                "ID: " . $this->vendas[$i]->id .
                "<br>" .
                "Método: " . $this->vendas[$i]->metodo .
                "<br>" . 
                "Efetuada: " . $this->vendas[$i]->efetuada .
                "<br>" . "<br>";

            }
        }
    } 

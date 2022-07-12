<?php

    class Venda{

        public $id;
        public $metodo;
        public $efetuada;
        public $produtos;
        public $valor;
        public $numprod = 0;

        public function calc_valor(){

            $this->valor = 0;
            for ($i=0; $i<$this->numprod; $i++) {
                $this->valor += $this->produtos[$i]->total;

            }

        }

        public function imprimir(){

            $this->calc_valor();

            echo "Valor final da venda: ".$this->valor."R$";
            echo "<br>" . "- Produtos -";

            for ($i=0; $i<$this->numprod; $i++) {

                echo "<br>" .
                "Produto: ".$this->produtos[$i]->nome .
                "<br>" .
                "Valor unitário: ".$this->produtos[$i]->unidade .
                "<br>" .
                "Quantidade: ".$this->produtos[$i]->quantidade .
                "<br>" .
                "Valor total: ".$this->produtos[$i]->total .
                "<br>";

            }

        }

    }

?> 

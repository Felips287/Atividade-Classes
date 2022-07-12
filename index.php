<?php

    include("classe_venda.php");
    include("classe_produto.php");
    include("classe_empresa.php");

    $p1 = new Produtos();
    $p1->nome = "abacaxi";
    $p1->unidade = 2.75;
    $p1->quantidade = 5;
    $p1->calc_valor();

    $p2 = new Produtos();
    $p2->nome = "pêra";
    $p2->unidade = 4;
    $p2->quantidade = 5;
    $p2->calc_valor();

    $venda1 = new Venda();
    $venda1->id = 1;
    $venda1->efetuada = "Sim";
    $venda1->metodo = "A vista";
    $venda1->produtos[0] = $p1;
    $venda1->numprod++;
    $venda1->produtos[1] = $p2;
    $venda1->numprod++;

    $venda2 = new Venda();
    $venda2->id = 2;
    $venda2->efetuada = "Sim";
    $venda2->metodo = "A vista";
    $venda2->produtos[0] = $p1;
    $venda2->numprod++;
    $venda2->produtos[1] = $p2;
    $venda2->numprod++;

    $venda3 = new Venda();
    $venda3->id = 3;
    $venda3->paga = "Não";
    $venda3->finalidade = "A prazo";
    $venda3->produtos[0] = $p1;
    $venda3->numprod++;
    $venda3->produtos[1] = $p2;
    $venda3->numprod++;

    $venda4 = new Venda();
    $venda4->id = 4;
    $venda4->efetuada = "Sim";
    $venda4->metodo = "A prazo";
    $venda4->produtos[0] = $p1;
    $venda4->numprod++;
    $venda4->produtos[1] = $p2;
    $venda4->numprod++;

    $Empresa = new Empresa();
    $Empresa->vendas[0] = $venda1;
    $Empresa->vendas[1] = $venda2;
    $Empresa->vendas[2] = $venda3;
    $Empresa->vendas[3] = $venda4;
    $Empresa->imprimir();






?> 

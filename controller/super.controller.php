<?php
    include "../model/super.class.php";

    $sup = new Mercado;
   
    $sup->setNomeCliente($_POST["txtnome"]);
    $sup->setTelefoneCliente($_POST["txtfone"]);
    $sup->setIdade($_POST["txtidade"]);
    $sup->setEmail($_POST["txtemail"]);
    $sup->setEnderecoEntrega($_POST["txtendereco"]);
    $sup->tipoProduto($_POST["txtcategoria"]);
    $sup->getProduto($_POST["txtbebida"]);
    $sup->setQuantidade($_POST["txtquant"]);
    $sup->formaPagamento($_POST["txtpagamento"]);
    $sup->frete($_POST["txtcep"]);
    $sup->cupomDesconto($_POST["txtcupom"]);
    $sup->ValorTotalFrete();

    header("location:../view/super.resposta.php?txtnome=$sup->setNomeCliente&txtfone=$sup->setTelefoneCliente&txtidade=$sup->setIdade&txtemail=$sup->setEmail&txtendereco=$sup->setEnderecoEntrega&txtcategoria=$sup->tipoProduto&txtbebida=$sup->getProduto&txtquant=$sup->setQuantidade&txtpagamento=$sup->formaPagamento&txtfrete=$sup->frete&txtcupom=$sup->cupomDesconto&valortotalFrete={$sup->valorTotalFrete()}");



?>
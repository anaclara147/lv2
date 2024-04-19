<?php
include 'Fatura.php';

    $fatura1 = new Fatura();
    $fatura1->setNumero("1");
    $fatura1->setDescricao("Celular");
    $fatura1->setQuantidade(5);
    $fatura1->setPreco(50.00);
    
    echo "Número da fatura: <strong>" . $fatura1->getNumero() ."</strong>"; echo" <br>";
    echo "Descrição: <strong>" . $fatura1->getDescricao() . "</strong>"; echo" <br>";
    echo "Quantidade de produtos: <strong>" . $fatura1->getQuantidade() ."</strong>"; echo" <br>";
    echo "Preço da fatura: <strong>" . $fatura1->getPreco() ."</strong>"; echo" <br>";
   
    






?>
<?php
    include_once 'conta.class.php';

    $conta = new conta();

    $conta->Nome = "Irineu";
    $conta->cpf = "123.456.789-12";
    //$conta->saldo(100000)

    $conta->MostrarSaldo();
    echo $conta->Depositar(500);
    echo"<hr>";

    $conta->MostrarSaldo();

    echo"<hr>";
    echo $conta->sacar(400);

?>
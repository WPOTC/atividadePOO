<?php

require_once("Cliente.php");

$cliente = new Cliente();
$cliente->nome = "Jhon";
$cliente->sobrenome = "Major";
$cliente->cpf = "544.716.948-80";
$cliente->rg = "64.699.343-4";
$cliente->telefone = "(18) 99606-5487";
$cliente->email = "majordocinho@gmail.com";
$cliente->idade = "21";
$cliente->sexo = "Masculino";
$cliente->endereco = "Rua XV de novembro 867";
$cliente->cordapele = "Não Identificado";

$cliente->DadosCliente("Jhon", "Major", "544.716.948-80", "64.699.343-4", "(18) 99606-5487", "majordocinho@gmail.com", "21", "Masculino", "Rua 15 de Novembro, 867 - Centro", "Não Identificado", );

?>
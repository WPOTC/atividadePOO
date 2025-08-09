<?php

class Carro{
    public $marca;
    public $modelo;
    public $ano;
    public $placa;
    public $cor;

    public Function DadosCarro($marca, $modelo, $ano, $placa, $cor){
        echo 
        "Marca: " . $marca . "<br>" .
        "Modelo: " . $modelo . "<br>" .
        "Ano: " . $ano . "<br>" .
        "Placa: " . $placa . "<br>" .
        "Cor: " . $cor ;
    }
}

?>
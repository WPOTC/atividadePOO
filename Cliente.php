<?php
class Cliente{
    public $nome;
    public $sobrenome;
    public $cpf;
    public $rg;
    public $telefone;
    public $email;
    public $idade;
    public $sexo;
    public $endereco;
    public $cordapele;
    

    public function DadosCliente($nome, $sobrenome, $cpf, $rg, $telefone, $email, $idade, $sexo, $endereco, $cordapele){
        echo "Nome: " . $nome . "<br>" . 
             "Sobrenome: " . $sobrenome . "<br>" . 
             "CPF: " . $cpf . "<br>" .
             "RG:" . $rg . "<br>" . 
             "Telefone: " . $telefone . "<br>" . 
             "Email: " . $email . "<br>" . 
             "Idade: " . $idade . "<br>" . 
             "Sexo: " . $sexo . "<br>" . 
             "Endereço: " . $endereco . "<br>" . 
             "Cor da pele: " . $cordapele;  
    }

}
?>
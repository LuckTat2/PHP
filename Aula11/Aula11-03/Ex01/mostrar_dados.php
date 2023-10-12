
<?php
    //Inclui o arquivo "pessoa.php" que contém a definição da classe Pessoa
    require_once 'pessoa.php';

    //Cria um novo objeto da classe Pessoa com o nome "João", idade "30" e CPF "00435635486"
    $pessoa1 = new Pessoa("João",30, "00435635486");

    //Chama o metódo "saudacao" do objeto "$pessoa1" e exibe o resultado
    echo $pessoa1->saudacao(); //Saída: Olá, meu nome é João e eu tenho 30 anos. CPF:00435635486

?>

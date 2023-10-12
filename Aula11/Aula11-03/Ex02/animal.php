
<?php
    class Animal {

        public $nome;

        //Método construtor da classe Animal
        public function __construct($nome)
        {
            $this->nome = $nome;
        }

        //Método da classe Animal que retorna um som genérico
        public function som(){
            return "O animal faz um som.<br>";
        }
    }

    class Cachorro extends Animal {

        //Método da classe Cachorro que substitui o método "som" da classe Animal
        public function som(){
            return "O cachorro late.";
        }
    }

    //Criando um objeto da classe Animal com o nome "Urso"
    $animal1 = new Animal("Urso");

    //Criando um objeto da classe Cachorro com o nome "Rex"
    $cachorro1 = new Cachorro("Rex");

    //Chamando o metódo "som" da classe Animal para o objeto $animal1
    echo $animal1->som(); //Saída: O animal faz um som.;

    //Chamando o metódo "som" da classe Cachorro para o objeto $cachorro1
    echo $cachorro1->som(); //Saída: O cachorro late.;
?>

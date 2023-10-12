
<?php
    class PessoaA {
        //Define propriedades privadas
        private $nome;
        private $idade;

        public function setNome($nome)
        {
            //Validar o nome, se necessário
            $this->nome = $nome;            
        }
        public function getNome(){
            return $this->nome;
        }
        public function setIdade($idade){
            //Validar idade, se necessário
            $this->idade = $idade;
        }
        public function getIdade(){
            return $this->idade;
        }
    }

    $pessoa1 = new PessoaA();
    $pessoa1->setNome("Alice");
    $pessoa1->setIdade(23);
   
    echo "Nome: ".$pessoa1->getNome()."<br>"; //Saída: Alice
    echo "Idade: ".$pessoa1->getIdade(); //Saída: 25
?>


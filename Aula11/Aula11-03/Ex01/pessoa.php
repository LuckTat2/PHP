
<?php
    //Define uma classe chamada "Pessoa"
    class Pessoa {
        //Define propriedades públicas
        public $nome;
        public $idade;
        public $cpf;

        public function __construct($nome, $idade, $cpf)
        {
            $this->nome = $nome;
            $this->idade = $idade;
            $this->cpf = $cpf;
        }
       
        //Define um metódo público
        public function saudacao()
        {
            return "Olá , meu nome é {$this->nome} e eu tenho {$this->idade} anos.
            CPF: {$this->cpf}";
        }
    }
?>

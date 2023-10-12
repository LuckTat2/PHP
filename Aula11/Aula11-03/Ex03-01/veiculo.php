
<?php
    //Declaração de uma interface chamada "Veiculo" com dois métodos obrigatórios: ligar e desligar
    interface Veiculo{
        public function ligar();
        public function desligar();
    }

    //Definição da classe "Carro" que implementa a interface "Veiculo"
    class Carro implements Veiculo{
        //Implementação do método "ligar" da interface "Veiculo"
        public function ligar(){
            return "Carro ligado.<br>";
        }

        //Implementação do método "desligar" da interface "Veiculo"
        public function desligar(){
            return "Carro desligado.";
        }
    }

    //Criação de um objeto da classe "Carro"
    $carro1 = new Carro();

    //Chamando o método "ligar" do objeto "$carro1" e exibição do resultado
    echo $carro1->ligar(); //Saída: Carro ligado.

    //Chamando o método "desligar" do objeto "$carro1" e exibição do resultado
    echo $carro1->desligar(); //Saída: Carro desligado.
?>



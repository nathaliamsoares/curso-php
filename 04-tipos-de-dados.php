<?php
/********** Escalares **********/
// string
$nome = "Hello World!";
var_dump($nome);

if(is_string($nome)):
    echo "É uma string";
else:
    echo "Não é uma string";
endif;
echo "<hr>";

// int
$idade = 30;
echo "$idade";
if(is_int($idade)):
    echo " É um inteiro";
else:
    echo " Não é um inteiro";
endif;
echo "<br>";
echo "<hr>";
// float

$altura = 1.62;
echo "$altura";
if(is_float($altura)):
    echo " É um float";
else: 
    echo " Não é um float";
endif;
echo "<br>";
echo "<hr>";

// boolean
$admin = true;
var_dump($admin);
if(is_bool($admin)):
    echo " É um boolean";
else: 
    echo " Não é um boolean";
endif;
echo "<br>";
echo "<hr>";

/********** Compostos **********/
$carros = array("Gol", "Uno", "Camaro", 12, 20.6, true );
var_dump($carros);
if(is_array($carros)):
    echo " É um array";
else: 
    echo " Não é um array";
endif;
echo "<br>";
echo "<hr>";

// object
class Cliente {
    public $name;
    public function atribuirNome($name) {
        $this->$name = $name;
    }
}
$cliente = new Cliente ();
$cliente->atribuirNome("Nathalia");
var_dump($cliente);

/********** Especiais **********/ 
// Null
// Resource
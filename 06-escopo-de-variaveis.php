<?php
// ESCOPO GLOBAL
$nome = "Nathalia Machado";
$a = 1;
$b = 3;
$c = 7;
function exibeNome() {
    global $nome;
    echo $nome;
}
exibeNome();
echo "<hr>";

///////////////////////////////

function exibeCidade() {
// ESCOPO LOCAL
    global $cidade;
    $cidade = "Porto Alegre";
}

exibeCidade();
echo $cidade;
echo "<hr>";
/////////////////////////////

function soma() {
   echo $GLOBALS['a'] + $GLOBALS['b'] + $GLOBALS['c'];
}
soma();
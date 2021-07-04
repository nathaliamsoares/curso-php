<?php
// CONSTANTES: identificador para um valor único. Este valor não pode lterar durante o script
define("NOME", "José Carlos");
define("IDADE", 24);
define("ALTURA", 1.89);
define("CASADO", true);


echo 'Meu nome é '.NOME.', minha idade é '.IDADE.' e minha altura é '.ALTURA.' ';

define("CORES", ['ROSA', 'VERMELHO', 'PRETO']);
echo "<hr>";
echo CORES[1];
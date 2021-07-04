<?php
// Condicionais
// * if
// * else
// * elseif

$numero = 4;

if ($numero == 10):
    echo "é igual a 10";
elseif ($numero <= 9):
    echo "é menor ou igual a 9";
else:
    echo "é diferente de 10";
endif;

echo "<hr>";

$media = 8;

echo ($media >= 7) ? "Aprovado!" : "Reprovado!";

echo "<hr>";
// Condicionais
// switch
// case

$cor = "verde";

switch ($cor):
      case "vermelho":
        echo "Sua cor preferida é vermelho";
        break;
        
        case "verde":
            echo "Sua cor preferida é verde";
            break;
        endswitch;
        

<?php
$dia = "brasil";

switch ($dia) {
    case "segunda":
       echo "hoje e o primeiro dia util da semana!";
       break;
    case "terça";
           echo " hoje e o segundo dia util da semana!";
           break;
    case "quarta":
        echo "hoje e o quarto dia util da semana!";
        break;
     case "quinta":
        echo "hoje e o quinto dia util da semana!";
        break;
    case "sexta":
        echo "hoje e o sexto dia util da semana!";
        break;
              
    case "sábado":
    case "domingo":
         echo "É fim de semana!";
         break;
    default:
    echo "É um dia útil qualquer.";
    
}
?>

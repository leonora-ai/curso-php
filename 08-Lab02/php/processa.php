<?php
// Definindo o salário inicial do trabalhador
$salario_inicial = 2000.00;

// Aumento de 10%
$aumento_10 = $salario_inicial * 0.10;
$salario_apos_aumento_10 = $salario_inicial + $aumento_10;

// Desconto de 15%
$desconto_15 = $salario_apos_aumento_10 * 0.15;
$salario_apos_desconto_15 = $salario_apos_aumento_10 - $desconto_15;

// Aumento de 40%
$aumento_40 = $salario_apos_desconto_15 * 0.40;
$salario_final = $salario_apos_desconto_15 + $aumento_40;

// Exibindo o valor final
echo "Salário Inicial: R$ " . number_format($salario_inicial, 2, ',', '.') . "<br>";
echo "Aumento de 10%: R$ " . number_format($aumento_10, 2, ',', '.') . "<br>";
echo "Salário após aumento de 10%: R$ " . number_format($salario_apos_aumento_10, 2, ',', '.') . "<br>";
echo "Desconto de 15%: R$ " . number_format($desconto_15, 2, ',', '.') . "<br>";
echo "Salário após desconto de 15%: R$ " . number_format($salario_apos_desconto_15, 2, ',', '.') . "<br>";
echo "Aumento de 40%: R$ " . number_format($aumento_40, 2, ',', '.') . "<br>";
echo "Salário Final: R$ " . number_format($salario_final, 2, ',', '.') . "<br>";
?>
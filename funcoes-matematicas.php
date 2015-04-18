<?php
/*
for ($i = 0 ; $i < 1000; $i++){
    //gera numeros randomicos com o minimo e o maximo
    echo mt_rand(0, 9) . ' ';
}
 */

echo floor(5.9);
echo '<br>';
echo ceil(5.1);
echo '<br>';
echo round(5.9);
echo '<br>';
echo round(5.1);
echo '<br>';
$valor = 55444.60;
echo '<br>';

echo 'R$' . number_format($valor,2,',','.');
echo '<br>';

echo abs(-10);
echo '<br>';

echo pow(10, 2);
echo '<br>';
echo max(1,2,4,7,9,15);

echo '<br>';
echo min(1,2,4,7,9,15);
echo '<br>';

echo dechex(244);
echo '<br>';

echo decbin(340);
echo '<br>';

echo hexdec(100);


<?php

$text = 'O rato roeu a roupa do rei de Roma';

//Mostra o tamanho do texto.
echo strlen($text);
echo '<br>';
//Conta o numero de caracteres 'r' no texto.
echo substr_count($text, 'r');

echo '<br><hr><br>';
//localização
echo substr($text, 2,4);
echo '<br>';

echo strpos($text, 'r');
echo '<br>';

echo strrpos($text, 'R');
echo '<br>';

echo stripos($text, 'R');
echo '<br>';

echo strripos($text, 'r');
echo '<br>';

echo '<br><hr><br>';
//SUBSTITUIÇÃO
echo str_replace(' ','', $text);
echo '<br>';
echo str_replace('r', 'R', $text);

echo '<br><hr><br>';
//remove todos os espaços em branco no começo e no fim.
echo trim($text);

echo '<br><hr><br>';
//transforma todos os caracteres em maiuscula
echo strtoupper($text);

echo '<br>';
//minuscula
echo strtolower($text);

echo '<br>';

echo ucfirst($text);



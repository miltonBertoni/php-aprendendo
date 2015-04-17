<?php

//numeros inteiros
$variavel = 10;
echo gettype($variavel);
echo '<br>';
echo is_integer($variavel);
echo '<br>';
//strings
$variavel = "Milton Bertoni";
echo gettype($variavel);
echo '<br>';
echo is_string($variavel);
echo '<br>';
//boleanos
$variavel = true;
$variavel = false;
echo gettype($variavel);
echo '<br>';
echo is_bool($variavel);
echo '<br>';
//arrays
$variavel = array(1,2,3,"Milton","Fernanda", true);
echo gettype($variavel);
echo '<br>';
echo is_array($variavel);
echo '<br>';
//recursos
$variavel = mysql_connect('localhost','admin','admin');
echo gettype($variavel);
echo '<br>';
echo is_resource($variavel);
echo '<br>';
//nulo
$variavel = null;

echo gettype($variavel);
echo '<br>';
echo is_null($variavel);

$variavel = "Milton bertoni";
echo '<br>';
echo (int) $variavel;

//PHP com fraca tipagem :)
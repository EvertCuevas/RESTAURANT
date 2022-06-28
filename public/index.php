<?php

require __DIR__ . "./vendor/autoload.php";
echo "Hola Mundo";

use App\Comida;
use App\Maria\Pepe;

$objetoUno=new Comida();
$objetoUno->precio = 5;
$objetoUno->EstablecerNombre("sopa");

$objetoDos=new Comida();
$objetoDos->precio = 10;
$objetoDos->EstablecerNombre("majaop");


$objetoTres=new Pepe();

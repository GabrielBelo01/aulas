<?php
echo "Estrutura condicional if...else <br>";

echo "<br>";
echo "<br>";


if (true){
    echo "Serei impresso";
}

echo "<br>";

if (false){
    echo "Verdadeiro - Parte A<br>";
    echo "Verdadeiro - Parte B<br>";
} else {
    echo "Falso - Parte A<br>";
    echo "Falso - Parte B<br>";
}

if (false){
    echo"Passo A<br>";
} elseif (false){
    echo"Passo B<br>";
} elseif (false){
    echo"Passo C<br>";
} elseif (false){
    echo"Passo D<br>";
} elseif (false){
    echo"Passo E<br>";
} else {
    echo"Ultimo Passo<br>";
}


echo "<br>";
echo "<br>";

$idade = 15;
if ($idade < 18){
    echo "Menor de idade = $idade anos<br>"; 
} elseif ($idade <= 65){
    echo "Adulto = $idade anos<br>";
} else {
    echo "Terceira idade = $idade anos<br>";
}

echo "<br>";

$produto_em_estoque = false;

if (!$produto_em_estoque){
    echo "Produto em falta no estoque<br>";
} else {
    echo "Produto em estoque<br>";
}



?>
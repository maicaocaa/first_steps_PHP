<?php 
// ● Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la 
// variable original.
// ● Imprime en pantalla la longitud de la variable tipo string.
// ● Imprime en pantalla la cantidad de palabras de la variable tipo string.
// ● Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la 
// variable original.
// ● Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla.
// ● Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla
// ● Suma ambas variables de tipo integer e imprime en pantalla.
// ● Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y 
// consola
// ● a las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato 
// en pantalla y consola.
// ● Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime 
// en pantalla y por consola el resultado
// ● Crear función que determine si un número es par o impar. Imprime por consola y pantalla

echo "<head><style>*{text-align:center;}</style></head> 
<h1>PAG3 // EJERCICIOS STRING</h1>";
$mika = "mika no es gata, es araña";

//Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la variable original.
echo "<h4>● Convierte todos los caracteres del string a mayúsculas e imprimir en pantalla, sin modificar la variable original.</H4>" ;
print_r("el string original es \$mika = ". $mika);
echo "<br>";
echo "$mika + strtoupper(\$mika) --> ";
echo strtoupper($mika);


// ● Imprime en pantalla la longitud de la variable tipo string.
echo "<h4>● Imprime en pantalla la longitud de la variable tipo string.</h4>" ;
echo "echo strlen(\$mika) --> ";
echo strlen($mika );

// ● Imprime en pantalla la cantidad de palabras de la variable tipo string.
echo "<h4>● Imprime en pantalla la cantidad de palabras de la variable tipo string.</h4>" ;
echo "echo str_word_count(\$mika) --> ";
echo str_word_count($mika);


// ● Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la variable original.
echo "<h4>● Cambia a orden inverso los caracteres de la variable string e imprime en pantalla, sin modificar la variable original.</h4>" ;
echo "echo strrev((\$mika) --> ";
echo strrev($mika);

// ● Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla.
echo "<h4>● Reemplaza la palabra 'Gato' de tu variable original a 'Michi' e imprime en pantalla</h4>" ;
echo "echo str_replace(gata, michi,\$mika) --> ";
echo str_replace("gata", "michi",$mika);


echo "<h1>PAG3 // EJERCICIOS INTEGER</h1>";
// ● Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla
echo "<h4>● Declara dos variables y dale un valor de tipo integer e imprime ambas en pantalla</h4>" ;
$my_int1=(int)1;
$my_int2=(int)0;
echo ("los valores son : <br>\$my_int1 = $my_int1  <br>  \$my_int2 = $my_int2 ");


// ● Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y consola 
echo "<h4>●Declara dos variables y dale un valor de 1 y 0 tipo integer e imprime el tipo de dato en pantalla y consola </h4>";
$my_int1=(int)1;
$my_int2=(int)0;
echo "\n";
echo (" \$my_int1 = "); 
var_dump ($my_int1);
echo("\$my_int2 = ");
var_dump ($my_int2);


// A las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato en pantalla y consola.
echo "<h4>●a las variables anteriores cambiales el tipo de dato a Booleano e imprime en el nuevo tipo de dato en pantalla y consola</h4>";
$my_int1=(bool)1;
$my_int2=(bool)0;
echo "\n";
echo (" \$my_int1 = "); 
var_dump ($my_int1);
echo("\$my_int2 = ");
var_dump ($my_int2);

// // ● Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime en pantalla y por consola el resultado
echo "<h4>● Crear función que reciba como parámetros dos números y que retorne la suma de ellos. Imprime en pantalla y por consola el resultado</h4>" ;
function suma($num1,$num2){
    echo "la suma de $num1 y $num2 es = ";
    echo $num1 + $num2 ;
};
suma(3,4);
echo "<br>";
suma(5.53,-3.1416597426);

// // ● Crear función que determine si un número es par o impar. Imprime por consola y pantalla
echo "<h4>● Crear función que determine si un número es par o impar. Imprime por consola y pantalla</h4>" ;
function par($num){
    echo "el numero $num es = ";
    echo $espar = ($num%2==0) ? "par" : "impar";
};
par(3);
echo "<br>";
par(65490980+870505+9854);



// ?>
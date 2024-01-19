<?php
// Declara una variable por cada tipo de dato y asignar un valor
// ● Muestra el valor de esa variable en consola y en pantalla (Averigua cómo imprimir el valor 
// booleano (que imprima true o false), un array y un valor nulo (que imprima NULL) 
//para imprimirlo en pantalla con echo printr o var_dump y abriendo el link
// http://localhost/F5_PROJECTS/php_first%20steps/variables.php en el navegador

//  Tipo de datos  
echo "<head><style>*{text-align:center;}</style></head> 
<h1>PAG1 // PROBANDO TIPO DE DATOS</h1>";
$my_string = "esto es un string ";
$my_integer= 5;
$my_float=5.60;
$my_btrue=true;
$my_bfalse=false;

echo $my_string,$my_integer, $my_float, $my_btrue, $my_bfalse;
echo "\n";
echo "<h1>".$my_string ."</h1> ";
echo $my_integer . "\n";
echo $my_float . "\n";
echo $my_btrue . "\n";
echo $my_bfalse . "\n";

echo "\n";

echo "\n";
var_dump($my_string);  ;
echo "\n";
var_dump($my_integer)  ;
echo "\n";
var_dump($my_float)  ;
echo "\n";
var_dump($my_btrue)  ;
echo "\n";
var_dump($my_bfalse)  ;
echo "\n";

// si los paso a print entrecomillas no cambiarn el tipado
//Los booleanos imprimen 1 y nada con print  pero  con var dump el valor si es true y false
print_r("$my_string");
print_r ("esto es un integer $my_integer" );
echo "\n";
print_r ("esto es un float $my_float");
echo "\n";
print_r ("esto es un boleano true $my_btrue");
echo "\n";
echo "<br>";
print_r ("esto es un boleano false $my_bfalse");
echo "\n";

// siguen siendo cada tipo su tipo, 

var_dump($my_string);  ;
var_dump($my_integer)  ;
var_dump($my_float)  ;
var_dump($my_btrue)  ;
var_dump($my_bfalse)  ;

//con var dump si le pongo comillas , si cambian el tipado
// var_dump("$my_string");
// var_dump ("esto es un integer $my_integer" );
// var_dump ("esto es un float $my_float");
// var_dump ("esto es un boleano true $my_btrue");
// var_dump ("esto es un boleano false $my_bfalse");
echo "\n";


//Una variable es considerada null si:
// se le ha asignado la constante null.
// no se le ha asignado un valor todavía.
// se ha destruido con unset().

unset($my_integer);
var_dump ($my_integer);

$pruebas_null=null;
var_dump ($pruebas_null);

// con gettype podemos saber  imprimir su tipo de datos 
echo gettype ($my_btrue);
echo gettype ($my_bfalse);

//ARRAY

echo "\n";
echo "<br>";
$my_arr = ["array0","array1","array2"];
print_r ("<h4>Esto es un print_r</h4>");
print_r ($my_arr);
echo "<br>";
print_r ("<h4>Esto es un var_dump</h4>");
var_dump($my_arr);  // muestra tipo array enter {} y tipo de dato de cada elemento del array

echo "\n";
echo "<br>";
$my_longarr = [
    "primero" =>$my_string,
    "segundo"=>$my_float,
    "tercero" =>$my_bfalse];


print_r ("<h4>Esto es un print_r</h4>");
print_r ($my_longarr);
echo "<br>";
print_r ("<h4>Esto es un var_dump</h4>");
var_dump($my_longarr);

// ● ¿Qué tipo de dato son las siguientes variables?


//Fácil
$nombre = "Luna"; 
$apellido = "Lovegood";
$edad = 42;
$Ravenclaw = true;

print_r ("<h4>Las variables $nombre $apellido $edad y $Ravenclaw son de tipo:</h4>");
echo gettype ( $nombre);
echo "<br>";
echo gettype ($apellido);
echo "<br>";
echo gettype ($edad);
echo "<br>";
echo gettype ($Ravenclaw);
echo "<br>";

//Medio
$promedio = (8 + 9.5 + 9 + 10 + 8) / 5;
$nombre_completo = $nombre . " " . $apellido;
$presento_examen = (bool) 1;

print_r ("<h4>Las variables $promedio $nombre_completo $apellido y $presento_examen son de tipo:</h4>");
echo $promedio ." = " ;
echo gettype ( $promedio);
echo "<br>";
echo $nombre_completo ." = " ;
echo gettype ($nombre_completo);
echo "<br>";
echo $presento_examen ." = " ;
echo gettype ($presento_examen );
echo "<br>";


//Avanzado
$numero_preguntas = 5 + "5";                    //String 10
$numero_respuestas = "5" + 5;                   //string 10
$promedio_maximo =  $numero_respuestas / 1.0;   //error
$nargles = 3 + "5 nargles"           ;           //string

print_r ("<h4>Las variables $numero_preguntas $numero_respuestas , $promedio_maximo  y $nargles son de tipo:</h4>");
echo $numero_preguntas ." = " ;
echo gettype ( $numero_preguntas);
echo "<br>";
echo $numero_respuestas ." = " ;
echo gettype ($numero_respuestas);
echo "<br>";
echo $promedio_maximo." = " ;
echo gettype ($promedio_maximo);
echo "<br>";
echo $nargles." = " ;
echo gettype ($nargles);
echo "<br>";
?>

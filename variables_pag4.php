<?php 

// ● Crear un array de 10 números
// ● Obtén el largo del array e imprime en pantalla y consola.
// ● Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla
// ● Ahora agrega 2 elementos más a tu array e imprime en pantalla.
// ● Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.
// ● Crear una función que imprima en consola y pantalla todos los números de un array en una lista 
// ● Crear una función que añade un número al array
// ● Crear una función que elimine los números pares de ese array.
// ● Crear una función que devuelva el número mayor de un array.
// ● Crear una función que devuelva el número menor de un array.
// ● Crear un función que convierta en minúsculas todas las letras de un texto.
// ● Crear una función que convierta en mayúsculas todas las letras de un texto. 
// ● Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre 
// en mayúscula.
// ● Crear una clase coche con sus atributos y un atributo puede ser de tipo array 
// ● Crear una función que devuelva la marca del carro.
// ● Crear una función que devuelva la cantidad de puertas que tiene el carro.
// ● Crear una función que devuelva un atributo del array.


echo "<head><style>*{text-align:center;}</style></head> 
<h1>PAG 4 // EJERCICIOS ARRAY</h1>";


// ● Crear un array de 10 números
print "<h4>● Crear un array de 10 números</H4>" ;
$my_array=[0,1,2,3,4,5,6,7,8,9];

// ● Obtén el largo del array e imprime en pantalla y consola.
print "<h4>● Obtén el largo del array e imprime en pantalla y consola. </H4>" ;
print "el largo del array es = echo count(\$my_array) = ";
echo count($my_array);

// ● Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla
print "<h4>●Agrega un valor tipo string al array que creaste anteriormente e imprime en pantalla </H4>" ;
print ("/n agrego con array_push(\$my_array,una frase); = ");
array_push($my_array,"una frase");
print_r($my_array);

// ● Ahora agrega 2 elementos más a tu array e imprime en pantalla.
print "<h4>● Ahora agrega 2 elementos más a tu array e imprime en pantalla. </H4>" ;
print ("/n agrego 2 el mas  array_push(\$my_array,elem1, elem2); = ");
array_push($my_array,"elem1", "elem2");
echo"<br>";
print_r($my_array);

// ● Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.
print "<h4>● Crea un nuevo array y concaténalo con el anterior e imprime en pantalla.</H4>" ;
$my_array2 = ["truski", "mika", "sansa"];
print ("/n agrego nuevo array \$my_array2 = [truski, mika, sansa] y aplico \$my_array = array_merge(\$my_array, \$my_array2);  = ");
$my_array = array_merge($my_array, $my_array2); 
print_r($my_array); 

// ● Crear una función que imprima en consola y pantalla todos los números de un array en una lista 
print "<h4>●  Crear una función que imprima en consola y pantalla todos los números de un array en una lista </H4>" ;
print ("/n    foreach (\$num_array as \$key=>\$value){  echo<li> \$value </li>; = ");
$num_array = [0,1,2,3,4,5,6];

    foreach ($num_array as $key=>$value){
        echo"<li> $value </li>";
    };


// ● Crear una función que añade un número al array
print "<h4>● Crear una función que añade un número al array </H4>" ;
print ("\n    hago una funcion con un array_push numero 5 <br>");

function add_number (&$array,$num) {
        array_push($array, $num);
    };
  
add_number($num_array, 5);
print_r($num_array); 

// ● Crear una función que elimine los números pares de ese array.
print "<h4>● Crear una función que elimine los números pares de ese array</H4>" ;
print_r($num_array); 
print "<br>aplico  array_filter (array, funcion_de_encontrar_pares) <br>" ;

function test_odd($var)
  {
  return($var & 1);
  }

// print_r(array_filter($num_array,"test_odd"));
$num_array = (array_filter($num_array,"test_odd"));
print_r($num_array); 
   // return ($var & 1); está utilizando el operador de bits & para realizar una operación de "bitwise AND" entre la variable $var y el número 1.

// ● Crear una función que devuelva el número mayor de un array.
print "<h4>● Crear una función que devuelva el número mayor de un array. <br> No la hago, ya existe max(\$array) </H4>" ;
// ya existe
// function max_number($arr){
//     max($arr);
// };

print_r(max($num_array));


// ● Crear una función que devuelva el número menor de un array.
print "<h4>● Crear una función que devuelva el número menor de un array. <br> No la hago, ya existe min(\$array) </H4>" ;
print_r(min($num_array));

// ● Crear un función que convierta en minúsculas todas las letras de un texto.
print "<h4>● Crear un función que convierta en minúsculas todas las letras de un texto. </H4>" ;
print "<br>";
$mayusculas = "ESTO ES UN TEXTO QUE CAMBIA DE TAMAÑO ";

function to_lower($text){
    return strtolower($text);
};

$minusculas = (to_lower($mayusculas));
print_r("esto es el texto cambiado a minusculas --> $minusculas");


// ● Crear una función que convierta en mayúsculas todas las letras de un texto. 
print "<h4>● Crear una función que convierta en mayúsculas todas las letras de un texto. </h4>" ;

function to_upper($text){
    return (strtoupper($text));
};
$minusculas = (to_upper($minusculas));
print_r("esto es el texto cambiado a mayusculas --> $minusculas");

// ● Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre 
// en mayúscula.
print "<h4>● Crear una función que reciba un array de nombres y que convierta la primera letra de cada nombre 
// en mayúscula.</H4>" ;
$array_de_nombres = ["donatello", "michelangello","leonardo","rafael"];
print_r($array_de_nombres);
echo "<br>";
function to_capitalcase($nombre) {
    return ucfirst($nombre);
};

print_r( array_map('to_capitalcase', $array_de_nombres) ); 
echo "<br>";

// lo mismo pero diferente
$array_de_nombres = ["donatello", "michelangello","leonardo","rafael"];
function to_capitalcase2($arr) {
    return array_map('ucfirst',($arr));
};
echo "<br> de otra forma<br>";
print_r(to_capitalcase2($array_de_nombres));

// ● Crear una clase coche con sus atributos y un atributo puede ser de tipo array 
print "<h4>● Crear una clase coche con sus atributos y un atributo puede ser de tipo array </H4>" ;
echo "
    <br>    class Coche {
    <br>        public $marca;
    <br>        public $puertas;
    <br>        public $extras = array();
    <br>       };

";

// ● Crear una función que devuelva la marca del carro.
print "<h4>● Crear una función que devuelva la marca del carro.</H4>" ;

// ● Crear una función que devuelva la cantidad de puertas que tiene el carro.
print "<h4>● Crear una función que devuelva la cantidad de puertas que tiene el carro.</H4>" ;

// ● Crear una función que devuelva un atributo del array.
print "<h4>● Crear una función que devuelva un atributo del array. </H4>" ;

class Coche {
     public $marca;
     public $puertas;
     public $extras = array();

     function __construct ($marca,$puertas,$extras){
        $this->marca = $marca;
        $this->puertas = $puertas;
        $this->extras = $extras;
     }

     function get_marca(){
        return $this ->marca;
     }
     function get_puertas(){
        return $this ->puertas;
     }
     function get_extras(){
        return $this ->extras;
     }

     function get_all(){
        echo "Modelo: {$this->marca} <br>";
        echo "Puertas: {$this->puertas} <br>";
        echo "Extras: ";
        foreach ( $this->extras as $value) {
            echo $value .", ";
        };

     }
    
   
     
};

$extras_mi_coche = ["aircon", "mp3", "gps"];
$mi_coche = new Coche('Hammer',"8 puertas", $extras_mi_coche);
echo $mi_coche -> get_marca();
echo "<br>";
echo $mi_coche -> get_puertas();
echo "<br> los extras son: ";
print_r ( $mi_coche -> get_extras());


echo "<br> <br> otra forma de llamar a un objeto <br>";

$mi_coche -> get_all();

?>
<?php
// TABLAS DE VERDAD
// ●  Suponiendo estas variables
    $es_un_michi_grande = true;
    $le_gusta_comer = true;
    $sabe_volar = false;
    $tiene_2_patas = false;

// ● // ¿Cuál es el resultado según las tablas de verdad?
    // $es_un_michi_grande && $le_gusta_comer   --> true
    // $es_un_michi_grande || $sabe_volar       --> true
    // $sabe_volar || $tiene_2_patas            --> false
    // !$le_gusta_comer                         --> false
    // !$le_gusta_comer || $es_un_michi_grande  --> true

echo "<head><style>*{text-align:center;}</style></head> 
<h1>PAG2 // TABLA DE LA VERDAD</h1>";
print_r("\$es_un_michi_grande && \$le_gusta_comer = ");
print_r($es_un_michi_grande && $le_gusta_comer );
echo var_dump ($es_un_michi_grande && $le_gusta_comer);
echo "<br>";
print_r("\$es_un_michi_grande || \$sabe_volar  = ");
print_r($es_un_michi_grande || $sabe_volar  );
echo var_dump ($es_un_michi_grande && $le_gusta_comer);

echo "<br>";
print_r(" \$sabe_volar || \$tiene_2_patas    = ");
print_r( $sabe_volar || $tiene_2_patas    );
echo var_dump ( $sabe_volar || $tiene_2_patas  );

echo "<br>";
echo "!\$le_gusta_comer  =" ;
echo var_dump ( !$le_gusta_comer );
echo "<br>";
print_r("!\$le_gusta_comer || \$es_un_michi_grande   = ");
print_r( !$le_gusta_comer || $es_un_michi_grande  );
echo var_dump (!$le_gusta_comer || $es_un_michi_grande  );

?>
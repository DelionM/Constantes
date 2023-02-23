<?php
    #uso de constantes en php
    define ('curso', 'php desde cero ');
    define ('nombre_de_la_constante', ' JGL ');

    echo curso;
    echo nombre_de_la_constante;

    #Definición de Arreglos 
    define ('arreglo_animales', [
        'perro',
        'gato',
        'gallina',
    ]);
    
    echo arreglo_animales[1];

    #saber si ya se definio una variable, en caso contrario no se mostrara ninguna acción en le navegador :3
    echo "<br>"; 
    if(defined('curso')){
        echo " Si se ha definido";
    }

    echo "<br>";
    echo "Mi versión de PHP es: " .PHP_VERSION; 
?>
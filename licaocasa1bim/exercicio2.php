<?php
    define ("pi",3.141592);
    $raio = 2;
    $area = 4*pi*($raio*$raio);
    $volume = (4/3)*pi*($raio*$raio*$raio);

    echo (int)$area. " ou ".$area." (não arredondado)" ;
    echo "<br>";
    echo (int)$volume. " ou ".$volume." (não arredondado)" ;

?>
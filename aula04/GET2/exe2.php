<?php
   $v1 = $_GET['v1'] ;
   $v2 = $_GET['v2'] ;
   $v3 = $_GET['v3'] ;

   $numeromaior= 0;

   if ($v1 > $v2 && $v1 >$v3){
    $numeromaior+= $v1;}
   
  
   if ($v2 > $v1 && $v2 > $v3){ 
    $numeromaior += $v2;}

   if ($v3>$v2 && $v3 > $v1) {$numeromaior+=$v3;}


    

  

   echo " $numeromaior"
   


?>
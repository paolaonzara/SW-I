<?php
   $nome=$_GET['cxnome'];
   $n1 = $_GET['n1'] ;
   $n2 = $_GET['n2'] ;
   $n3 = $_GET['n3'] ;

   $soma=$n1+$n2+$n3;
   $media= $soma/3;

  

   echo " O aluno : $nome , tem como soma de suas notas: $soma, e a sua média é $media";
 


?>
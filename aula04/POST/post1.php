<?php
   $loginT = "etec";
   $senhaT = "informatica";
   
   $login = $_POST['login'] ;
   $senha = $_POST['senha'] ;
   
   if (($login == $loginT) && ($senha == $senhaT)) {
       echo "Logado com Sucesso";
   } 
      else {
       echo "Login ou senha inválidos";
   }
   


?>
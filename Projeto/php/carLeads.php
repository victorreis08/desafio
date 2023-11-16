<?php

require_once ("class/Sql.php");
require_once ("class/Lead.php");


try {
    $listar = Lead::getList();

   if(count($listar) > 0){
    echo  $jsonArr = json_encode($listar, JSON_UNESCAPED_UNICODE);
   }else{
    echo '<p>Nenhum registro adicionado</p>';
   }
    
} catch (PDOException $e) {
    echo $e->getMessage();
}
?>
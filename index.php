<?php

//la jugosa ciclo foreach

$salpicon=array("dulce1","banano"=>"dulce2","manzana"=>"dulce3","durazno");
$salpicon1=array("acido1","pina"=>"acido2","naranja"=>"acido3","lulo");
foreach($salpicon as $dulce => $acido)
{
     echo $salpicon."=".$dulce;
     echo $salpicon1."=".$acido;
 }

?>

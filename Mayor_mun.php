<?php

    $numero1 = $_GET["numero1"];
    $numero2 = $_GET["numero2"];
    $numero3 = $_GET["numero3"];

    if ($numero1>$numero2 and $numero1>$numero3){
        $numeromayor = $numero1;
        echo"EL NUMERO ".$numero1." ES MAYOR";
    }elseif($numero2 > $numero3){
        $numeromayor = $numero2;
        echo"EL NUMERO ".$numero2." ES MAYOR";
    }elseif($numero3 > $numero2){
        $numeromayor = $numero3;
        echo"EL NUMERO ".$numero3." ES MAYOR";
    }
?>
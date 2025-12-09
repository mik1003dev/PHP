<?php

$i = 0;

function sankaku($teihen,$takasa)
{
    return $teihen * $takasa / 2;
}
function sikaku($tate,$yoko)
{
    $total2 = $tate * $yoko;
    return $total2;
}

function daikei($ue,$sita, $takasa)
{
    $total3 = ($ue + $sita) * $takasa / 2;
    return $total3;
}


echo (sankaku(10,2))  ."<br />";
echo (sikaku(10,2))  ."<br />";
echo (daikei(80,20,5))  ."<br />";

?>
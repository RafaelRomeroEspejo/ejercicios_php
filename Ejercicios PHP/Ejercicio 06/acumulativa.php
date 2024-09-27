<?php

    $n= $_POST['n'];
    $suma=0;

    for ($i=1;$i!=$n+1;$i++){
        $suma=$suma+$i;
    }

    echo $suma;

?>
<?php

    $num= $_POST['num'];

    for ($i=1;$i!=11;$i++){
        echo $i."x".$num."=".$i*$num;
        echo '<br>';
    }

?>

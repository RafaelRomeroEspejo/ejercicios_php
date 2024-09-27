<?php

    $edad= $_POST['edad'];

    if ($edad<12){
        echo "Infante";
    }
    else if ($edad<18){
        echo "Adolescente";
    }
    else if ($edad<61){
        echo "Adulto";
    }
    else {
        echo "Anciano";
    }
?>
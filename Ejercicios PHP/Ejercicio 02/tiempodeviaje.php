<?php

    $distancia= $_POST['distancia'];
    $velmedia= $_POST['velmedia'];
    $tiempo=$distancia/$velmedia;
    
echo "EL tiempo de viaje será de:".$tiempo;

?>
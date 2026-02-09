<?php
// boardingcard.php? ori=Palma & dest=Oviedo & s=m pax=Sergio & date=2026-06-24 
$origen = $_GET ['ori'];
$destino = $_GET['dest'];
$nombre=  $_GET['pax'];
$fecha= $_GET['date'];
$sexo= $_GET['s'];

?>


<h1><?=$origen?> - <?=$destino; ?></h1>
<p><? echo $nombre; ?></p>
<p><?=$fecha; ?></p>
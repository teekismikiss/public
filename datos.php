<?php
$address='Marqués de Urquijo, 27, local 1, Asturias, 33203 Gijón, Asturias';
$email='crepesnhir@loscrepesnofrixuelo.es';
$telefono='606 67 90 69';
$links = ['carta.php', 'galeria.php', 'contacto.php'];
$titulo='Restaurante Le Menhir Gijón';
?>


<ul>
<?php
l

for ($i = 0; $i < count($links); $i++) {
    echo '<li><a href="'.$links[$i].'">'.$links[$i].'</a></li>';
}
?>
</ul>

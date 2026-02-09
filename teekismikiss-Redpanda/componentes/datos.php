
<?php $address = 'Carretera Pola de Programadores, 33209 Gijón';
$tel = '985222222';
$movil = '698522222'; 
$moteCoder= 'Redpandacoder';
$listadoCursos =[ "python", "php", "html", "css", "js"];
//arriba datos de la academia

// datos newsletter

$mes = isset($_GET['month']) ? $_GET['month'] : 'febrero';
$nombreAcademia = isset($_Get['Academia']) ? $_Get['Academia'] : 'Red Panda';

// certificacion.php?nom=algo&curso=3 
$nombrealumno=$_GET['nom']; //algo
$numeroCursos=$_GET['curso'];//3 - devuelve un numero que será la posicion de la array $cursos =

$nombreCurso=$listadoCursos[$numeroCursos];

echo $nombreCurso;
/* $nombreCurso=$listadoCursos[$numeroCursos]; $numeroCursos es la position del curso en $listadoCursos que llamaremos en el texto (certificacion.php) <?=$nombreCurso?> y en dato.php haremos  la llamado echo*/  */ 
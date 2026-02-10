<?php
include 'productos.php';
include 'buscadores.css';

$pagina = $_GET['p'] ?? 'galeria'; // ?p=ficha&v=ID o ?p=galeria
?>

<!DOCTYPE html>
<html>

<head>
    <meta charset="UTF-8">
    <title>Videos PHP </title>
</head>

<body>
    <nav>
        <a href="?p=galeria">Galería</a> |
        <a href="?p=ficha&v=oY91DwQyGlI">Ficha Ejemplo</a>
    </nav>

    <?php if ($pagina === 'galeria'): ?> <!-- Si $pagina es exactamente "galeria" (valor + tipo string) -->
        <?php include 'public/galeriaDatos/galeria.php'; ?>

    <?php elseif ($pagina === 'ficha'):
        $id = $_GET['v'] ?? '';
        include 'galeriaDatos/ficha.php';
        ?>

    <?php else: ?>
        <p>Página no encontrada</p>
    <?php endif; ?>
</body>

</html>
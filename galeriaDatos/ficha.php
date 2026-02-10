<?php
// $id ya viene de index.php ($_GET['v'])
$video = null;
foreach ($listaVideo as $elemento) {
    if ($elemento['v'] === $id) {
        $video = $elemento;
        break;
    }
}
?>

<?php if ($video): ?>
    <div class="ficha">
        <h1>
            <?= htmlspecialchars($video['t']) ?>
        </h1>
        <p><strong>Grupo:</strong>
            <?= htmlspecialchars($video['g']) ?>
        </p>
        <p>
            <?= htmlspecialchars($video['desc']) ?>
        </p>
        <iframe width="560" height="315" src="https://www.youtube.com/embed/<?= htmlspecialchars($id) ?>" frameborder="0"
            allowfullscreen></iframe>
        <a href="?p=galeria" class="volver">← Volver</a>
    </div>
<?php else: ?>
    <p>Video ID
        <?= htmlspecialchars($id) ?> no encontrado
    </p>
<?php endif; ?>
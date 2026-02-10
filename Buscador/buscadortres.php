<?php
$listaVideo = [
    ['v' => 'oY91DwQyGlI'],
    ['v' => 'MJkdaVFHrto'],
    ['v' => 'eesyGnJwfAY'],
    ['v' => '3nYLTiY5skU']
];
include "buscadores.css";
?>
<ul class="VideoHtml">
    <?php foreach ($listaVideo as $elemento) {
        $id = htmlspecialchars($elemento['v']);
        ?>
        <li>
            <a href="https://www.youtube.com/watch?v=<?= $id ?>" target="_blank">
                <img src="https://img.youtube.com/vi/<?= $id ?>/hqdefault.jpg" width="120" height="90">
            </a>
        </li>
    <?php } ?>
</ul>
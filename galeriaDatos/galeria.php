<ul class="VideoHtml">
    <?php foreach ($listaVideo as $elemento) {
        $id = htmlspecialchars($elemento['v']);
        $titulo = htmlspecialchars($elemento['t']);
        ?>
        <li>
            <a href="?p=ficha&v=<?= $id ?>">
                <img src="https://img.youtube.com/vi/<?= $id ?>/hqdefault.jpg" width="120" height="90">
                <h3>
                    <?= $titulo ?>
                </h3>
            </a>
        </li>
    <?php } ?>
</ul>
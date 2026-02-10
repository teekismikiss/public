buscadortres.php
$listaVideo=[
    ['v' => '0S43IwBF0uM',]
    ['v' => 'MJkdaVFHrto',]
    ['v' => 'eesyGnJwfAY',]
    ['v' => '3nYLTiY5skU',]
]


<ul class="Video HTML">
<?
    foreach($listaVideo as $elemento){
        echo "<li>
        <a href='https://www.youtube.com/watch?v={$elemento['v']}' target='_blank'>
                <img src='https://img.youtube.com/vi/{$elemento['v']}/hqdefault.jpg'>
                
            </a></li>
            ";
    }
?>
<?php $listachuches=[
    ['nombre'=>'Gominola de oso', 'textura'=> 'blanda y gelatinosa'],
    ['nombre'=>'Nubes', 'textura'=> 'esponjosa y suave'],
    ['nombre'=>'Regaliz', 'textura'=> 'masticable'],
    ['nombre'=>'Caramelo duro', 'textura'=> 'duro y liso'],
    ['nombre'=>'Chicle', 'textura'=> 'elástica'],
    ['nombre'=>'Pica Fresa', 'textura'=> 'blanda con azúcar rugosa'],
    ['nombre'=>'Toffee', 'textura'=> 'pegajosa'],
     ['nombre'=>'Gominola de gusano', 'textura'=> 'blanda y flexible'],
    ['nombre'=>'Lenguas ácidas', 'textura'=> 'blanda con recubrimiento ácido'],
    ['nombre'=>'Caramelo relleno', 'textura'=> 'duro por fuera y blando por dentro']
   
];


foreach ($listachuches as $gominola){
    echo"
    <li>
        <h2>{$gominola['nombre']}</h2>
       <p>{$gominola['textura']}</p>

    </li>";
}
 ?>




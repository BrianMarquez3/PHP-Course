<!-- ###################################################-->
<!-- Iteraion de Matrices-->
<!-- ###################################################-->


<?php

$fotos = array(
    array(
        'foto1.jpg',
        'Mi primera foto',
        'Tigre Fotogenico'
    ),

    array(
        'foto2.jpg',
        'otra foto de la galeria',
        'Dormilon tomando siesta'
    ),
    array(
        'foto3.png',
        'Un Conejo',
        'Bambi saltando el la pradera'
    )

    );

echo '<ul style="list-style: none; display: flex;">';
for($i = 0; $i< count($fotos); $i++){
    echo'<li>';
    echo'<h2>'.$fotos[$i][1],'</h2>';
    echo'<img src="fotos/'.$fotos[$i][0].'" />';  
    echo '<p>'.$fotos[$i][2].'</p>';
    echo '</li/>';
}


?>

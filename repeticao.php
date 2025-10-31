<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    
    <div class="titulo">Laço for</div>
    <br>

    <?php
    for($cont = 1; $cont <= 5; $cont++){
        echo "$cont ";
    }
        echo "<br>";
    ?>
    
    <?php
    $array = [
        'Domingo',
        'Segunda',
        'Terça',
        'Quarta',
        'Quinta',
        'Sexta',
        'Sabado'
    ];

    foreach($array as $valor){
        echo"$valor ";
    }
    ?>

</body>
</html>
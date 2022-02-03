<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <h2>
        2T - POO - herencia - visibilidad - 
        abstract - sobreescritura / override
    </h2>

    <?php
    //Require
    require_once("./gato/Gato.php");
    require_once("./perro/Perro.php");


    //Instancia de clases
    $gato = new Gato();
    $perro = new Perro();

    $gato->comer();
    $gato->usarProtectedAnimal();
    $perro->comer();
    $perro->usarProtectedAnimal();
    ?>
</body>
</html>

<?php

use function App\Controladores\formulario;

require __DIR__."/../../vendor/autoload.php";
require __DIR__."/../Controladores/Formulario.php";

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php formulario(); ?>
</body>
</html>
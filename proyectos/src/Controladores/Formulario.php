<?php
namespace App\Controladores;

use App\Enums\Tamano;

?>

<?php function formulario():void{?>

    <form action="" method="post">

        <label for="">Nombre Cliente</label>
        <input type="text" name="nombreCliente">

        <label for="">Correo</label>
        <input type="email" name="correo">

        <label for="">Carnet</label>
        <input type="text" name="carnet">

        <label for="">Tipo de Producto</label>

        <input type="radio" name="producto" id="" value="Bebida">
        <label for="">Bebida</label>
        <input type="radio" name="producto" id="" value="Postre">
        <label for="">Postre</label>

        <label for="">Nombre Producto</label>
        <input type="text" name="nombreProducto">

        <label for="">Precio Base</label>
        <input type="number" name="precioBase">

        <label for="">Cantidad</label>
        <input type="number" name="cantidad">

        <label for="">Seleccione un tamano</label>
        <select name="tamano" id="">
            <?php foreach(Tamano::cases() as $value):?>
                <option value="<?= $value->value ?>"><?= $value->name ?></option>
            <?php endforeach;?>
        </select>

        <button type="submit">Hacer Pedido</button>
    </form>

<?php }?>


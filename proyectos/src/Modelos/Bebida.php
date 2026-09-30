<?php
namespace App\Modelos;

use App\Contracts\Producto;
use App\Enums\Tamano;
use Override;

class Bebida extends Producto{
    public function __construct(string $nombre, float $precioBase, public Tamano $tamano)
    {
        return parent::__construct($nombre, $precioBase);

    }
    #[Override]
    public function precioFina(int $cantidad): float
    {
        return ($this->precioBase + $this->tamano->recargo()) * $cantidad;
    }
}

?>
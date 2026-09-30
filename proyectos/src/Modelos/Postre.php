<?php 
namespace App\Modelos;

use App\Contracts\Producto;
use Override;

class Postre extends Producto{
    public function __construct(string $nombre, float $precioBase)
    {
        return parent::__construct($nombre, $precioBase);
    }


    #[Override]
    public function precioFina(int $cantidad): float
    {
        $total = $this->precioBase * $cantidad;

        if($cantidad > 2){
            return $total - ($total * 0.10);
        }
        else{
            return $total;
        }
    }
}

?>
<?php
namespace App\Contracts;

abstract class Producto{

    public function __construct(
        public readonly string $nombre,
        public readonly float $precioBase
    )
    {
    }

    public abstract function precioFina():float; 
}





?>
<?php
namespace App\Modelos;

class Cliente{
    public function __construct(public string $nombre, public string $correo, public string $carnet)
    {
    }
}


?>
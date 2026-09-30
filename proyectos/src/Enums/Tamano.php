<?php
namespace App\Enums;
enum Tamano: string{
    case Pequeno = 'P';
    case Mediano = 'M';
    case Grande = 'G';

    function recargo():float{
        return match ($this) {
            self::Pequeno => 0,
            self::Mediano => 0.25,
            self::Grande => 0.50
        };
    }
}




?>
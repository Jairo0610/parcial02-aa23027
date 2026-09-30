<?php
namespace App\Exceptions;

use DomainException;
use Throwable;

class PedidoInvalidoException extends DomainException{
    public function __construct(string $message = "", int $code = 0, Throwable|null $previous = null)
    {
        return parent::__construct($message, $code, $previous);
    }
}
?>
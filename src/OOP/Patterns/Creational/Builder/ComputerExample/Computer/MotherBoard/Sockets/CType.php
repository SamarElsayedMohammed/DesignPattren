<?php
namespace App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\MotherBoard\Sockets;

class CType
{
    private bool $withVideoTransfer;

    /**
     * CType constructor.
     * @param bool $withVideoTransfer
     */
    public function __construct(bool $withVideoTransfer)
    {
        $this->withVideoTransfer = $withVideoTransfer;
    }

    /**
     * @return bool
     */
    public function isWithVideoTransfer(): bool
    {
        return $this->withVideoTransfer;
    }
}
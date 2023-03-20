<?php
namespace App\OOP\Patterns\Creational\Builder\ComputerExample;

use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\Types\Computer;

class Director
{
    private Builder $builder;

    /**
     * Director constructor.
     * @param Builder $builder
     */
    public function __construct(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function changeBuilder(Builder $builder)
    {
        $this->builder = $builder;
    }

    public function makeComputer(): Computer
    {
        return $this->builder->getComputer();
    }
    public function getDashbord()
    {
        return $this->builder->getComputer()->getDashbord();
    }
}
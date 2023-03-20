<?php
namespace App\OOP\Patterns\Creational\Builder\ComputerExample\Builders;

use App\OOP\Patterns\Creational\Builder\ComputerExample\Builder;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\CoolingSystem;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\Keyboard;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\Monitor;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\MotherBoard\MainParts\CPU;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\MotherBoard\MainParts\Disk;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\MotherBoard\MainParts\GPU;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\MotherBoard\MainParts\NetworkCard;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\MotherBoard\MainParts\RAM;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\MotherBoard\MainParts\Sockets;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\MotherBoard\MotherBoard;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\MotherBoard\Sockets\CType;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\MotherBoard\Sockets\USB;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\Mouse;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\Types\Computer;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\Types\ComputerXL;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\UPS;

class ComputerXLBuilder extends Builder
{
    protected function buildMotherBoard(): MotherBoard
    {
        $cpu = new CPU(2.8);
        $ram = new RAM(32);
        $gpu = new GPU(4);
        $sockets = new Sockets(
            [
                new USB(2),
                new USB(3),
                new CType(true),
                new CType(true),
                new CType(true)
            ]
        );
        $networkCard = new NetworkCard(5);
        $disk = new Disk('SSD');

        return new MotherBoard(
            $cpu, $ram, $gpu, $sockets, $networkCard, $disk
        );
    }

    protected function buildKeyboard(): Keyboard
    {
        return new Keyboard(true);
    }

    protected function buildMouse(): Mouse
    {
        return new Mouse(false);
    }

    protected function buildMonitor(): Monitor
    {
        return new Monitor('1920 FHD');
    }

    protected function buildCollingSystem(): CoolingSystem
    {
        return new CoolingSystem(5);
    }

    protected function buildUPS(): UPS
    {
        return new UPS(96);
    }

    public function getComputer(): Computer
    {
        $computer = new ComputerXL();
        $computer->setKeyboard($this->buildKeyboard());
        $computer->setMonitor($this->buildMonitor());
        $computer->setMotherBoard($this->buildMotherBoard());
        $computer->setCs($this->buildCollingSystem());
        $computer->setUps($this->buildUPS());
        return $computer;
    }
    public function dashbord(){
        return "string from xl computer";
    }
}
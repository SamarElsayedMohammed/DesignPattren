<?php
namespace App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\Types;

use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\Keyboard;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\Monitor;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\MotherBoard\MotherBoard;
use App\OOP\Patterns\Creational\Builder\ComputerExample\Computer\Mouse;

abstract class Computer
{
    protected MotherBoard $motherBoard;
    protected Keyboard $keyboard;
    protected Mouse $mouse;
    protected Monitor $monitor;

    abstract public function turnOn(): bool;
    abstract public function turnOff(): bool;

    /**
     * @param MotherBoard $motherBoard
     */
    public function setMotherBoard(MotherBoard $motherBoard): void
    {
        $this->motherBoard = $motherBoard;
    }

    /**
     * @param Keyboard $keyboard
     */
    public function setKeyboard(Keyboard $keyboard): void
    {
        $this->keyboard = $keyboard;
    }

    /**
     * @param Mouse $mouse
     */
    public function setMouse(Mouse $mouse): void
    {
        $this->mouse = $mouse;
    }

    /**
     * @param Monitor $monitor
     */
    public function setMonitor(Monitor $monitor): void
    {
        $this->monitor = $monitor;
    }

	/**
	 * @return Monitor
	 */
	public function getMonitor(): Monitor {
		return $this->monitor;
	}

	/**
	 * @return Mouse
	 */
	public function getMouse(): Mouse {
		return $this->mouse;
	}

	/**
	 * @return Keyboard
	 */
	public function getKeyboard(): Keyboard {
		return $this->keyboard;
	}

	/**
	 * @return MotherBoard
	 */
	public function getMotherBoard(): MotherBoard {
		return $this->motherBoard;
	}
    public function getDashbord(): string{
        $name =explode("\\",static::class);
        $name = end($name);
        return <<<END
                    --------------------------------------------------------<br>
                    Features of your computer is :{$name}<br>
                    --------------------------------------------------------<br>

                    keyboard features : utf Support<br>
                    --------------------------------------------------------<br>

                    Monitor Features :<br>
                        Resolution => {$this->getMonitor()->getResolution()}<br>
                    --------------------------------------------------------<br>
                    motherboard Features :<br>
                        -Speed => {$this->getMotherBoard()->getCpu()->getSpeed() }GHZ<br>
                        -Ram size => {$this->getMotherBoard()->getRam()->getSpeed() }GB<br>
                        -Disk Type => {$this->getMotherBoard()->getDisk()->getType() }<br>

                END;
    }
}
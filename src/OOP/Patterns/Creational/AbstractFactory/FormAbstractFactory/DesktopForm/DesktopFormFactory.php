<?php
namespace App\OOP\Patterns\Creational\AbstractFactory\FormAbstractFactory\DesktopForm;

use App\OOP\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractButton;
use App\OOP\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractFormFactory;
use App\OOP\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextArea;
use App\OOP\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractTextInput;
use App\OOP\Patterns\Creational\AbstractFactory\FormAbstractFactory\AbstractWindow;

class DesktopFormFactory implements AbstractFormFactory
{
    public function createTextInput(): AbstractTextInput
    {
        return new DesktopTextInput('Desktop Input', 'Enter your name:', '');
    }

    public function createTextArea(): AbstractTextArea
    {
        return new DesktopTextArea('Desktop Text Area', 'Enter your message...');
    }

    public function createButton(): AbstractButton
    {
        return new DesktopButton('Click Me');
    }

    public function createWindow(): AbstractWindow
    {
        return new DesktopWindow('1920x1080');
    }
}
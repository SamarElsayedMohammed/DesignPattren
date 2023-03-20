<?php
namespace App\OOP\Patterns\Structural\Decorator\Notifications;

use App\OOP\Patterns\Structural\Decorator\NotificationsTypes\Message;

abstract class MessageType {

    abstract public function createMessage(): Message;

    public function renderMessage(): string
    {
        $message = $this->createMessage();

        return "
            ##########################<br>
            {$message->message()}<br>
            ##########################<br>
        ";
    }
}
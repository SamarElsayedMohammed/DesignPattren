<?php

namespace App\OOP\Patterns\Structural\Decorator\Notifications;
use App\OOP\Patterns\Structural\Decorator\INotifier;
use App\OOP\Patterns\Structural\Decorator\NotificationsTypes\Message;
use App\OOP\Patterns\Structural\Decorator\NotificationsTypes\SMSMessage;

class SMSNotification extends MessageType implements INotifier {

    protected string $mobileNumber;
    

    /**
     * @param string $mobileNumber
     */
    public function __construct(string $mobileNumber) {
    	$this->mobileNumber = $mobileNumber;
    }
	/**
	 * @return mixed
	 */public function notify() {

        return $this->renderMessage();
	}
	/**
	 * @return Message
	 */
	public function createMessage(): Message {
        return new SMSMessage($this->mobileNumber);
	}
}
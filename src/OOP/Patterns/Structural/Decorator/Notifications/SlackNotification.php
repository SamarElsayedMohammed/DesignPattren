<?php

namespace App\OOP\Patterns\Structural\Decorator\Notifications;
use App\OOP\Patterns\Structural\Decorator\INotifier;
use App\OOP\Patterns\Structural\Decorator\NotificationsTypes\Message;
use App\OOP\Patterns\Structural\Decorator\NotificationsTypes\SlackMessage;

class SlackNotification extends MessageType implements INotifier {

    protected string $slackAcount;
    

    /**
     * @param string $slackAcount
     */
    public function __construct(string $slackAcount) {
    	$this->slackAcount = $slackAcount;
    }
    
	/**
	 * @return mixed
	 */
    public function notify() {

		return $this->renderMessage();
	}
	/**
	 * @return Message
	 */
	public function createMessage(): Message {
        return new SlackMessage($this->slackAcount);
	}
}
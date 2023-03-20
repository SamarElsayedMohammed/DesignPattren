<?php

namespace App\OOP\Patterns\Structural\Decorator\Notifications;

use App\OOP\Patterns\Structural\Decorator\INotifier;
use App\OOP\Patterns\Structural\Decorator\NotificationsTypes\Message;
use App\OOP\Patterns\Structural\Decorator\NotificationsTypes\EmailMessage;

class EmailNotification extends MessageType implements INotifier
{

	private string $email;

	/**
	 * @param string $email
	 */
	public function __construct(string $email)
	{
		$this->email = $email;
	}

	/**
	 * @return mixed
	 */
	public function notify()
	{
		return $this->renderMessage();
	}


	/**
	 * @return Message
	 */
	public function createMessage(): Message
	{
		return new EmailMessage($this->email);
	}
}

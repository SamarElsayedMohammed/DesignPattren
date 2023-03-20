<?php

namespace App\OOP\Patterns\Structural\Decorator\NotificationsTypes;

class EmailMessage extends Message
{

	public string $email;

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
	public function message()
	{
		return "send email message to email account '{$this->email}'";
	}
}

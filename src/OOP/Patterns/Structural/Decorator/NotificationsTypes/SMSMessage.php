<?php

namespace App\OOP\Patterns\Structural\Decorator\NotificationsTypes;

class SMSMessage extends Message
{


	protected string $phoneNomber;

	/**
	 * @param string $phoneNomber
	 */
	public function __construct(string $phoneNomber)
	{
		$this->phoneNomber = $phoneNomber;
	}

	/**
	 * @return mixed
	 */
	public function message()
	{
		return "send sms to mobile number for number '{$this->phoneNomber}'";
	}
}

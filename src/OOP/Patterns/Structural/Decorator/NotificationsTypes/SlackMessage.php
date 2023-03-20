<?php

namespace App\OOP\Patterns\Structural\Decorator\NotificationsTypes;

class SlackMessage extends Message
{

	protected string $account;

	/**
	 * @param string $account
	 */
	public function __construct(string $account)
	{
		$this->account = $account;
	}
	/**
	 * @return mixed
	 */
	public function message()
	{

		return "send slack message to slack account '{$this->account}'";
	}
}

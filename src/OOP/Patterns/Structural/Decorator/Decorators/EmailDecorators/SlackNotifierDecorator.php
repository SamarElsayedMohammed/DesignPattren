<?php
namespace App\OOP\Patterns\Structural\Decorator\Decorators\EmailDecorators;

use App\OOP\Patterns\Structural\Decorator\INotifier;
use App\OOP\Patterns\Structural\Decorator\Notifications\SlackNotification;
use App\OOP\Patterns\Structural\Decorator\NotifierDecorator;
use App\OOP\Patterns\Structural\Decorator\Notifications\SMSNotification;
use App\OOP\Patterns\Structural\Decorator\NotificationsTypes\SlackMessage;

class SlackNotifierDecorator extends NotifierDecorator{

    protected string $account;
    protected string $phone;

    public function __construct(INotifier $notifier, string $account, string $phone)
    {
        parent::__construct($notifier);
        $this->account = $account;
        $this->phone = $phone;
    }

    public function notify()
    {
     echo parent::notify() ;
     echo $this->sendSMS();
     echo $this->sendSlack();
    }

    public function sendSMS()
    {
        $sms = new SMSNotification($this->phone);
        return $sms->notify();
    }

    public function sendSlack()
    {
        $sms = new SlackNotification($this->account);
        return $sms->notify();
    }

}
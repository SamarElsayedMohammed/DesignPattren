<?php
namespace App\OOP\Patterns\Structural\Decorator\Decorators\EmailDecorators;

use App\OOP\Patterns\Structural\Decorator\INotifier;
use App\OOP\Patterns\Structural\Decorator\NotifierDecorator;
use App\OOP\Patterns\Structural\Decorator\Notifications\SMSNotification;

class SMSNotifierDecorator extends NotifierDecorator{

    protected string $phoneNumber;

    public function __construct(INotifier $notifier, string $phoneNumber)
    {
        parent::__construct($notifier);
        $this->phoneNumber = $phoneNumber;
    }

    public function notify()
    {
     echo parent::notify() ;
     echo $this->sendSMS();
    }

    public function sendSMS()
    {
        $sms = new SMSNotification($this->phoneNumber);
        return $sms->notify();
    }

}
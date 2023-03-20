<?php

use App\OOP\Patterns\Structural\Decorator\Decorators\EmailDecorators\SlackNotifierDecorator;
use App\OOP\Patterns\Structural\Decorator\Decorators\EmailDecorators\SMSNotifierDecorator;
use App\OOP\Patterns\Structural\Decorator\Notifications\EmailNotification;
use App\OOP\Patterns\Structural\Decorator\Notifications\SMSNotification;

require_once( __DIR__ . DIRECTORY_SEPARATOR . 'vendor' .DIRECTORY_SEPARATOR . 'autoload.php');

$sendnotification = new EmailNotification('samar@gmail.com');
$sms = new SlackNotifierDecorator($sendnotification,'samar@slack','011259886589658');
 $sms->notify();
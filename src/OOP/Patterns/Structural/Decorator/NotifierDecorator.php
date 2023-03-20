<?php
namespace App\OOP\Patterns\Structural\Decorator;

class NotifierDecorator implements INotifier{

    protected INotifier $notifier;
    

    /**
     * @param INotifier $notifier
     */
    public function __construct(INotifier $notifier) {
    	$this->notifier = $notifier;
    }

	/**
	 * @return INotifier
	 */
	public function getNotifier(): INotifier {
		return $this->notifier;
	}
	
	/**
	 * @param INotifier $notifier 
	 * @return self
	 */
	public function setNotifier(INotifier $notifier): self {
		$this->notifier = $notifier;
		return $this;
	}
	/**
	 * @return mixed
	 */
	public function notify() {

       return $this->notifier->notify();
	}
} 
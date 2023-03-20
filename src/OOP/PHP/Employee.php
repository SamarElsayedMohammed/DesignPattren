<?php
namespace App\OOP\PHP;

use App\OOP\PHP\Salary;

class Employee {

    
    private int $age;
    private Salary $salary;
    private string $name;

    public function __construct(string $name,int $age,Salary $salary){

        $this->name = $name;
        $this->age = $age;
        $this->salary = $salary;

    }



	/**
	 * @return int
	 */
	public function getAge(): int {
		return $this->age;
	}
	
	/**
	 * @param int $age 
	 * @return self
	 */
	public function setAge(int $age): self {
		$this->age = $age;
		return $this;
	}

	/**
	 * @return string
	 */
	public function getName(): string {
		return $this->name;
	}
	
	/**
	 * @param string $name 
	 * @return self
	 */
	public function setName(string $name): self {
		$this->name = $name;
		return $this;
	}

	/**
	 * @return Salary
	 */
	public function getSalary(): Salary {
		return $this->salary ;
	}
	
	/**
	 * @param Salary $salary 
	 * @return self
	 */
	public function setSalary(Salary $salary): self {
		$this->salary = $salary;
		return $this;
	}

	public function getTotalSallary()
	{
		return "user '".$this->name."' take Salary about ". $this->getSalary()->calculateSalary()." after all tax <br>";
	}
}
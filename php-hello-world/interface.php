<?php
interface Payable {
    public function getPaymentAmount();
}

class Employee implements Payable {
    public $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->salary = $salary;
    }

    public function getPaymentAmount() {
        return $this->salary;
    }
}

class Contractor implements Payable {
    public $name;
    private $hourlyRate;
    private $hoursWorked;

    public function __construct($name, $hourlyRate, $hoursWorked) {
        $this->name = $name;
        $this->hourlyRate = $hourlyRate;
        $this->hoursWorked = $hoursWorked;
    }

    public function getPaymentAmount() {
        return $this->hourlyRate * $this->hoursWorked;
    }
}

$employee = new Employee("John", 500);
echo "Nhân viên {$employee->name} có mức lương là: {$employee->getPaymentAmount()}<br>";

$contractor = new Contractor("Jane", 20, 40);
echo "Nhà thầu {$contractor->name} có mức lương là: {$contractor->getPaymentAmount()}<br>";

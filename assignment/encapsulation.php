<?php
class Employee {
    private $name;
    private $salary;

    public function __construct($name, $salary) {
        $this->name = $name;
        $this->setSalary($salary);
    }

    public function getSalary() {
        return $this->salary;
    }

    public function setSalary($salary) {
        if ($salary >= 0) {
            $this->salary = $salary;
        } else {
            throw new Exception("Salary cannot be negative");
        }
    }

    public function getEmployeeDetails() {
        return "Employee: $this->name, Salary: " . $this->getSalary();
    }
}

// Example usage
$employee = new Employee("John Doe", 50000);
echo $employee->getEmployeeDetails();
?>

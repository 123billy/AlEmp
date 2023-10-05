<?php

class Person
{
    protected $firstName;
    protected $lastName;
    protected $age;

    public function __construct($firstName, $lastName, $age)
    {
        $this->firstName = $firstName;
        $this->lastName = $lastName;
        $this->age = $age;
    }

    public function getFullName()
    {
        return $this->firstName . ' ' . $this->lastName;
    }

    public function getAge()
    {
        return $this->age;
    }
}

class Employee extends Person
{
    private $employeeId;
    private $position;
    private $salary;

    public function __construct($firstName, $lastName, $age, $employeeId, $position, $salary)
    {
        parent::__construct($firstName, $lastName, $age);
        $this->employeeId = $employeeId;
        $this->position = $position;
        $this->salary = $salary;
    }

    public function getEmployeeInfo()
    {
        return "Employee ID: $this->employeeId, Position: $this->position, Salary: $this->salary";
    }
}

class Student extends Person
{
    private $studentId;
    private $schoolName;

    public function __construct($firstName, $lastName, $age, $studentId, $schoolName)
    {
        parent::__construct($firstName, $lastName, $age);
        $this->studentId = $studentId;
        $this->schoolName = $schoolName;
    }

    public function getStudentInfo()
    {
        return "Student ID: $this->studentId, School: $this->schoolName";
    }
}

// Create an Employee
$employee = new Employee("John", "Doe", 30, "EMP12345", "Manager", 60000);

// Create a Student
$student = new Student("Jane", "Smith", 25, "STU67890", "University of Example");

// Output Employee and Student Information
echo $employee->getFullName() . " (Age: " . $employee->getAge() . ")\n";
echo $employee->getEmployeeInfo() . "\n";

echo $student->getFullName() . " (Age: " . $student->getAge() . ")\n";
echo $student->getStudentInfo() . "\n";

<?php
/**
* Plugin Name: CTS Test Plugin
* Plugin URI: https://customwp.io/
* Description: Test.
* Version: 0.1
* Author: Alejandro Perez Sanabria
* Author URI: https://customwp.io/
**/

class Employee {
  
  public string $name;
  public string $position; 
  public float $salary;
  
    public function __construct( $name, $position, $salary
       
    ) {
      $this->name     = $name;
      $this->position = $position;
      $this->salary   = $salary;
      
    }

    public function get_name() {
        return $this->name;
    }

    public function get_position() {
        return $this->position;
    }

    public function get_salary() {
        return $this->salary;
    }

    public function get_employee_info() {
        return $this->name." job title is  ".$this->position." and has a salary of ".$this->salary;
    }
}

class Company {

    public $employees = [];

    public function add_employee( $employee) {
      $this->employees[] = $employee;
      return $this;
    }

    public function get_employees() {
        return $this->employees;
    }

    public function get_employee_count() {
        return count($this->employees);
    }

    public function get_average_salary() {
      $employeesCount   = $this->get_employee_count();
      $totalSalary     = 0;

        foreach ($this->employees as $employee) {
            $totalSalary += $employee->get_salary();
        }

        return $totalSalary / $employeesCount;
    }
}

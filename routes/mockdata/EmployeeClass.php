<?php
class Employee
{
  private $employee;
  
  public function __construct($employee)
  {
    $this->employee = json_decode($employee, true);  
  }
 
  public function getData()
  {
    return $this->employee;
  }
};
?>

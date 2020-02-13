<?php

class Worker
{
    private $fullName;
    private $salary;

    function __construct($fullName, Payable $salary)
    {
        $this->fullName = $fullName;
        $this->salary = $salary;
    }

    public function getSalary(): float
    {
        return $this->salary->getSalary();
    }
}
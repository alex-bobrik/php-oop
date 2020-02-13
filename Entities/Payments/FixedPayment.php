<?php

class FixedPayment implements Payable
{
    private $salary;

    private $duration;

    function __construct(float $salary, int $duration = 1)
    {
        $this->salary = $salary;
        $this->duration = $duration;
    }

    public function getSalary(): float
    {
        return $this->salary * $this->duration;
    }
}
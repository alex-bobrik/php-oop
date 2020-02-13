<?php

require_once('Interfaces\Payable.php');
require_once('Entities\Workers\Worker.php');

class Project
{
    private $name;
    private $workers = [];

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function addWorker(Worker $worker)
    {
        $this->workers[] = $worker;
    }

    public function getPrice(): float
    {
        $projectPrice = 0;
        
        foreach ($this->workers as $worker) {
            $projectPrice += $worker->getSalary();
        }
        
        return $projectPrice;
    }
}
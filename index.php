<?php

require_once('Entities\Project.php');
require_once('Entities\Workers\SeniorDev.php');
require_once('Entities\Workers\MiddleDev.php');
require_once('Entities\Workers\Designer.php');
require_once('Entities\Workers\Typesetter.php');
require_once('Entities\Payments\FixedPayment.php');
require_once('Entities\Payments\TimedPayment.php');

$project = new Project('X');
$project->addWorker(new Designer('Designer John', new FixedPayment(3000)));
$project->addWorker(new SeniorDev('Senior Tomato', new TimedPayment(10, 60)));
$project->addWorker(new MiddleDev('Middle Roshan', new FixedPayment(1000, 3)));
$project->addWorker(new MiddleDev('Middle Narosh', new FixedPayment(1000, 3)));
$project->addWorker(new Typesetter('Typesetter Js', new TimedPayment(5, 120)));

echo $project->getPrice();
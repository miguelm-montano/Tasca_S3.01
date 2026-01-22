<?php

require_once 'classes/ElectricHeater.php';
require_once 'classes/WashingMachine.php';
require_once 'classes/WashingMachineActions.php';
require_once 'classes/HeaterActions.php';

$heater = new ElectricHeater();
$washer = new WashingMachine();

$heater->turnOn();
$heater->heat();
$heater->turnOff();

echo PHP_EOL;

$washer->turnOn();
$washer->wash();
$washer->turnOff();

?>
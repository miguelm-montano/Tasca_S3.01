<?php

require_once 'WashingMachineActions.php';

class WashingMachine implements WashingMachineActions {
    
    public function turnOn(): void {

        echo "Washing machine on" . PHP_EOL;
    }

    public function turnOff(): void {

        echo "Washing machine off" . PHP_EOL;
    }

    public function wash(): void {
        
        echo "Washing clothes" . PHP_EOL;
    }
}
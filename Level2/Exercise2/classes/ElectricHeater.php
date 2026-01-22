<?php

require_once 'HeaterActions.php';

class ElectricHeater implements HeaterActions {
    
    public function turnOn(): void {

        echo "Heater on" . PHP_EOL;
    }

    public function turnOff(): void {

        echo "Heater off" . PHP_EOL;
    }

    public function heat(): void {
        
        echo "Heating the room" . PHP_EOL;
    }
}

?>
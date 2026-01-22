<?php

interface WashingMachineActions {
    
    public function turnOn(): void;
    public function turnOff(): void;
    public function wash(): void;
}

?>
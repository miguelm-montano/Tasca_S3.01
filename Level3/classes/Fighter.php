<?php

require_once 'Character.php';
require_once 'Fight.php';

class Fighter extends Character implements Fight {

    public function attack(): void {

        echo "The character attacks with a sword." . PHP_EOL;
    }
}
?>
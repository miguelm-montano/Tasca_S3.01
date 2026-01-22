<?php

require_once 'Fight.php';

class Combat {

    function doCombat(Fight $fighter): void {

        $fighter->attack(); 
    }
}
?>
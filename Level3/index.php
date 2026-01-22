<?php

require_once 'classes/Character.php';
require_once 'classes/Ghost.php';
require_once 'classes/Fighter.php';
require_once 'classes/Fight.php';
require_once 'classes/Combat.php';

$ninja = new Fighter();
$ghost = new Ghost();

$combat = new Combat();

$combat->doCombat($ninja);
$ghost->move();

?>
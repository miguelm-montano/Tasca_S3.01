<?php

require_once "Play.php";
require_once "InstrumentPlayer.php";
require_once "Guitar.php";
require_once "Drums.php";
require_once "Piano.php";

$player = new InstrumentPlayer();

$player->play(new Guitar);
$player->play(new Drums);
$player->play(new Piano);

?>
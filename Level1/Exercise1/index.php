<?php

require_once __DIR__ . "/classes/Athlete.php";
require_once __DIR__ . "/classes/Event.php";
require_once __DIR__ . "/classes/OlympicGames.php";
require_once __DIR__ . "/classes/OlympicData.php";
require_once __DIR__ . "/classes/PrintResult.php";

//Olimpic Games
$olympics = new OlympicGames();

//Events
$sprint = new Event("100m Sprint", "2024-08-01");
$swimming = new Event("Swimming", "2024-08-02");

$olympics->addEvent($sprint);
$olympics->addEvent($swimming);

//Athletes
$usain = new Athlete("Usain Bolt", "Jamaica");
$phelps = new Athlete("Michael Phelps", "USA");

$olympics->addAthlete($usain);
$olympics->addAthlete($phelps);

//Olympic Data
$olympicData = new OlympicData();

$olympicData->processOlympicData($olympics, $usain, $sprint, "Gold");

$olympicData->processOlympicData($olympics, $phelps, $swimming, "Gold");

// Print Results
$printer = new PrintResult();
$printer->printResults($olympics);
?>
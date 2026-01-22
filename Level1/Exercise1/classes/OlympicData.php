<?php

require_once "OlympicGames.php";
require_once "Result.php";
require_once "Athlete.php";
require_once "Event.php";

class OlympicData {

    public function processOlympicData(OlympicGames $games, Athlete $athlete, Event $event, string $medal): void {

        $result = new Result($athlete, $event, $medal);

        $games->addResult($result);
    }
}
?>

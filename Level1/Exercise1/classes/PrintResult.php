<?php

require_once "OlympicGames.php";
require_once "Result.php";

class PrintResult {

    public function printResults(OlympicGames $games): void {

        echo "Olympic Games Results:" . PHP_EOL;

        foreach ($games->getEvents() as $event) {

            echo "Event: {$event->getName()} on {$event->getDate()}" . PHP_EOL;

            foreach ($games->getResults() as $result) {

                if ($result->getEvent() === $event) {

                    $athlete = $result->getAthlete();

                    echo "- {$athlete->getName()} from {$athlete->getCountry()} won {$result->getMedal()}" . PHP_EOL;
                }
            }
        }
    }
}
?>
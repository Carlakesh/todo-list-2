<?php
//creates the day date
$date = new DateTime("today");
//creates the time
$time = new DateTime('America/Los_Angeles');
//prints out the date and time
echo $date->format("M/D" . " " . "d/Y") . " at " . $time->format("h:i");
?>
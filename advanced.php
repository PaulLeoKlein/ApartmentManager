<?php
// Values received via ajax
$title = $_POST['EventTitle'];
$startunformatted = $_POST['StartTime'];
$endunformatted = $_POST['EndTime'];
$color = $_POST['Color'];
$recurringweeks = $_POST['RecurringWeeks'];
$recurringbool = $_POST['recurring'];
$initialdate = $_POST['EventDate'];
$starttimeperiod = $_POST['starttimeperiod'];
$endtimeperiod = $_POST['endtimeperiod'];
$counter = 0;
$datesarray = $_POST['check_list'];
//Converting times into 24 hour time, if it is PM
if ($starttimeperiod == 'PM'){
$hours = substr($startunformatted, 0, 2);
$hours = $hours + 12;
$startunformatted =  substr_replace($startunformatted, $hours, 0, 2);
}

if ($endtimeperiod == 'PM'){
$hours = substr($endunformatted, 0, 2);
$hours = $hours + 12;
$endunformatted =  substr_replace($endunformatted, $hours, 0, 2);
}
//this part works, need to implement algorithm to schedule recurring events for correct days, as well as formatting the inital event to pass to the 
//database, also will need to figure out for loop to pass each recurring event to the database

//echo $initialdate;
//echo "<br/>";
//echo $startunformatted;
//echo "<br/>";
//$combinedstart = $initialdate . ' ' . $startunformatted;
//echo $combinedstart;
//echo "<br/>";
//$test = new DateTime($combinedstart):
//echo $test;

// connection to the database
try {
$bdd = new PDO('mysql:host=localhost;dbname=fullcalendar', 'root', 'toor');
} catch(Exception $e) {
exit('Unable to connect to database.');
}

// insert the records
//$sql = "INSERT INTO events (title, start, end, color) VALUES (:title, :start, :end, :color)";
//$q = $bdd->prepare($sql);
//$q->execute(array(':title' => $title, ':start' => $start, ':end' => $end, ':color' => $color));
//?>
